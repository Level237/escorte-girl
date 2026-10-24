<?php

namespace App\Services\Api\V1;

use App\Models\Announcement;
use App\Models\Member;
use App\Models\Memberships_user;
use App\Models\User;
use Carbon\Carbon;

class SubscriptionExpiration
{
    public function run(): array
    {
        return [
            'boosts' => $this->expireAnnouncementBoosts(),
            'plans' => $this->expireCustomerPlans(),
            'listings' => $this->expireListings(),
            'suspended' => $this->unpublishSuspendedAccounts(),
        ];
    }

    public function expireAnnouncementBoosts(): int
    {
        $now = Carbon::now();
        $expired = Memberships_user::query()
            ->where('status', 1)
            ->where('expire_at', '<', $now)
            ->get();

        $count = 0;

        foreach ($expired as $subscription) {
            $subscription->update(['status' => 0]);

            $announcement = Announcement::query()->find($subscription->announcement_id);
            if (! $announcement) {
                $count++;
                continue;
            }

            $stillBoosted = Memberships_user::query()
                ->where('announcement_id', $announcement->id)
                ->where('status', 1)
                ->where('expire_at', '>=', $now)
                ->exists();

            if (! $stillBoosted && (int) $announcement->isSubscribe === 1) {
                $announcement->status = 1;
                $announcement->isSubscribe = 0;
                $announcement->subscribe_id = 0;
                $announcement->expire = Carbon::now()->addDays(7);
                $announcement->save();
            }

            $count++;
        }

        return $count;
    }

    public function expireCustomerPlans(): int
    {
        $expired = Member::query()
            ->where('status', 1)
            ->where('expire_at', '<', Carbon::now())
            ->get();

        $count = 0;

        foreach ($expired as $subscription) {
            $subscription->update(['status' => 0]);

            $user = User::query()->find($subscription->user_id);
            if ($user) {
                $stillPremium = Member::query()
                    ->where('user_id', $user->id)
                    ->where('status', 1)
                    ->where('expire_at', '>=', Carbon::now())
                    ->exists();

                if (! $stillPremium) {
                    $user->isSubscribe = 0;
                    $user->save();
                }
            }

            $count++;
        }

        return $count;
    }

    public function expireListings(): int
    {
        $expired = Announcement::query()
            ->where('status', 1)
            ->where('isSubscribe', 0)
            ->whereNotNull('expire')
            ->where('expire', '<', Carbon::now())
            ->get();

        foreach ($expired as $announcement) {
            $announcement->status = 0;
            $announcement->isSubscribe = 0;
            $announcement->expire = null;
            $announcement->save();
        }

        return $expired->count();
    }

    public function unpublishSuspendedAccounts(): int
    {
        $users = User::query()->whereNotNull('suspended_at')->get();
        $count = 0;

        foreach ($users as $user) {
            $count += Announcement::query()
                ->where('user_id', $user->id)
                ->where('status', 1)
                ->update(['status' => 0]);
        }

        return $count;
    }
}
