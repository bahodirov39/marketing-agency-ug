<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Service;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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
        view()->composer('*', function ($view) {
        $view->with('route', function ($routeName, $parameters = [], $absolute = true, $route = null) {
            $locale = App::getLocale();
            $parameters = array_merge([$locale], $parameters);
            return route($routeName, $parameters, $absolute, $route);
        });
    });
    }
}
