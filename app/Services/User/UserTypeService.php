<?php

namespace App\Services\User;

use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class UserTypeService{

    public function checkRole($role_id){

        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;
        if($role_id===1){
            return to_route('admin.dashboard');
        }else if($role_id===3){
            return to_route('admin.dashboard');
        }
        else if($role_id===2 && $completed===1){
            return to_route('db.escort.index');
        }else if($completed==0){
            return to_route('step-one');
        }
    }
}
