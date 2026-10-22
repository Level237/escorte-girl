<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'purpose' => $this->purpose((string) $this->payment_of),
            'price' => $this->price,
            'status' => $this->status,
            'transaction_ref' => $this->transaction_ref,
            'membership_id' => $this->membership_id,
            'announcement_id' => $this->announcement_id,
            'created_at' => $this->created_at,
        ];
    }

    private function purpose(string $paymentOf): ?string
    {
        return match (strtolower($paymentOf)) {
            'ads' => 'ads',
            'credit', 'credits' => 'credits',
            'plan', 'plans' => 'plan',
            '' => null,
            default => strtolower($paymentOf),
        };
    }
}
