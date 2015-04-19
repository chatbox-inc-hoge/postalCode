<?php namespace Chatbox\PostalCode\Providers;

use Illuminate\Support\ServiceProvider;

class AppRouteServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        $this->app->get("",function()use($app){
            return $app->welcome();
        });
        $this->app->controller("code/",new \Chatbox\PostalCode\Http\Controllers\CodeController());
//        $this->app->controller("/account/",new \Website\Http\Controllers\AccountController());
    }
}
