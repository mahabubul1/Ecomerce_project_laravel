<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use DB;
use Cart;

class CartManage extends Model
{
  public static function AddCart($request)

  {
       $productsinfo=  DB::table("products")
                          ->where("productId", $request->productId)
                          ->first();

           $productImage=  explode(",", $productsinfo->productImage);

	     return   Cart::add([
	           "id"=>$request->productId,
	           "name"=>$productsinfo->productName,
	           "price"=>$productsinfo->productPrice,
	           "qty"=>$request->qty,
	           'options' => ['image' =>$productImage[0]]


	        ]);

      
  }



}
