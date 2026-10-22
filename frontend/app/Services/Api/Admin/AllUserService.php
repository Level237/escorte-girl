<?php

namespace App\Services\Api\Admin;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AllUserService
{
    public function list()
    {
        return $this->users([]);
    }

    public function escortList()
    {
        return $this->users(['role_id' => 2, 'suspended' => 0]);
    }

    public function listUserBan()
    {
        return $this->users(['suspended' => 1]);
    }

    public function roles()
    {
        $response = Http::withToken(Session::get('tokenUser'))
            ->acceptJson()
            ->get(UrlApiService::endpoint('v1/admin/roles'));

        return json_decode($response->body());
    }

    public function getUserByRole($id)
    {
        return $this->users(['role_id' => $id]);
    }

    private function users(array $query): object
    {
        $token = Session::get('tokenUser');
        $roles = Http::withToken($token)
            ->acceptJson()
            ->get(UrlApiService::endpoint('v1/admin/roles'))
            ->json('data') ?? [];

        $names = [];
        foreach ($roles as $role) {
            $names[$role['id']] = $role['role_name'];
        }

        $rows = Http::withToken($token)
            ->acceptJson()
            ->get(UrlApiService::endpoint('v1/admin/users'), $query)
            ->json('data') ?? [];

        $users = [];
        foreach ($rows as $user) {
            $user['role'] = (object) [
                'id' => $user['role_id'] ?? null,
                'role_name' => $names[$user['role_id']] ?? '',
            ];
            $users[] = (object) $user;
        }

        return (object) ['data' => $users];
    }
}
