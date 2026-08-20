<?php

namespace App\Policies;

use App\Models\Photo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Photo $photo): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Photo $photo): bool
    {
        return true;
    }

    public function delete(User $user, Photo $photo): bool
    {
        return true;
    }

    public function restore(User $user, Photo $photo): bool
    {
        return true;
    }

    public function forceDelete(User $user, Photo $photo): bool
    {
        return true;
    }
}
