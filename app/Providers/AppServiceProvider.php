<?php

namespace App\Providers;

use App\Models\Provider;
use App\Models\Subscribe;
use App\Policies\ProviderPolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    protected $policies = [
        Subscribe::class => SubscribePolicy::class,
        Provider::class => ProviderPolicy::class
    ];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
