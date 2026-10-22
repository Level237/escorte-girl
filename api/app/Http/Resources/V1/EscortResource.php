<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EscortResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'escort_name' => $this->escort_name,
            'whatsapp_number' => $this->whatsapp_number,
            'sexuality' => $this->sexuality,
            'genre' => $this->genre,
            'age' => $this->age,
            'description' => $this->description,
            'quarter_id' => $this->quarter_id,
            'shape_id' => $this->shape_id,
            'height_id' => $this->height_id,
            'weight_id' => $this->weight_id,
            'skin_color_id' => $this->skin_color_id,
            'services' => $this->services->map(fn ($service) => [
                'id' => $service->id,
                'name' => $service->service_name,
            ])->values(),
            'images' => $this->images->pluck('path')->values(),
            'is_verified' => (bool) $this->isVerified,
        ];
    }
}
