<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\UploadedFile;
use App\Services\Photos\SaveInFolderService;
use Illuminate\Support\Facades\Storage;

class TestImageService extends Command
{
    protected $signature = 'test:image-service';
    protected $description = 'Test SaveInFolderService';

    public function handle()
    {
        $this->info('Testing SaveInFolderService...');

        // Create a dummy image
        $tmpPath = sys_get_temp_dir() . '/test_image.jpg';
        $image = imagecreatetruecolor(500, 500);
        imagefill($image, 0, 0, imagecolorallocate($image, 255, 0, 0));
        imagejpeg($image, $tmpPath);

        $file = new UploadedFile(
            $tmpPath,
            'test_image.jpg',
            'image/jpeg',
            null,
            true
        );

        $service = new SaveInFolderService();
        try {
            $service->saveIn($file, 'profile');
            $this->info('Service execution completed.');
            
            $destPath = public_path('storage/profile/test_image.jpg');
            if (file_exists($destPath)) {
                $this->info('Success: File created at ' . $destPath);
                // Clean up
                unlink($destPath);
            } else {
                $this->error('Error: File not found at ' . $destPath);
            }

        } catch (\Exception $e) {
            $this->error('Exception: ' . $e->getMessage());
            $this->error($e->getTraceAsString());
        }
    }
}
