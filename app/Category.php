<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Paginator;


class Category extends Model

{  
     protected static $tableName= "categories";
     protected static $id= "id";


      public static function SaveData ($request){
           DB::table(static::$tableName)->insert([
               "categoryName"=>$request->categoryName,
               "publicationStatus"=>$request->publicationStatus,
               "created_at"=>now(),
               "updated_at"=>now(),

          ]);

      }


   public static  function UpdataData($request){
   	    DB::table(static::$tableName)
   	       ->where(static::$id, $request->categoryId)
   	       ->update([
   	   	       "categoryName"=>$request->categoryName,
   	   	       "publicationStatus"=>$request->publicationStatus,
   	     	]);

   }

   public static function categoryInfo(){
        return DB::table(static::$tableName)
               ->select('*')
               ->where(["publicationStatus",1]);



    } 


   public function manufactires (){
        return $this->hasMany(Manufacture::class, "categoryId");

   }






}
