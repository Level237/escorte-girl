<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Banners;
use App\Models\Image;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;

class MediaController extends Controller
{
    public function announcementImage(int $announcement, string $filename): Response
    {
        $filename = basename(rawurldecode($filename));
        $stored = Image::query()->where('path', $filename)->value('path');
        if (is_string($stored) && $stored !== '') {
            $filename = $stored;
        }

        foreach ([
            storage_path('app/public/ads/'.$announcement.'/'.$filename),
            storage_path('app/ads/'.$announcement.'/'.$filename),
            public_path('storage/ads/'.$announcement.'/'.$filename),
        ] as $path) {
            if (is_file($path) && filesize($path) > 0) {
                return response()->file($path, [
                    'Cache-Control' => 'public, max-age=86400',
                ]);
            }
        }

        abort(404);
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
