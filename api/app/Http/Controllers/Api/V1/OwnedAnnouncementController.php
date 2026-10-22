<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AnnouncementResource;
use App\Models\Announcement;
use App\Models\Image;
use App\Services\Api\V1\PhoneNormalizer;
use App\Services\Api\V1\Slug;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OwnedAnnouncementController extends Controller
{
    public function __construct(
        private PhoneNormalizer $phones,
        private Slug $slugs,
    ) {}

    public function index(): AnonymousResourceCollection
    {
        $ads = $this->query()
            ->where('user_id', Auth::guard('api')->id())
            ->latest()
            ->get();

        return AnnouncementResource::collection($ads);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $this->validated($request);

        $duplicate = Announcement::query()
            ->where('user_id', Auth::guard('api')->id())
            ->where('title', $data['title'])
            ->exists();

        if ($duplicate) {
            return response()->json([
                'message' => 'Vous avez déjà une annonce avec ce titre.',
            ], 422);
        }

        $ad = new Announcement;
        $this->fill($ad, $data);
        $ad->user_id = Auth::guard('api')->id();
        $ad->slug = $this->slugs->from($data['title']);
        $ad->expire = Carbon::now()->addDays(7);
        $ad->save();
        $this->storeVideo($request, $ad);

        return (new AnnouncementResource($this->present($ad)))
            ->response()
            ->setStatusCode(201);
    }

    public function update(Request $request, Announcement $announcement): AnnouncementResource
    {
        $announcement = $this->owned($announcement);
        $data = $this->validated($request);

        $duplicate = Announcement::query()
            ->where('user_id', Auth::guard('api')->id())
            ->where('title', $data['title'])
            ->whereKeyNot($announcement->id)
            ->exists();

        if ($duplicate) {
            abort(response()->json([
                'message' => 'Vous avez déjà une annonce avec ce titre.',
            ], 422));
        }

        $this->fill($announcement, $data);
        $announcement->save();
        $this->storeVideo($request, $announcement);

        return new AnnouncementResource($this->present($announcement));
    }

    public function destroy(Announcement $announcement): Response
    {
        $announcement = $this->owned($announcement);

        foreach ($announcement->images as $image) {
            Storage::delete('public/ads/'.$announcement->id.'/'.$image->path);
            $image->delete();
        }

        Storage::deleteDirectory('public/ads/'.$announcement->id);
        $announcement->delete();

        return response()->noContent();
    }

    public function images(Request $request, Announcement $announcement): JsonResponse
    {
        $announcement = $this->owned($announcement);

        $request->validate([
            'images' => ['required', 'array', 'min:1'],
            'images.*' => ['file', 'mimes:jpg,jpeg,png', 'max:10240'],
        ]);

        $stored = [];

        foreach ($request->file('images', []) as $index => $file) {
            $name = $announcement->id.'_'.time().'_'.$index.'_'.basename($file->getClientOriginalName());
            $file->storeAs('public/ads/'.$announcement->id, $name);

            $image = new Image;
            $image->path = $name;
            $image->save();
            $announcement->images()->attach($image->id);
            $stored[] = $name;
        }

        return response()->json(['data' => $stored], 201);
    }

    public function destroyImage(Announcement $announcement, Image $image): Response
    {
        $announcement = $this->owned($announcement);

        $attached = $announcement->images()->whereKey($image->id)->exists();
        abort_unless($attached, 404);

        Storage::delete('public/ads/'.$announcement->id.'/'.$image->path);
        $announcement->images()->detach($image->id);
        $image->delete();

        return response()->noContent();
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'town_id' => ['required', 'integer', 'exists:towns,id'],
            'quarter_id' => ['required', 'integer', 'exists:quarters,id'],
            'category_id' => ['required', 'integer', 'exists:announcement_categories,id'],
            'gender' => ['required', 'string', 'max:50'],
            'age' => ['required', 'integer', 'min:18', 'max:99'],
            'phone' => ['required', 'string', 'max:30'],
            'location' => ['required', 'string', 'max:255'],
            'accepted' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1500'],
            'video' => ['sometimes', 'file', 'mimes:mp4,mov,webm,mkv', 'max:51200'],
        ]);
    }

    private function fill(Announcement $ad, array $data): void
    {
        $ad->town_id = $data['town_id'];
        $ad->quarter_id = $data['quarter_id'];
        $ad->announcement_category_id = $data['category_id'];
        $ad->gender = $data['gender'];
        $ad->age = $data['age'];
        $ad->whatsapp = $this->phones->whatsapp($data['phone']);
        $ad->location = $data['location'];
        $ad->accepted = $data['accepted'];
        $ad->title = $data['title'];
        $ad->description = $data['description'];
    }

    private function storeVideo(Request $request, Announcement $ad): void
    {
        if (! $request->hasFile('video')) {
            return;
        }

        $video = $request->file('video');
        $name = $ad->id.'_'.time().'_'.basename($video->getClientOriginalName());
        $video->storeAs('public/ads/'.$ad->id.'/videos', $name);
        $ad->video_path = $name;
        $ad->save();
    }

    private function owned(Announcement $announcement): Announcement
    {
        abort_unless((int) $announcement->user_id === (int) Auth::guard('api')->id(), 404);

        return $announcement;
    }

    private function query()
    {
        return Announcement::query()
            ->with(['town', 'quarter', 'category', 'images', 'User'])
            ->withCount('visits');
    }

    private function present(Announcement $ad): Announcement
    {
        return $this->query()->findOrFail($ad->id);
    }
}
