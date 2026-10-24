<?php

namespace App\Services\Api\V1;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PublishedAnnouncementQuery
{
    public const TIERS = [
        'free' => 0,
        'premium' => 1,
        'gold' => 2,
        'vip' => 3,
    ];

    public function base(): Builder
    {
        $now = now();

        return Announcement::query()
            ->where('status', 1)
            ->where(function (Builder $query) use ($now) {
                $query->where('isSubscribe', 0)
                    ->orWhereHas('membershipsUsers', function (Builder $membership) use ($now) {
                        $membership->where('status', 1)->where('expire_at', '>=', $now);
                    })
                    ->orWhere(function (Builder $legacy) {
                        $legacy->where('isSubscribe', 1)
                            ->whereDoesntHave('membershipsUsers');
                    });
            })
            ->with(['town', 'quarter', 'category', 'images', 'User'])
            ->withCount('visits');
    }

    public function apply(Request $request): Builder
    {
        $query = $this->base();

        if ($request->filled('town_id')) {
            $query->where('town_id', $request->integer('town_id'));
        }

        if ($request->filled('quarter_id')) {
            $query->where('quarter_id', $request->integer('quarter_id'));
        }

        if ($request->filled('category_id')) {
            $query->where('announcement_category_id', $request->integer('category_id'));
        }

        $tier = $request->string('tier')->toString();

        if ($tier === 'home') {
            $query->whereIn('subscribe_id', [self::TIERS['gold'], self::TIERS['vip']]);
        } elseif ($tier !== '' && isset(self::TIERS[$tier])) {
            $query->where('subscribe_id', self::TIERS[$tier]);
        }

        return $query;
    }

    public function sort(Builder $query, Request $request): Builder
    {
        return match ($request->string('sort')->toString() ?: 'random') {
            'recent' => $query->orderByDesc('created_at'),
            'popular' => $query->orderByDesc('visits_count'),
            default => $query->inRandomOrder(),
        };
    }

    public static function tierName(int $subscribeId): ?string
    {
        $name = array_search($subscribeId, self::TIERS, true);

        return $name === false ? null : $name;
    }
}
