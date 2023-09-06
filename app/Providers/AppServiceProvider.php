<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        // mendefinisikan gate. Yang bisa mengakses hanya admin bernama fadli d
        Gate::define('admin', function(User $user){
            // cek field is_admin true atau false
            return $user->is_admin;
        });
    }
}
