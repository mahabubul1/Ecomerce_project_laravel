<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Manufacture;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(["fontEnd.includes.menuArea","fontEnd.includes.sidebar", "fontEnd.includes.mobileMenu"], function($views){
             $categories= Category::with("manufactires")->where(["publicationStatus"=>1])->get();
              $views->with("categories",$categories);
        });

        

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
