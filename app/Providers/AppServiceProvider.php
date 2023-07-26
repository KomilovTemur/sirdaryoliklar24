<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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


        view()->composer('layouts.site',function($view){
            $categories = \App\Models\Category::all();
            $ads = \App\Models\Ad::first();
            $view->with(compact('categories','ads'));
        });

        view()->composer('sections.popularPosts',function($view){
            $ads = \App\Models\Ad::first();
            $popularPosts =  \App\Models\Post::limit(4)->orderBy('view','DESC')->get();
            $view->with(compact('ads','popularPosts'));
        });
      
    }
}
