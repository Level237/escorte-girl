<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'membership_id' => $this->membership_id,
            'announcement_id' => $this->announcement_id,
            'status' => $this->status,
            'expire_at' => $this->expire_at instanceof \DateTimeInterface ? $this->expire_at->format('d-m-Y') : $this->expire_at,
            'announce_title' => $this->announcement?->User?->username,
            'slug' => $this->announcement?->slug,
            'membership_type' => $this->membership?->membership_name,
            'payment_type' => $this->payment?->payment_type,
        ];
    }
}
