<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PaymentResource;
use App\Models\Announcement;
use App\Models\Membership;
use App\Models\Payment;
use App\Models\User;
use App\Services\Api\V1\CoolPayCheckout;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct(private CoolPayCheckout $coolpay) {}

    public function boost(Request $request): JsonResponse
    {
        $data = $request->validate([
            'announcement_id' => ['required', 'integer'],
            'membership_id' => ['required', 'integer', 'exists:memberships,id', 'not_in:4'],
            'transaction_ref' => ['required', 'string', 'max:100'],
        ]);

        $announcement = Announcement::query()
            ->whereKey($data['announcement_id'])
            ->where('user_id', Auth::guard('api')->id())
            ->first();

        if (! $announcement) {
            return response()->json(['message' => 'Annonce introuvable.'], 404);
        }

        $membership = Membership::query()->findOrFail($data['membership_id']);

        return $this->checkout($request->user('api'), 'Ads', (int) $membership->price, $data['transaction_ref'], 'boosts', $membership->id, $announcement->id);
    }

    public function credits(Request $request): JsonResponse
    {
        $data = $request->validate([
            'amount' => ['required', 'integer', 'min:1'],
            'transaction_ref' => ['required', 'string', 'max:100'],
        ]);

        return $this->checkout($request->user('api'), 'credit', $data['amount'], $data['transaction_ref'], 'credits');
    }

    public function plan(Request $request): JsonResponse
    {
        $data = $request->validate([
            'transaction_ref' => ['required', 'string', 'max:100'],
            'membership_id' => ['sometimes', 'integer', 'exists:memberships,id'],
        ]);

        $membership = Membership::query()->findOrFail($data['membership_id'] ?? 4);

        return $this->checkout($request->user('api'), 'premium', (int) $membership->price, $data['transaction_ref'], 'plans', $membership->id);
    }

    public function show(Request $request, string $transactionRef): PaymentResource
    {
        $purpose = $request->validate([
            'purpose' => ['required', 'in:ads,credits,plan'],
        ])['purpose'];

        $payment = Payment::query()
            ->where('transaction_ref', $transactionRef)
            ->where('user_id', Auth::guard('api')->id())
            ->where('payment_of', $this->paymentOf($purpose))
            ->firstOrFail();

        return new PaymentResource($payment);
    }

    private function checkout(User $user, string $paymentOf, int $amount, string $transactionRef, string $configKey, ?int $membershipId = null, ?int $announcementId = null): JsonResponse
    {
        if (Payment::query()->where('transaction_ref', $transactionRef)->exists()) {
            return response()->json(['message' => 'Cette référence de transaction existe déjà.'], 422);
        }

        $publicKey = (string) config('services.coolpay.'.$configKey);
        if ($publicKey === '') {
            return response()->json(['message' => 'CoolPay n\'est pas configuré.'], 503);
        }

        $payment = Payment::query()->create([
            'payment_type' => 'Momo',
            'price' => $amount,
            'payment_of' => $paymentOf,
            'transaction_ref' => $transactionRef,
            'transaction_id' => null,
            'membership_id' => $membershipId,
            'announcement_id' => $announcementId,
            'status' => '0',
            'user_id' => $user->id,
        ]);

        $response = $this->coolpay->link($publicKey, $amount, $transactionRef, $user);
        $payload = $response->json();
        $url = is_array($payload) ? ($payload['payment_url'] ?? data_get($payload, 'data.payment_url')) : null;

        if (! $response->successful() || ! is_string($url) || $url === '') {
            return response()->json([
                'message' => 'CoolPay n\'a pas renvoyé de lien de paiement.',
                'data' => [
                    'transaction_ref' => $payment->transaction_ref,
                    'amount' => $amount,
                ],
            ], 502);
        }

        return response()->json([
            'data' => [
                'payment_url' => $url,
                'transaction_ref' => $payment->transaction_ref,
                'amount' => $amount,
            ],
        ]);
    }

    private function paymentOf(string $purpose): string
    {
        return match ($purpose) {
            'ads' => 'Ads',
            'credits' => 'credit',
            'plan' => 'premium',
        };
    }
}
