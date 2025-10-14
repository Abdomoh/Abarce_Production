<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Seeting;
use Illuminate\Support\Facades\View;
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

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $seeting = Seeting::first();
            $about = About::first();
            $view->with([
                'seeting' => $seeting,
                'about' => $about
            ]);
        });
    }
}
