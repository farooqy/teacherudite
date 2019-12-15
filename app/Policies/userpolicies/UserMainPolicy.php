<?php

namespace App\Policies\userpolicies;

use App\User;
use App\models\userModel;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserMainPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any user models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the user model.
     *
     * @param  \App\User  $user
     * @param  \App\models\userModel  $userModel
     * @return mixed
     */
    public function view(User $user, userModel $userModel)
    {
        //
    }

    /**
     * Determine whether the user can create user models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the user model.
     *
     * @param  \App\User  $user
     * @param  \App\models\userModel  $userModel
     * @return mixed
     */
    public function update(User $user, userModel $userModel)
    {
        //
    }

    /**
     * Determine whether the user can delete the user model.
     *
     * @param  \App\User  $user
     * @param  \App\models\userModel  $userModel
     * @return mixed
     */
    public function delete(User $user, userModel $userModel)
    {
        //
    }

    /**
     * Determine whether the user can restore the user model.
     *
     * @param  \App\User  $user
     * @param  \App\models\userModel  $userModel
     * @return mixed
     */
    public function restore(User $user, userModel $userModel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the user model.
     *
     * @param  \App\User  $user
     * @param  \App\models\userModel  $userModel
     * @return mixed
     */
    public function forceDelete(User $user, userModel $userModel)
    {
        //
    }
}
