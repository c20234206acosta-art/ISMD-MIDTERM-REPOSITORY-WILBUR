<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Admin can view all users.
     * Owner can view only employees.
     * Employee can only view themselves.
     */
    public function view(User $authUser, User $targetUser): bool
    {
        if ($authUser->hasRole('admin')) {
            return true;
        }

        if ($authUser->hasRole('shop owner') && $targetUser->hasRole('employee')) {
            return true;
        }

        if ($authUser->hasRole('employee') && $authUser->id === $targetUser->id) {
            return false;
        }

        return false;
    }

    /**
     * Admin can create any user.
     * Owner can create employees only.
     * Employee cannot create users.
     */
    public function create(User $authUser): bool
    {
        return $authUser->hasRole('admin') || $authUser->hasRole('shop owner');
    }

    /**
     * Admin can update any user.
     * Owner cannot update (per exam rules).
     * Employee cannot update.
     */
    public function update(User $authUser): bool
    {
        return $authUser->hasRole('admin');
    }

    /**
     * Admin can delete any user.
     * Owner cannot delete (per exam rules).
     * Employee cannot delete.
     */
    public function delete(User $authUser): bool
    {
        return $authUser->hasRole('admin');
    }

    public function deleteAny(User $authUser): bool
    {
        return $authUser->hasRole('admin');
    }
}

