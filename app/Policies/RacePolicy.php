<?php

namespace App\Policies;

use App\Models\Race;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RacePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Race $race): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Race $race): bool
    {
        return true;
    }

    public function delete(User $user, Race $race): bool
    {
        return true;
    }

    public function restore(User $user, Race $race): bool
    {
        return true;
    }

    public function forceDelete(User $user, Race $race): bool
    {
        return true;
    }
}
