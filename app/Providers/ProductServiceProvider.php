<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Manufacture;
use App\Product;
use App\Brand;
use DB;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("fontEnd.category.canonContent", function($views){

        $publishedProducts=DB::table("products")
                          ->join("categories", "products.categoryId", "=", "categories.id")
                          ->join("manufactures", "products.manufactureId", "=", "manufactures.id")
                          ->join("brands", "products.brandId", "=", "brands.brandId")
                          ->select("products.*", "categories.id", "manufactures.id", "brands.brandName")
                          ->orderBy('products.productId', 'desc')
                          ->Orwhere(["products.manufactureId"=>request()->id])
                          ->where("products.publicationStatus",1)
                          ->get();

/*
        $publishedProducts= Product::with("category", "manufacture")->select("*")->orderBy("productId","desc")
                                    ->where("productId",request()->id)
                                    ->where("publicationStatus",1)
                                    ->get();*/




           $views->with("publishedProducts", $publishedProducts);
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
