<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\categoryValidation;
use App\Category;

class CategoryController extends Controller
{
    public function CategoryContent(){
    	return view ("admin.category.CategoryContent");
    }

    /* category */

     public  function CategorySave(categoryValidation $request){
            $categories=Category::SaveData($request);
            return redirect("admin/Category/Add")->with("message", " Category info Save successfully");
           
    }

    public function CategoryManageContent(){
    	 $categories=Category::AllData();
    	 return view ("admin.category.manageContent",["categories"=>$categories]);

    }

    public function CategoryUnpublished($id){
        Category::UnpublishedData($id);
        return redirect ("admin/Category/manage")->with("message", " Category Unpublished successfully");


    }

    public function CategoryPublished($id){
    	Category::PublishedData($id);
    	return redirect("admin/Category/manage")->with("message", " Category Published successfully ");
    }

    public function CategoryDelete ($id){
    	Category::DeleteData($id);
    	return redirect("admin/Category/manage")->with("message", "Category Delete successfully");
    }

    public function CategoryEditContent($id){
        $categoryById= Category::SelectById($id);
    	return view("admin.category.editCategoryContent", ["categoryById"=>$categoryById]);
    }

    public function CategoryUpdate(Request $request){
    	 Category::UpdataData($request);
        return redirect("admin/Category/manage")->with("message", "Category Update successfully"); 
    }
}
