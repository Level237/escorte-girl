<?php

namespace App\Http\Resources\V1;

use App\Services\Api\V1\PublishedAnnouncementQuery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'age' => $this->age,
            'gender' => $this->gender,
            'whatsapp' => $this->whatsapp,
            'location' => $this->location,
            'accepted' => $this->accepted,
            'status' => $this->status,
            'is_subscribed' => (bool) $this->isSubscribe,
            'tier' => PublishedAnnouncementQuery::tierName((int) $this->subscribe_id),
            'subscribe_id' => $this->subscribe_id,
            'town' => $this->town ? [
                'id' => $this->town->id,
                'town_name' => $this->town->town_name,
                'code' => $this->town->code,
                'country_id' => $this->town->country_id,
            ] : null,
            'quarter' => $this->quarter ? [
                'id' => $this->quarter->id,
                'quarter_name' => $this->quarter->quarter_name,
                'town_id' => $this->quarter->town_id,
            ] : null,
            'category' => $this->category ? [
                'id' => $this->category->id,
                'name' => $this->category->title,
            ] : null,
            'images' => $this->images->pluck('path')->values(),
            'video' => $this->video_path,
            'visits' => (int) ($this->visits_count ?? $this->visits()->count()),
            'expire' => $this->expire,
            'user' => $this->User ? [
                'id' => $this->User->id,
                'username' => $this->User->username,
            ] : null,
        ];
    }
}
