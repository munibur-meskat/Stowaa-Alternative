<?php

namespace App\Providers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();
        // passing data into view page without route and controller:
        // $id = auth()->user()->id;
        View()->composer('*', function ($view) {
            $view->with('user_profiles',UserProfile::all());

             
       
        });
        View()->composer('*',function($view){
            $view->with('activeUsers',User::all());
        });
    }
}
