<?php

namespace App\Services\User;

class UserTypeService
{
    public function dashboardRouteName($role_id): string
    {
        return match ((int) $role_id) {
            1 => 'admin.dashboard',
            2 => 'db.escort.index',
            3 => 'db.customer.index',
            default => 'homepage',
        };
    }

    public function checkRole($role_id)
    {
        return to_route($this->dashboardRouteName($role_id));
    }
}
