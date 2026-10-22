<?php

namespace App\Services\Api\V1;

use App\Models\Announcement;
use App\Models\Membership;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PaymentFulfillment
{
    public function boost(Payment $payment): bool
    {
        return DB::transaction(function () use ($payment) {
            $payment = $this->lock($payment);
            if ($payment->status === '2') {
                return true;
            }

            $membership = Membership::query()->find($payment->membership_id);
            $announcement = Announcement::query()->find($payment->announcement_id);

            if (! $membership || ! $announcement) {
                return false;
            }

            $payment->status = '2';
            $payment->save();

            $expires = $this->expiresAt($membership);
            $announcement->status = 1;
            $announcement->isSubscribe = 1;
            $announcement->expire = null;
            $announcement->subscribe_id = $membership->id;
            $announcement->save();

            DB::table('memberships_users')->where('announcement_id', $announcement->id)->delete();
            DB::table('memberships_users')->insert([
                'user_id' => $payment->user_id,
                'membership_id' => $membership->id,
                'payment_id' => $payment->id,
                'announcement_id' => $announcement->id,
                'expire_at' => $expires,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return true;
        });
    }

    public function credits(Payment $payment): bool
    {
        return DB::transaction(function () use ($payment) {
            $payment = $this->lock($payment);
            if ($payment->status === '2') {
                return true;
            }

            $user = User::query()->find($payment->user_id);
            if (! $user) {
                return false;
            }

            $payment->status = '2';
            $payment->save();
            $user->balance = (int) $user->balance + (int) $payment->price;
            $user->save();

            return true;
        });
    }

    public function plan(Payment $payment): bool
    {
        return DB::transaction(function () use ($payment) {
            $payment = $this->lock($payment);
            if ($payment->status === '2') {
                return true;
            }

            $user = User::query()->find($payment->user_id);
            $membership = Membership::query()->find($payment->membership_id);
            if (! $user || ! $membership) {
                return false;
            }

            $payment->status = '2';
            $payment->save();
            $user->isSubscribe = 1;
            $user->save();

            DB::table('members')->insert([
                'user_id' => $user->id,
                'membership_id' => $membership->id,
                'payment_id' => $payment->id,
                'expire_at' => $this->expiresAt($membership),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return true;
        });
    }

    public function fail(Payment $payment): void
    {
        DB::transaction(function () use ($payment) {
            $payment = $this->lock($payment);
            if ($payment->status !== '0') {
                return;
            }

            $payment->status = '1';
            $payment->save();
        });
    }

    private function lock(Payment $payment): Payment
    {
        return Payment::query()->whereKey($payment->id)->lockForUpdate()->firstOrFail();
    }

    private function expiresAt(Membership $membership): Carbon
    {
        return Carbon::now()->addDays((int) $membership->period)->setTimezone('Africa/Douala');
    }
}
