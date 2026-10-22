<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\AnnouncementController as LegacyAnnouncementController;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Banners;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class MediaController extends Controller
{
    public function announcementImage(int $announcement, string $filename)
    {
        return app(LegacyAnnouncementController::class)->displayAdsImage($announcement, $filename);
    }

    public function announcementVideo(Announcement $announcement): BinaryFileResponse
    {
        abort_if(empty($announcement->video_path), 404);

        $path = storage_path('app/public/ads/'.$announcement->id.'/videos/'.$announcement->video_path);
        abort_unless(is_file($path), 404);

        return response()->file($path);
    }

    public function banner(Banners $banner): BinaryFileResponse
    {
        abort_if(empty($banner->path), 404);

        $path = storage_path('app/public/banners/'.$banner->id.'/'.$banner->path);
        abort_unless(is_file($path), 404);

        return response()->file($path);
    }
}
