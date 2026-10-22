<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EscortResource;
use App\Models\Escort;
use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EscortProfileController extends Controller
{
    public function show(): EscortResource
    {
        return new EscortResource($this->profile());
    }

    public function update(Request $request): EscortResource
    {
        $data = $request->validate([
            'escort_name' => ['required', 'string', 'max:255'],
            'whatsapp_number' => ['required', 'string', 'max:30'],
            'sexuality' => ['required', 'string', 'max:100'],
            'quarter_id' => ['required', 'integer', 'exists:quarters,id'],
            'age' => ['required', 'integer', 'min:18', 'max:99'],
            'description' => ['required', 'string'],
            'shape_id' => ['required', 'integer', 'exists:shapes,id'],
            'height_id' => ['required', 'integer', 'exists:heights,id'],
            'weight_id' => ['required', 'integer', 'exists:weights,id'],
            'skin_color_id' => ['required', 'integer', 'exists:skin_colors,id'],
            'genre' => ['required', 'string', 'max:50'],
        ]);

        $escort = Escort::query()->updateOrCreate(
            ['user_id' => Auth::guard('api')->id()],
            $data + ['isCompleted' => true]
        );

        return new EscortResource($escort->load(['services', 'images']));
    }

    public function services(Request $request): EscortResource
    {
        $data = $request->validate([
            'service_ids' => ['required', 'array'],
            'service_ids.*' => ['integer', 'exists:services,id'],
        ]);

        $escort = $this->profile();
        $escort->services()->sync($data['service_ids']);

        return new EscortResource($escort->load(['services', 'images']));
    }

    public function images(Request $request): JsonResponse
    {
        $request->validate([
            'images' => ['required', 'array', 'min:1'],
            'images.*' => ['file', 'mimes:jpg,jpeg,png', 'max:10240'],
        ]);

        $escort = $this->profile();
        $stored = [];

        foreach ($request->file('images', []) as $index => $file) {
            $name = $escort->id.'_'.time().'_'.$index.'_'.basename($file->getClientOriginalName());
            $file->storeAs('public/escorts/'.$escort->id, $name);

            $image = new Image;
            $image->path = $name;
            $image->save();
            $escort->images()->attach($image->id);
            $stored[] = $name;

            if ($index === 0 && empty($escort->photo)) {
                $escort->photo = $name;
                $escort->save();
            }
        }

        return response()->json(['data' => $stored], 201);
    }

    private function profile(): Escort
    {
        $escort = Escort::query()
            ->with(['services', 'images'])
            ->where('user_id', Auth::guard('api')->id())
            ->first();

        abort_if($escort === null, response()->json([
            'message' => 'Profil escort introuvable.',
        ], 404));

        return $escort;
    }
}
