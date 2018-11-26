<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productValidation;
use App\Category;
use App\Manufacture;
use App\Product;
use App\Brand;

class ProductController extends Controller
{
    public function ProductAddContent(){ 
        $categories= Category::where("publicationStatus",1)->get();
        $manfactures= Manufacture::where("publicationStatus",1)->get();
        $brands= Brand::where("publicationStatus",1)->get();
    	return view ("admin.product.productAddContent",["categories"=> $categories, "manfactures"=>$manfactures,  "brands"=> $brands]);
    }


    public function ProductSave(productValidation $request){
        Product::SaveData($request);
        return redirect("admin/Product/Add")->with("message", " product info save successfully ");
       
    }

    public function ProductManageContent(){
    	$products= Product::AllData();
    	return view ("admin.product.ProductManageContent",["products"=>$products]);
    }

    public function ProductUnpublished($id){
    	Product::UnpublishedData($id);
       return redirect('admin/Product/manage');	
    }
	public function ProductPublished($id){
	    	Product::PublishedData($id);
	       return redirect('admin/Product/manage');	
	    }

    public function ProductDelete($id){
    	Product::productDelete($id);
    	return redirect('admin/Product/manage')->with("message", " product info delete successfully ");	
    }


    public function ProductEditContent($id){
    	$categories= Category::where("publicationStatus",1)->get();
        $manufactures= Manufacture::where("publicationStatus",1)->get();
        $brands= Brand::where("publicationStatus",1)->get();
    	$productById= Product::SelectById($id);
    	return view ("admin.product.ProductEditContent",["productById"=>$productById,"categories"=> $categories, "manufactures"=>$manufactures, "brands"=>$brands]);
    }


    public function ProductUpdate(Request $request){
        Product::UpdataData($request);
        return redirect('admin/Product/manage')->with("message", " product info Update successfully ");	

         
    }

}
