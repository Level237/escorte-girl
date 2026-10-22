<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TownResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'town_name' => $this->town_name,
            'code' => $this->code,
            'country_id' => $this->country_id,
            'country' => $this->relationLoaded('country') && $this->country ? [
                'id' => $this->country->id,
                'country_name' => $this->country->country_name,
            ] : null,
        ];
    }
}
