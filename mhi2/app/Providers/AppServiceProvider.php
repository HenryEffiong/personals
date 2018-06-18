<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use View;
use App\Event;
use App\Setting;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('events', Event::limit(6)->orderBy('date', 'desc')->get());
        View::share('setting', Setting::find(1));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
