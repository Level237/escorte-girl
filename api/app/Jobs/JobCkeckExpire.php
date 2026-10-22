<?php

namespace App\Jobs;

use App\Events\EventCheckExpire;
use App\Models\Announcement;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class JobCkeckExpire implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $today = Carbon::now();

        $expiredAnnoncement = Announcement::where('expire', '<', $today)->get();
        foreach ($expiredAnnoncement as $announcement) {
            // Mettre à jour l'abonnement expiré
            event(new EventCheckExpire($announcement));
            // Envoyer un email ou une notification à l'utilisateur

        }
    }
}
