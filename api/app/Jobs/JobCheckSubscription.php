<?php

namespace App\Jobs;

use App\Events\EventCheckSubscription;
use App\Models\Memberships_user;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class JobCheckSubscription implements ShouldQueue
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

        $expiredSubscriptions = Memberships_user::where('expire_at', '<', $today)->get();

        foreach ($expiredSubscriptions as $subscription) {
            event(new EventCheckSubscription($subscription));
        }
    }
}
