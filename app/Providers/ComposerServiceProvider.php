<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Manufacture;
use App\Product;
use App\Brand;
use DB;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("fontEnd.products.ProductViewContent", function($views){
        $publishedIdByProducts=DB::table("products")
                          ->join("categories", "products.categoryId", "=", "categories.id")
                          ->join("manufactures", "products.manufactureId", "=", "manufactures.id")
                          ->join("brands", "products.brandId", "=", "brands.brandId")
                          ->select("products.*", "categories.categoryName", "manufactures.manufactureName", "brands.brandName")
                          ->where(["products.productId"=> request()->id,"products.publicationStatus"=>1])
                          ->first();
           $views->with("publishedIdByProducts", $publishedIdByProducts);
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
