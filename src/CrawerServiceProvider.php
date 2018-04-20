<?php
namespace Pondol\Crawler;

//use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
//use Route;

class CrawlerServiceProvider extends ServiceProvider {

	/**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

	/**
     * Bootstrap any application services.
     *
     * @return void
     */
    //public function boot(\Illuminate\Routing\Router $router)
	public function boot()
    {


         if (!$this->app->routesAreCached()) {

        }

    }
}
