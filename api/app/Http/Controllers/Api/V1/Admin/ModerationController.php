<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AnnouncementResource;
use App\Models\Announcement;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Report;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ModerationController extends Controller
{
    public function contacts(): JsonResponse
    {
        $rows = Contact::query()->latest()->get(['id', 'name', 'phone', 'subject', 'message', 'status']);

        return response()->json(['data' => $rows]);
    }

    public function updateContact(Request $request, Contact $contact): JsonResponse
    {
        $data = $request->validate([
            'status' => ['required', 'integer'],
        ]);
        $contact->update($data);

        return response()->json(['data' => $contact->only(['id', 'name', 'phone', 'subject', 'message', 'status'])]);
    }

    public function destroyContact(Contact $contact): Response
    {
        $contact->delete();

        return response()->noContent();
    }

    public function reports(): JsonResponse
    {
        $rows = Report::query()->with('ads')->latest()->get()->map(fn (Report $report) => [
            'id' => $report->id,
            'announcement_id' => $report->ads->first()?->id,
            'name' => $report->name,
            'phone' => $report->phone,
            'message' => $report->message,
            'status' => $report->status,
        ]);

        return response()->json(['data' => $rows]);
    }

    public function updateReport(Request $request, Report $report): JsonResponse
    {
        $data = $request->validate([
            'status' => ['required', 'integer'],
        ]);
        $report->update($data);

        return response()->json(['data' => [
            'id' => $report->id,
            'status' => $report->status,
        ]]);
    }

    public function destroyReport(Report $report): Response
    {
        $report->delete();

        return response()->noContent();
    }

    public function reportFile(Report $report): BinaryFileResponse
    {
        $announcement = $report->ads()->first();
        abort_if($announcement === null || empty($report->path), 404);

        $path = storage_path('app/public/report/'.$announcement->id.'/'.$report->path);
        abort_unless(is_file($path), 404);

        return response()->file($path);
    }

    public function announcements(Request $request): JsonResponse
    {
        $data = $request->validate([
            'status' => ['sometimes', 'integer', 'in:0,1'],
        ]);

        $ads = Announcement::query()
            ->with(['town', 'quarter', 'category', 'images', 'User'])
            ->withCount('visits')
            ->when(isset($data['status']), fn ($query) => $query->where('status', $data['status']))
            ->latest()
            ->paginate($request->integer('per_page', 20));

        return AnnouncementResource::collection($ads)->response();
    }

    public function updateAnnouncement(Request $request, Announcement $announcement): AnnouncementResource
    {
        $data = $request->validate([
            'status' => ['sometimes', 'integer', 'in:0,1'],
            'accepted' => ['sometimes', 'string', 'max:255'],
        ]);

        $announcement->fill($data);
        $announcement->save();
        $announcement->load(['town', 'quarter', 'category', 'images', 'User'])->loadCount('visits');

        return new AnnouncementResource($announcement);
    }

    public function destroyAnnouncement(Announcement $announcement): Response
    {
        foreach ($announcement->images as $image) {
            Storage::delete('public/ads/'.$announcement->id.'/'.$image->path);
            Image::query()->whereKey($image->id)->delete();
        }

        Storage::deleteDirectory('public/ads/'.$announcement->id);
        $announcement->delete();

        return response()->noContent();
    }
}
