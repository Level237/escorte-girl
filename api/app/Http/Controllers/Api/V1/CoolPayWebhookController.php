<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Services\Api\V1\PaymentFulfillment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CoolPayWebhookController extends Controller
{
    public function __construct(private PaymentFulfillment $fulfillment) {}

    public function boosts(Request $request): JsonResponse
    {
        return $this->handle($request, 'Ads', fn (Payment $payment) => $this->fulfillment->boost($payment));
    }

    public function credits(Request $request): JsonResponse
    {
        return $this->handle($request, 'credit', fn (Payment $payment) => $this->fulfillment->credits($payment));
    }

    public function plans(Request $request): JsonResponse
    {
        return $this->handle($request, 'premium', fn (Payment $payment) => $this->fulfillment->plan($payment));
    }

    private function handle(Request $request, string $paymentOf, callable $fulfill): JsonResponse
    {
        $data = $request->validate([
            'transaction_ref' => ['required', 'string'],
            'transaction_status' => ['required', 'string'],
        ]);

        $payment = Payment::query()
            ->where('transaction_ref', $data['transaction_ref'])
            ->where('payment_of', $paymentOf)
            ->first();

        if (! $payment) {
            return response()->json(['data' => ['applied' => false]]);
        }

        if ($data['transaction_status'] === 'SUCCESS') {
            $applied = $fulfill($payment);

            return response()->json([
                'data' => [
                    'applied' => $applied,
                    'status' => $applied ? '2' : $payment->status,
                ],
            ]);
        }

        if ($data['transaction_status'] === 'FAILED') {
            $this->fulfillment->fail($payment);

            return response()->json(['data' => ['applied' => true, 'status' => '1']]);
        }

        return response()->json(['data' => ['applied' => false, 'status' => $payment->status]]);
    }
}
