<?php

Route::get("/",                         "WelcomeController@index");
Route::get("/product/Manufacture/{id}", "WelcomeController@CanonProduct");
Route::get("/account/page",             "WelcomeController@acountContent");
Route::get("/wishlist/",                "WelcomeController@Contentwishlist");
Route::get("/product-quilck-view/",     "WelcomeController@quilckView");
Route::get("/single-product-view/{id}", "WelcomeController@ProductViewContent");
Route::get("/cantact",                  "WelcomeController@contactContent");
Route::get("/About-us",                 "WelcomeController@aboutContent");
Route::get("/Blog",                     "WelcomeController@blogContent");
Route::get("/single-post",              "WelcomeController@singlePostContent");
Route::post("/add-to-cart",             "CartController@AddToCart");
Route::get("/shoping-cart",              "CartController@showCart");
Route::get("/deleteToCart/{id}",         "CartController@deleteProductToCart");
Route::get("/update-to-cart",         "CartController@updateCart");




//admin start

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
     Route::prefix('admin')->group(function () {
	     Route::get('/dashboard', 'HomeController@index');
          
          //category info

	     Route::prefix("Category")->group(function(){
	     	Route::get('/Add',              'CategoryController@CategoryContent');
	     	Route::post('/save',            'CategoryController@CategorySave');
	     	Route::get('/manage',           'CategoryController@CategoryManageContent');
	     	Route::get('/Unpublished/{id}', 'CategoryController@CategoryUnpublished');
	     	Route::get('/Published/{id}',   'CategoryController@CategoryPublished');
	        Route::get('/Edit/{id}',        'CategoryController@CategoryEditContent');
	     	Route::get('/delete/{id}',      'CategoryController@CategoryDelete');
	     	Route::post('/Update',          'CategoryController@CategoryUpdate');

	     });

      /// manufacture info

	     Route::prefix("Manufacture")->group(function(){
	     	Route::get('/Add',              'ManufactureController@ManufactureContent');
	     	Route::post('/save',            'ManufactureController@ManufactureSave');
	     	Route::get('/manage',           'ManufactureController@ManufactureManageContent');
	     	Route::get('/Unpublished/{id}', 'ManufactureController@ManufactureUnpublished');
	     	Route::get('/Published/{id}',   'ManufactureController@ManufacturePublished');
	        Route::get('/Edit/{id}',        'ManufactureController@ManufactureEditContent');
	     	Route::get('/delete/{id}',      'ManufactureController@ManufactureDelete');
	     	Route::post('/Update',          'ManufactureController@ManufactureUpdate');

	     });

       /// brand  info

	     Route::prefix("Brand")->group(function(){
	     	Route::get('/Add',              'BrandController@BrandContent');
	     	Route::post('/save',            'BrandController@BrandInfoSave');
	     	Route::get('/manage',           'BrandController@BrandManageContent');
	     	Route::get('/Unpublished/{id}', 'BrandController@BrandUnpublished');
	     	Route::get('/Published/{id}',   'BrandController@BrandPublished');
	        Route::get('/Edit/{id}',        'BrandController@BrandEditContent');
	     	Route::get('/delete/{id}',      'BrandController@BrandDelete');
	     	Route::post('/Update',          'BrandController@BrandUpdate');

	     });


       ///product info

	     Route::prefix("Product")->group(function(){
	     	Route::get('/Add',              'ProductController@ProductAddContent');
	     	Route::post('/save',            'ProductController@ProductSave');
	     	Route::get('/manage',           'ProductController@ProductManageContent');
	     	Route::get('/Unpublished/{id}', 'ProductController@ProductUnpublished');
	     	Route::get('/Published/{id}',   'ProductController@ProductPublished');
	        Route::get('/Edit/{id}',        'ProductController@ProductEditContent');
	     	Route::get('/delete/{id}',      'ProductController@ProductDelete');
	     	Route::post('/Update',          'ProductController@ProductUpdate');

	    });

   });
});




