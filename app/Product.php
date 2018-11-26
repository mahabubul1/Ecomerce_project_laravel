<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Category;
use App\Manufacture;

class Product extends Model
{     
	protected static $tableName= "products";
	protected static $id="productId";


 public function category(){
     return $this->belongsTo(Category::class);
 }

 public function brand(){
     return $this->belongsTo(Brand::class, "brandId");
 }

 public function manufacture(){
     return $this->belongsTo(Manufacture::class);
 }






public static function  SaveData($request){
          if($request->hasFile("productImage")){
             $productImages=$request->productImage;
             $imagUrl="";
           foreach($productImages as $productImage) {
                    $product=explode(" ",$request->productName);
                    $productname= implode("_", $product);
                    $Imagename=uniqid().substr_replace($productImage->getClientOriginalName(), $productname, 0,-5);
                    $uploadPath = "public/admin_asset/images/";
                    $productImage->move($uploadPath, $Imagename);
                    $imagUrl.= $uploadPath.$Imagename."," ;

                  }

            static::ImageUpload($imagUrl, $request) ; 

       
        }

    }

   private static function ImageUpload ($imagUrl, $request){
       DB::table(static::$tableName)->insert([
      		"productName"=>$request->productName,
      		"categoryId"=>$request->categoryId,
          "manufactureId"=>$request->manufactureId,
      		"brandId"=>$request->brandId,
      		"productShortDescription"=>$request->productShortDescription,
      		"productLongDescription"=>$request->productLongDescription,
      		"productImage"=>$imagUrl,
      		"productPrice"=>$request->productPrice,
      		"productQty"=>$request->productQty,
      		"productSize"=>$request->productSize,
      		"productColor"=>$request->productColor,
      		"publicationStatus"=>$request->publicationStatus,
      		"created_at"=>now(),
          "updated_at"=>now(),

  	]);


   }




  public static function productDelete($id){
      $productImage= DB::table(static::$tableName)->where(static::$id, $id)->first();
      $Imagelinks= explode(",", $productImage->productImage);
      foreach ($Imagelinks as $Image) {
         @unlink($Image);    
      }
      DB::table(static::$tableName)->where(static::$id, $id)->delete();

   }


   public static function UpdataData($request){
           $imagUrl= static::ImageExitStatus($request);
           static::updateProductSave($imagUrl, $request);

     }

    private static function ImageExitStatus($request){
           $productImages= DB::table(static::$tableName)->select("productImage")->where(static::$id,$request->productId)->first();
           $Imagelinks=explode(",",  $productImages->productImage);
           if($request->hasFile("productImage")){
            foreach ($Imagelinks as $Image) { @unlink($Image); }
            $productImages=$request->productImage;
             $imagUrl="";
             foreach($productImages as $productImage) {
                    $product=explode(" ",$request->productName);
                    $productname= implode("_", $product);
                    $Imagename=uniqid().substr_replace($productImage->getClientOriginalName(), $productname, 0,-5);
                    $uploadPath = "public/admin_asset/images/";
                    $productImage->move($uploadPath, $Imagename);
                    $imagUrl.= $uploadPath.$Imagename."," ;

                  }

           }else{
             $imagUrl=$productImages->productImage;
           }
          
          return  $imagUrl;

       }



    private static function updateProductSave($imagUrl, $request){
        DB::table(static::$tableName)->where("productId", $request->productId)->update([
          "productName"=>$request->productName,
          "categoryId"=>$request->categoryId,
          "manufactureId"=>$request->manufactureId,
          "brandId"=>$request->brandId,
          "productShortDescription"=>$request->productShortDescription,
          "productLongDescription"=>$request->productLongDescription,
          "productImage"=>$imagUrl,
          "productPrice"=>$request->productPrice,
          "productQty"=>$request->productQty,
          "productSize"=>$request->productSize,
          "productColor"=>$request->productColor,
          "publicationStatus"=>$request->publicationStatus,
          "created_at"=>now(),
          "updated_at"=>now(),
          

        ]);


    }


 }
       



    


