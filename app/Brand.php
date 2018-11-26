<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Brand extends Model
{
	protected static $tableName="brands";
	protected static $id="brandId";

   public static function SaveData ($request){
   	  DB::table(static::$tableName)->insert([
   	  	"brandName"=>$request->brandName,
   	  	"publicationStatus"=>$request->publicationStatus,
   	  	"created_at"=>now(),
        "updated_at"=>now(),

   	  ]);

   }

   public static function UpdataData($request){
   	  DB::table(static::$tableName)
   	       ->where(static::$id, $request->brandId)
   	       ->update([
   	   	       "brandName"=>$request->brandName,
   	   	       "publicationStatus"=>$request->publicationStatus,
   	     	]);

   }

   
}
