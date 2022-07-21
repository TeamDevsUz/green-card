<?php

namespace App\Providers;

use App\Models\CountryModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        view()->composer('*', function( $view )
        {
                $item = CountryModel::all();
                $locale = App::getLocale('locale');
                $view->with(compact('item','locale'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
