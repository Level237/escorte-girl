<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AnnouncementResource;
use App\Http\Resources\V1\ReviewResource;
use App\Models\Announcement;
use App\Models\User;
use App\Services\Api\V1\PublishedAnnouncementQuery;
use App\Services\Api\V1\VisitRecorder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    public function __construct(
        private PublishedAnnouncementQuery $announcements,
        private VisitRecorder $visits,
    ) {}

    public function index(Request $request): AnonymousResourceCollection
    {
        $request->validate([
            'tier' => 'sometimes|in:home,free,premium,gold,vip',
            'town_id' => 'sometimes|integer',
            'quarter_id' => 'sometimes|integer',
            'category_id' => 'sometimes|integer',
            'sort' => 'sometimes|in:recent,popular,random',
            'page' => 'sometimes|integer|min:1',
            'per_page' => 'sometimes|integer|min:1|max:100',
        ]);

        $query = $this->announcements->sort(
            $this->announcements->apply($request),
            $request
        );

        if ($request->string('tier')->toString() === 'home') {
            return AnnouncementResource::collection($query->limit(9)->get());
        }

        $page = $query->paginate($request->integer('per_page', 20))->withQueryString();

        return AnnouncementResource::collection($page);
    }

    public function byTown()
    {
        $rows = DB::table('announcements')
            ->where('announcements.status', 1)
            ->join('towns', 'towns.id', '=', 'announcements.town_id')
            ->select('towns.id as town_id', 'towns.town_name', DB::raw('count(*) as count'))
            ->groupBy('towns.id', 'towns.town_name')
            ->orderByDesc('count')
            ->get();

        return response()->json(['data' => $rows]);
    }

    public function lookup(Request $request): AnonymousResourceCollection
    {
        $data = $request->validate([
            'username' => ['required', 'string'],
            'slug' => ['required', 'string'],
        ]);

        $user = User::query()->where('username', $data['username'])->first();
        abort_unless($user, 404);

        $ads = $this->announcements->base()
            ->where('user_id', $user->id)
            ->where('slug', $data['slug'])
            ->get();

        return AnnouncementResource::collection($ads);
    }

    public function show(Announcement $announcement): AnnouncementResource
    {
        $announcement->load(['town', 'quarter', 'category', 'images', 'User'])->loadCount('visits');

        return new AnnouncementResource($announcement);
    }

    public function similar(Announcement $announcement): AnonymousResourceCollection
    {
        $ads = $this->announcements->base()
            ->where('town_id', $announcement->town_id)
            ->whereKeyNot($announcement->id)
            ->limit(12)
            ->get();

        return AnnouncementResource::collection($ads);
    }

    public function visit(Request $request, Announcement $announcement): Response
    {
        $data = $request->validate([
            'visitor' => ['sometimes', 'nullable', 'string', 'max:128'],
        ]);

        $this->visits->record($announcement, $data['visitor'] ?? null, $request);

        return response()->noContent();
    }

    public function reviews(Announcement $announcement): AnonymousResourceCollection
    {
        $reviews = $announcement->reviews()->latest()->get();

        return ReviewResource::collection($reviews);
    }
}
