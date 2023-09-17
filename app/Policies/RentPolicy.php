<?php

namespace App\Policies;

use App\Models\Entity\User;
use App\Models\Entity\Rent;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function viewAny(User $user): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Rent $data
     * @return Response|bool
     */
    public function view(User $user, Rent $data): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Rent $data
     * @return Response|bool
     */
    public function update(User $user, Rent $data): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Rent $data
     * @return Response|bool
     */
    public function delete(User $user, Rent $data): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Rent $data
     * @return Response|bool
     */
    public function restore(User $user, Rent $data): Response|bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Rent $data
     * @return Response|bool
     */
    public function forceDelete(User $user, Rent $data): Response|bool
    {
        return true;
    }
}
