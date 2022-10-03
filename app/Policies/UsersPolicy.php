<?php

namespace App\Policies;

use App\Models\Returns;
use App\Models\Users;
use Illuminate\Auth\Access\HandlesAuthorization;

class UsersPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function create(Users $users){
        return true;
    }
    public function update(Users $users){
        return true;
    }
    public function viewAny(Users $users){
        if($users->role == "dealer"){
            return true;
        }else{
            return false;
        }

    }
}
