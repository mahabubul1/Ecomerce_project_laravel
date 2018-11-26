<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;

class CartServiceProvider extends ServiceProvider
{

    public function boot()
    {
    
      view()->composer("fontEnd.includes.headerbottom",function($views){
      $prodcutCarts=Cart::content();
      $views->with("prodcutCarts", $prodcutCarts);

      });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
