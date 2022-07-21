<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

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

        // Laravel Pagination use Bootstrap
        Paginator::useBootstrap();

        // Connect Helpers
        foreach (glob(__DIR__.'/../Helpers/*.php') as $filename) {
            require_once $filename;
        }
        
        view()->composer('*', function( $view )
        {
                $locale = App::getLocale('locale');
                $view->with(compact('locale'));
        });
    }
}