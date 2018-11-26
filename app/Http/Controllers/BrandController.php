<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\brandValidation;

use App\Brand;

class BrandController extends Controller
{
    
    public function BrandContent(){
    	return  view ("admin.brands.brandAddContent");
    }


   public function BrandInfoSave(brandValidation $request){
          Brand::SaveData($request);
          return  redirect("admin/Brand/Add")->with("message", "Brand Info save successfully");

  }



	public function BrandManageContent(){
	 	  $brands=Brand::AllData();
	 	 return view ("admin.brands.brandAllInfoContent",["brands"=> $brands]);


	}
   

    public function BrandUnpublished($id)
     {
     	Brand::UnpublishedData($id);
     	 return redirect("admin/Brand/manage")->with("message", "Brand Info Unpublished successfully");

     }


    public function BrandPublished($id)
     {
     	Brand::PublishedData($id);
     	 return redirect("admin/Brand/manage")->with("message", "Brand Info Published successfully");

     }
   
    public function BrandDelete($id)
     {
     	Brand::DeleteData($id);
     	 return redirect("admin/Brand/manage")->with("message", "Brand Info delete successfully");

     }

     public function BrandEditContent($id){
        $brandById=Brand::SelectById($id);
     	return view ("admin.brands.BrandEditContent",["brandById"=>$brandById]);
     }
      


      public function BrandUpdate(Request $request){
      	Brand::UpdataData($request);
      	return redirect("admin/Brand/manage")->with("message", "Brand Info Update successfully");
      }
}   

