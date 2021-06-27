<?php

namespace App\Policies;

use App\Hole;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any holes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the hole.
     *
     * @param  \App\User  $user
     * @param  \App\Hole  $hole
     * @return mixed
     */
    public function view(User $user, Hole $hole)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create holes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->id === 1; 
    }

    /**
     * Determine whether the user can update the hole.
     *
     * @param  \App\User  $user
     * @param  \App\Hole  $hole
     * @return mixed
     */
    public function update(User $user, Hole $hole)
    {
        //
        return $user->id === 1; 
    }

    /**
     * Determine whether the user can delete the hole.
     *
     * @param  \App\User  $user
     * @param  \App\Hole  $hole
     * @return mixed
     */
    public function delete(User $user, Hole $hole)
    {
        //
        return $user->id === 1; 
    }

    /**
     * Determine whether the user can restore the hole.
     *
     * @param  \App\User  $user
     * @param  \App\Hole  $hole
     * @return mixed
     */
    public function restore(User $user, Hole $hole)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the hole.
     *
     * @param  \App\User  $user
     * @param  \App\Hole  $hole
     * @return mixed
     */
    public function forceDelete(User $user, Hole $hole)
    {
        //
    }
}
