<?php

namespace App\Policies;

use App\Models\Employee;
use App\Models\Users;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(\App\Models\Users $user){
        return  true;
    }
}
