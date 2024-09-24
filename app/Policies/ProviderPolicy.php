<?php

namespace App\Policies;

use App\Models\Provider;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProviderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    // public function viewDocumentsdao(User $user, Subscribe $subscribe): bool
    // {
    //     $provider = auth()->user()->provider;

    //     dump("provider here");
    //     dump($provider->id);
    //     dump("test");
    //     dump($subscribe->providers_id);
    //     dump("fin test");
    //     dd($provider->id === $subscribe->provider_id);
    //     return $provider->id === $subscribe->user_id;
    // }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Provider $provider): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Provider $provider): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Provider $provider): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Provider $provider): bool
    {
        //
    }
}
