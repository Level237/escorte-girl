<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\BannerResource;
use App\Http\Resources\V1\MembershipResource;
use App\Http\Resources\V1\QuarterResource;
use App\Http\Resources\V1\TownResource;
use App\Models\Banners;
use App\Models\Faq;
use App\Models\Membership;
use App\Models\Quarter;
use App\Models\Town;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CatalogController extends Controller
{
    public function faqs(): JsonResponse
    {
        return response()->json(['data' => Faq::query()->latest()->get(['id', 'questions', 'answer'])]);
    }

    public function storeFaq(Request $request): JsonResponse
    {
        $data = $this->faqData($request);
        $faq = Faq::query()->create([
            'questions' => $data['questions'],
            'answer' => $data['answer'],
        ]);

        return response()->json(['data' => $faq], 201);
    }

    public function showFaq(Faq $faq): JsonResponse
    {
        return response()->json(['data' => $faq->only(['id', 'questions', 'answer'])]);
    }

    public function updateFaq(Request $request, Faq $faq): JsonResponse
    {
        $faq->fill($this->faqData($request))->save();

        return response()->json(['data' => $faq->only(['id', 'questions', 'answer'])]);
    }

    public function destroyFaq(Faq $faq): Response
    {
        $faq->delete();

        return response()->noContent();
    }

    public function storeTown(Request $request): JsonResponse
    {
        $data = $request->validate([
            'town_name' => ['required', 'string', 'unique:towns,town_name'],
            'code' => ['required', 'string'],
            'country_id' => ['required', 'integer', 'exists:countries,id'],
        ]);

        $town = Town::query()->create($data);

        return (new TownResource($town))->response()->setStatusCode(201);
    }

    public function updateTown(Request $request, Town $town): TownResource
    {
        $data = $request->validate([
            'town_name' => ['required', 'string', 'unique:towns,town_name,'.$town->id],
            'code' => ['required', 'string'],
            'country_id' => ['required', 'integer', 'exists:countries,id'],
        ]);

        $town->update($data);

        return new TownResource($town);
    }

    public function destroyTown(Town $town): Response|JsonResponse
    {
        if ($town->quarters()->exists() || $town->ads()->exists()) {
            return response()->json([
                'message' => 'Impossible de supprimer une ville qui a des quartiers ou des annonces.',
            ], 422);
        }

        $town->delete();

        return response()->noContent();
    }

    public function storeQuarter(Request $request): JsonResponse
    {
        $data = $request->validate([
            'quarter_name' => ['required', 'string', 'unique:quarters,quarter_name'],
            'town_id' => ['required', 'integer', 'exists:towns,id'],
        ]);

        $quarter = Quarter::query()->create($data);

        return (new QuarterResource($quarter))->response()->setStatusCode(201);
    }

    public function updateQuarter(Request $request, Quarter $quarter): QuarterResource
    {
        $data = $request->validate([
            'quarter_name' => ['required', 'string', 'unique:quarters,quarter_name,'.$quarter->id],
            'town_id' => ['required', 'integer', 'exists:towns,id'],
        ]);

        $quarter->update($data);

        return new QuarterResource($quarter);
    }

    public function destroyQuarter(Quarter $quarter): Response|JsonResponse
    {
        if ($quarter->ads()->exists()) {
            return response()->json([
                'message' => 'Impossible de supprimer un quartier qui a des annonces.',
            ], 422);
        }

        $quarter->delete();

        return response()->noContent();
    }

    public function storeMembership(Request $request): JsonResponse
    {
        $membership = Membership::query()->create($this->membershipData($request));

        return (new MembershipResource($membership))->response()->setStatusCode(201);
    }

    public function updateMembership(Request $request, Membership $membership): MembershipResource
    {
        $membership->update($this->membershipData($request));

        return new MembershipResource($membership);
    }

    public function destroyMembership(Membership $membership): Response|JsonResponse
    {
        if ((int) $membership->id === 4) {
            return response()->json([
                'message' => 'Le forfait client ne peut pas être supprimé.',
            ], 422);
        }

        $membership->delete();

        return response()->noContent();
    }

    public function storeBanner(Request $request): JsonResponse
    {
        $data = $request->validate([
            'position' => ['required', 'string', 'unique:banners,position'],
            'description' => ['required', 'string'],
            'status' => ['sometimes', 'boolean'],
            'image' => ['required', 'file', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
        ]);

        $banner = new Banners;
        $banner->position = $data['position'];
        $banner->description = $data['description'];
        $banner->status = $request->boolean('status');
        $banner->path = 'pending';
        $banner->save();
        $banner->path = $this->storeBannerFile($request, $banner);
        $banner->save();

        return (new BannerResource($banner))->response()->setStatusCode(201);
    }

    public function updateBanner(Request $request, Banners $banner): BannerResource
    {
        $data = $request->validate([
            'position' => ['sometimes', 'string', 'unique:banners,position,'.$banner->id],
            'description' => ['sometimes', 'string'],
            'status' => ['sometimes', 'boolean'],
            'image' => ['sometimes', 'file', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
        ]);

        if (array_key_exists('position', $data)) {
            $banner->position = $data['position'];
        }
        if (array_key_exists('description', $data)) {
            $banner->description = $data['description'];
        }
        if ($request->exists('status')) {
            $banner->status = $request->boolean('status');
        }
        if ($request->hasFile('image')) {
            $banner->path = $this->storeBannerFile($request, $banner);
        }
        $banner->save();

        return new BannerResource($banner);
    }

    public function destroyBanner(Banners $banner): Response
    {
        $banner->delete();

        return response()->noContent();
    }

    private function faqData(Request $request): array
    {
        return $request->validate([
            'questions' => ['required', 'string'],
            'answer' => ['required', 'string'],
        ]);
    }

    private function membershipData(Request $request): array
    {
        return $request->validate([
            'membership_name' => ['required', 'string'],
            'period' => ['required', 'string'],
            'price' => ['required'],
        ]);
    }

    private function storeBannerFile(Request $request, Banners $banner): string
    {
        $file = $request->file('image');
        $name = $banner->id.'_'.time().'_'.basename($file->getClientOriginalName());
        $file->storeAs('public/banners/'.$banner->id, $name);

        return $name;
    }
}
