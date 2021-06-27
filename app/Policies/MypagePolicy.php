<?php

namespace App\Policies;

use App\Mypage;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MypagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any mypages.
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
     * Determine whether the user can view the mypage.
     *
     * @param  \App\User  $user
     * @param  \App\Mypage  $mypage
     * @return mixed
     */
    public function view(User $user, Mypage $mypage)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create mypages.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the mypage.
     *
     * @param  \App\User  $user
     * @param  \App\Mypage  $mypage
     * @return mixed
     */
    public function update(User $user, Mypage $mypage)
    {
        //
        return $user->id === $mypage->user_id; 
    }

    /**
     * Determine whether the user can delete the mypage.
     *
     * @param  \App\User  $user
     * @param  \App\Mypage  $mypage
     * @return mixed
     */
    public function delete(User $user, Mypage $mypage)
    {
        //
        return $user->id === $mypage->user_id; 
    }

    /**
     * Determine whether the user can restore the mypage.
     *
     * @param  \App\User  $user
     * @param  \App\Mypage  $mypage
     * @return mixed
     */
    public function restore(User $user, Mypage $mypage)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the mypage.
     *
     * @param  \App\User  $user
     * @param  \App\Mypage  $mypage
     * @return mixed
     */
    public function forceDelete(User $user, Mypage $mypage)
    {
        //
    }
}
