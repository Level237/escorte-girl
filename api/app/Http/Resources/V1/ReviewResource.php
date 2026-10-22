<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'announcement_id' => $this->announcement_id,
            'user_id' => $this->user_id,
            'stars' => $this->stars,
            'comment' => $this->comment,
            'state' => (bool) $this->state,
            'created_at' => $this->created_at,
        ];
    }
}
