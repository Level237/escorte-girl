<?php

namespace App\Console\Commands;

use App\Services\Api\V1\SubscriptionExpiration;
use Illuminate\Console\Command;

class ExpireSubscriptions extends Command
{
    protected $signature = 'subscriptions:expire';

    protected $description = 'Retire les boosts, plans premium et annonces dont la date d’expiration est dépassée.';

    public function handle(SubscriptionExpiration $expiration): int
    {
        $counts = $expiration->run();

        $this->info(sprintf(
            'Expiration: %d boost(s), %d plan(s) membre, %d annonce(s) dépubliée(s), %d annonce(s) de comptes suspendus.',
            $counts['boosts'],
            $counts['plans'],
            $counts['listings'],
            $counts['suspended']
        ));

        return self::SUCCESS;
    }
}
