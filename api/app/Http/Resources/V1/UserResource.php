<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'role_id' => $this->role_id,
            'town_id' => $this->town_id,
            'town' => $this->town ? [
                'id' => $this->town->id,
                'town_name' => $this->town->town_name,
            ] : null,
            'balance' => $this->balance,
            'is_secure' => (bool) $this->isSecure,
            'is_verified' => (bool) $this->isVerify,
            'is_subscribed' => (bool) $this->isSubscribe,
            'suspended_at' => $this->suspended_at,
        ];
    }
}
