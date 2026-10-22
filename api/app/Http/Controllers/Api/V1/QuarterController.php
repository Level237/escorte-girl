<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\QuarterResource;
use App\Models\Quarter;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class QuarterController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return QuarterResource::collection(Quarter::query()->orderBy('quarter_name')->get());
    }
}
