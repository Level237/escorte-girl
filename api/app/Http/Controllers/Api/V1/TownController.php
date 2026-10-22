<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\QuarterResource;
use App\Http\Resources\V1\TownResource;
use App\Models\Town;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TownController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return TownResource::collection(Town::query()->with('country')->orderBy('town_name')->get());
    }

    public function show(Town $town): TownResource
    {
        return new TownResource($town);
    }

    public function quarters(Town $town): AnonymousResourceCollection
    {
        return QuarterResource::collection(
            $town->quarters()->orderBy('quarter_name')->get()
        );
    }
}
