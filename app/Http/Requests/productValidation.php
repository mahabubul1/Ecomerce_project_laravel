<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            "productName"=>"required",
            "productShortDescription"=>"required|min:50",
            "productLongDescription"=>"required|min:120",
            "productImage"=>"required",
            "productPrice"=>"required|regex:/[0-9]+/",
            "productQty"=>"required|regex:/[0-9]+/",
            "productSize"=>"required",
            "productColor"=>"required",
            "publicationStatus"=>"required",
        ];
      
    }

    public function messages(){

        return [
          
          "productPrice.regex"=>" product price must be integer",
          "productQty.regex"=>" product Quantity must be integer",
 
        ];

    }

}
