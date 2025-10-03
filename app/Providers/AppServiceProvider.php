<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
    public function boot() : void
    {
        view()->composer('Frontend.master',function($view){
            $Logo = DB::table('website_logo')->orderBy('id','DESC')->Limit(1)->first();
            view()->share('Logo',$Logo);
        });
    }
}
