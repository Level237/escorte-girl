<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MembershipResource;
use App\Models\Membership;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MembershipController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return MembershipResource::collection(
            Membership::query()->whereKeyNot(4)->orderBy('id')->get()
        );
    }

    public function premium(): MembershipResource
    {
        $membership = Membership::query()->findOrFail(4);

        return new MembershipResource($membership);
    }

    public function show(Membership $membership): MembershipResource
    {
        return new MembershipResource($membership);
    }
}
