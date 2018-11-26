<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartManage;
use Cart;

class CartController extends Controller
{

    public function showCart(){
        $productCarts=Cart::content();
        return view("fontEnd.cart.cartContent",["productCarts"=> $productCarts]);
    }


    public function AddToCart(Request $request){
        CartManage::AddCart($request);
        return redirect()->back();
            
    }

   

    public function deleteProductToCart($rowId){
    	Cart::remove($rowId);
    	 return redirect("shoping-cart")->with("message", " product have remove from the cart");
    }

    public function updateCart(Request $request){
         $qty=$request->qty;
         $rowId=$request->rowId;
         Cart::update($rowId, $qty);
         echo "product cart update successfully";


        
    }
}
