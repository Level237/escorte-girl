<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Membership;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreditSubscriptionController extends Controller
{
    public function announcement(Request $request, Announcement $announcement): JsonResponse
    {
        $data = $request->validate([
            'membership_id' => ['required', 'integer', 'exists:memberships,id', 'not_in:4'],
        ]);

        $user = $this->user();

        if ((int) $announcement->user_id !== (int) $user->id) {
            return response()->json(['message' => 'Annonce introuvable.'], 404);
        }

        $membership = Membership::query()->findOrFail($data['membership_id']);

        if ((int) $user->balance < (int) $membership->price) {
            return response()->json(['message' => 'Solde de crédits insuffisant.'], 402);
        }

        DB::transaction(function () use ($user, $membership, $announcement) {
            $user->balance = (int) $user->balance - (int) $membership->price;
            $user->save();

            $payment = Payment::query()->create([
                'payment_type' => 'credits',
                'price' => $membership->price,
                'payment_of' => 'Ads',
                'status' => '2',
                'membership_id' => $membership->id,
                'announcement_id' => $announcement->id,
                'user_id' => $user->id,
            ]);

            $expires = Carbon::now()->addDays((int) $membership->period)->setTimezone('Africa/Douala');
            $announcement->status = 1;
            $announcement->isSubscribe = 1;
            $announcement->expire = $expires;
            $announcement->subscribe_id = $membership->id;
            $announcement->save();

            DB::table('memberships_users')->where('announcement_id', $announcement->id)->delete();
            DB::table('memberships_users')->insert([
                'user_id' => $user->id,
                'membership_id' => $membership->id,
                'payment_id' => $payment->id,
                'announcement_id' => $announcement->id,
                'expire_at' => $expires,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        return response()->json([
            'data' => [
                'balance' => $user->fresh()->balance,
                'membership_id' => $membership->id,
                'announcement_id' => $announcement->id,
            ],
        ]);
    }

    public function plan(): JsonResponse
    {
        $user = $this->user();
        $membership = Membership::query()->findOrFail(4);

        if ((int) $user->balance < (int) $membership->price) {
            return response()->json(['message' => 'Solde de crédits insuffisant.'], 402);
        }

        DB::transaction(function () use ($user, $membership) {
            $user->balance = (int) $user->balance - (int) $membership->price;
            $user->isSubscribe = 1;
            $user->save();

            $payment = Payment::query()->create([
                'payment_type' => 'credits',
                'price' => $membership->price,
                'payment_of' => 'premium',
                'status' => '2',
                'membership_id' => $membership->id,
                'user_id' => $user->id,
            ]);

            DB::table('members')->insert([
                'user_id' => $user->id,
                'membership_id' => $membership->id,
                'payment_id' => $payment->id,
                'expire_at' => Carbon::now()->addDays((int) $membership->period)->setTimezone('Africa/Douala'),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });

        return response()->json([
            'data' => [
                'balance' => $user->fresh()->balance,
                'membership_id' => $membership->id,
            ],
        ]);
    }

    private function user(): User
    {
        return Auth::guard('api')->user();
    }
}
