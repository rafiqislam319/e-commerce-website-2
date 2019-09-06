<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use function foo\func;
use View;

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
        View::composer('front-end.includes.header', function ($view){
            $view->with('categories', Category::where('publication_status', 1)->get());
        });
       /*View::share('name', 'dfdf');*/
    }
}
