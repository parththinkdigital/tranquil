<?php

namespace App\Policies;

use App\Models\Property;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PropertyPolicy
{
    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(?User $user, Property $property): bool
    {
        if ($property->status === 'published') {
            return true;
        }

        return $user && $user->hasRole('admin');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Property $property): bool
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, Property $property): bool
    {
        return $user->hasRole('admin');
    }
}
