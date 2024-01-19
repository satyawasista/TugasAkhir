<?php

namespace App\Providers;

use App\Models\Record;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Gate::define('level', function(User $user){
        return $user->level === 'Petugas';  
        });

        Gate::define('dokter', function(User $user){
            return $user->level === 'Dokter';  
            });

        Paginator::useBootstrap();
    }
}
