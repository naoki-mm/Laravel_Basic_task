<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     
    // 常時SSL化の設定
    public function boot(UrlGenerator $url)
    {
        \Schema::defaultStringLength(191);
          // 常時SSL化の設定
        $url->forceScheme('https'); 
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
