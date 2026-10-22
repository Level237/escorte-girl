<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AnnouncementResource;
use App\Services\Api\V1\PublishedAnnouncementQuery;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SearchController extends Controller
{
    public function __construct(private PublishedAnnouncementQuery $announcements) {}

    public function index(Request $request): AnonymousResourceCollection
    {
        $data = $request->validate([
            'q' => 'required|string|min:1|max:100',
        ]);

        $term = $data['q'];

        $ads = $this->announcements->base()
            ->where(function ($query) use ($term) {
                $query->where('title', 'like', '%'.$term.'%')
                    ->orWhere('description', 'like', '%'.$term.'%')
                    ->orWhereHas('User', function ($user) use ($term) {
                        $user->where('username', 'like', '%'.$term.'%');
                    })
                    ->orWhereHas('town', function ($town) use ($term) {
                        $town->where('town_name', 'like', '%'.$term.'%');
                    })
                    ->orWhereHas('quarter', function ($quarter) use ($term) {
                        $quarter->where('quarter_name', 'like', '%'.$term.'%');
                    });
            })
            ->orderByDesc('subscribe_id')
            ->limit(50)
            ->get();

        return AnnouncementResource::collection($ads);
    }
}
