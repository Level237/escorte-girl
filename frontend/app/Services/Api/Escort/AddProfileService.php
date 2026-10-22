<?php

namespace App\Services\Api\Escort;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AddProfileService
{
    public function addProfile($data, $photo, $services)
    {
        $token = Session::get('tokenUser');

        $response = Http::acceptJson()->withToken($token)->put(UrlApiService::endpoint('v1/me/escort'), [
            'escort_name' => $data['escort_name'],
            'whatsapp_number' => $data['whatsapp_number'],
            'sexuality' => $data['sexuality'],
            'age' => $data['age'],
            'description' => $data['description'],
            'shape_id' => $data['shape_id'],
            'height_id' => $data['height_id'],
            'weight_id' => $data['weight_id'],
            'skin_color_id' => $data['skin_color_id'],
            'quarter_id' => $data['quarter_id'],
            'genre' => $data['genre'],
        ]);

        if (! $response->successful()) {
            return $response;
        }

        $pending = Http::withToken($token)->acceptJson();
        foreach (Storage::files('profile/'.$data['user_id']) as $filename) {
            $pending = $pending->attach(
                'images[]',
                Storage::get($filename),
                basename($filename)
            );
        }

        if (Storage::files('profile/'.$data['user_id'])) {
            $pending->post(UrlApiService::endpoint('v1/me/escort/images'));
            Storage::deleteDirectory('profile/'.$data['user_id']);
        }

        return Http::withToken($token)->acceptJson()->put(UrlApiService::endpoint('v1/me/escort/services'), [
            'service_ids' => array_values($services),
        ]);
    }
}
