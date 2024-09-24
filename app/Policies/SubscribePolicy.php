<?php

namespace App\Policies;

use App\Models\Provider;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SubscribePolicy
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
    public function viewDocumentsdao(User $user, Subscribe $subscribe): bool
    {
        // $provider = auth()->user()->provider;

        // dump("est");
        // dump($provider->id);
        // dump($subscribe->provider_id);
        // dd("result : ".$provider->id === $subscribe->provider_id);

        $provider = User::join("providers", 'providers.id','users.provider_id')
         ->where('users.id', auth()->user()->id)
         ->select('users.*', 'providers.*')
         ->first();
         
        return $user->id === $subscribe->provider_id;
    }

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
    public function update(User $user, Subscribe $subscribe): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Subscribe $subscribe): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Subscribe $subscribe): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Subscribe $subscribe): bool
    {
        //
    }
}
