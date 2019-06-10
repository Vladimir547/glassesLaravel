<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //для классов
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //для логики
        //echo 'ok';
        View::composer( 'layouts.*', 'App\Providers\ViewComposers\SiteComposer');
    }
}
