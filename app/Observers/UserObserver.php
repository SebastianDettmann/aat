<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    public function creating(User $user)
    {
        #todo email mit pw an user

        return true;
    }

    public function saving(User $user)
    {
        # set language for localization / used by localization middleware via session
        if (!session()->has('localization')) {
            session(['localization' => auth()->user()->language]);
        }
        \App::setLocale(session('localization'));
        return true;
    }

    public function deleting(User $user)
    {
        # clears up pivot table
        $user->accesses()->detach();

        return true;
    }
}
