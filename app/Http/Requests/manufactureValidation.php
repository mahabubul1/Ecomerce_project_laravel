<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class manufactureValidation extends FormRequest
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
           'manufactureName'=>"required",
           'manufactureDescription'=>"required",
           'publicationStatus'=>"required",
        ];
    }
   public function messages(){
        return [
            'manufactureName.required'=>'Please fill Up this Filed',
            'manufactureDescription.required'=>'Please fill Up this Filed',
            'publicationStatus.required'=>'Please fill Up this Filed',

        ];
    }

}
