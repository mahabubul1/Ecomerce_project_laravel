<?php

namespace App\Http\Controllers;
use App\Http\Requests\manufactureValidation;
use Illuminate\Http\Request;
use App\Manufacture;
use App\Category;


class ManufactureController extends Controller
{
    public function ManufactureContent(){
       $categories= Category::where("publicationStatus",1)->get();
    	return view ("admin.manufactutres.manufactureAddContent", ["categories"=>$categories]);
    }

    public function ManufactureSave(manufactureValidation $request){
 	    $manufactutres=Manufacture::SaveData($request);
 	    return redirect("admin/Manufacture/Add")->with("message", " Manufacture info have saved successfully");

   }
   public function ManufactureManageContent(){
   	 $manufactures= Manufacture::AllData();
   	 return view("admin.manufactutres.manufactureManageContent", ["manufactures"=>$manufactures]);
   }

   public function ManufactureUnpublished($id){
   	   Manufacture::UnpublishedData($id);
      return redirect("admin/Manufacture/manage")->with("message", " Manufacture  have Unpublished successfully");
   }


   public function ManufacturePublished($id){
   	   Manufacture::PublishedData($id);
   	   return redirect("admin/Manufacture/manage")->with("message", " Manufacture  have Published successfully");
   }

   public function ManufactureEditContent($id){
   	  $manufactureById=Manufacture::SelectById($id);
      $categories= Category::where("publicationStatus",1)->get();
   	  return view ("admin.manufactutres.manufactureEditContent",["manufactureById"=>$manufactureById, "categories"=>$categories]);
   }

   public function ManufactureUpdate(Request $request){
   	   Manufacture::UpdataData($request);
   	   return redirect("admin/Manufacture/manage")->with("message", " Manufacture  have Update successfully");

   }

   public function ManufactureDelete($id){
       Manufacture::DeleteData($id);
       return redirect("admin/Manufacture/manage")->with("message", " Manufacture  have delete successfully");

   }


}
