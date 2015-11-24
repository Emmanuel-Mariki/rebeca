<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PagesRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:255',
            'keywords'=>'required|min:3|max:255',
            'description'=>'required|min:3|max:255',
            'dynamic'=>'required',
            'publish'=>'required',
            'contents'=>'required_if:dynamic,0'
        ];
    }
}
