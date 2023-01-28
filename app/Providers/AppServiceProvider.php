<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ScrapeRequest;
use App\Services\Utility;
 
 
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
        $this->app->bind(ScrapeRequest::class, function(){
        	return new ScrapeRequest();
        });
        
        $this->app->bind(Utility::class, function(){
        	return new Utility();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
