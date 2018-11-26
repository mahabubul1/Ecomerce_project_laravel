<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Manufacture extends Model
{
     protected static $tableName = "manufactures";
     protected static $id= "id";

     public static function SaveData ($request){
           DB::table(static::$tableName)->insert([
               "manufactureName"=>$request->manufactureName,
               "categoryId"=>$request->categoryId,
               "manufactureDescription"=>$request->manufactureDescription,
               "publicationStatus"=>$request->publicationStatus,
               "created_at"=>now(),
               "updated_at"=>now(),

          ]);

      }

    public static function UpdataData($request){
    	DB::table(static::$tableName)->where(static::$id, $request->manufactureId)
          ->update([
            "manufactureName"=>$request->manufactureName,
            "categoryId"=>$request->categoryId,
            "manufactureDescription"=>$request->manufactureDescription,
            "publicationStatus"=>$request->publicationStatus,
           
          ]);

    	
    }  
}
