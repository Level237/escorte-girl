<?php

namespace App\Listeners;

use App\Services\Api\V1\SubscriptionExpiration;

class ListenerCheckUpgradePlan
{
    public function handle(object $event): void
    {
        app(SubscriptionExpiration::class)->expireCustomerPlans();
    }
}
