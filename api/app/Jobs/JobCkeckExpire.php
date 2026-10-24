<?php

namespace App\Jobs;

use App\Services\Api\V1\SubscriptionExpiration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class JobCkeckExpire implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(SubscriptionExpiration $expiration): void
    {
        $expiration->expireListings();
    }
}
