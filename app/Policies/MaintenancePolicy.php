<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Maintenance;
use Illuminate\Auth\Access\HandlesAuthorization;

class MaintenancePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Maintenance $maintenance): bool
    {
        return $user->id === $maintenance->user_id;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Maintenance $maintenance): bool
    {
        return $user->id === $maintenance->user_id;
    }

    public function delete(User $user, Maintenance $maintenance): bool
    {
        return $user->id === $maintenance->user_id;
    }
}
