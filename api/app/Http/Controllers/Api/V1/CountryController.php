<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CountryResource;
use App\Models\Country;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CountryController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return CountryResource::collection(Country::query()->orderBy('country_name')->get());
    }
}
