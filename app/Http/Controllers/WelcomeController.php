<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class WelcomeController extends Controller
{
    public function index(){
        return view("fontEnd.home.homeContent");
    }
    public function CanonProduct(){
    	return view ("fontEnd.category.canonContent");
    }
    public function acountContent(){
    	return view ("fontEnd.accounts.accountContent");
    }

    public function Contentwishlist(){
    	return view ("fontEnd.wishlist.wishlistContent");
    }
    public function quilckView(){
    	return view ("fontEnd.products.ProductQuickView");
    }
    public function ProductViewContent(){
    	return view ("fontEnd.products.ProductViewContent");
    }
    public function contactContent(){
    	return view("fontEnd.contact.contactContent");
    }
    public function aboutContent(){
    	return view ("fontEnd.about.aboutContent");
    }
    public function blogContent(){
    	return view ("fontEnd.blog.blogContent");
    }
    public function singlePostContent(){
    	return view ("fontEnd.blog.postDetailsContent");
    }
    
}



