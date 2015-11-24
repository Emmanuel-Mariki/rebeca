<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DropdownRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|min:3|max:255',
            'page_id'=>'required',
            'keywords'=>'required|min:3|max:255',
            'description'=>'required|min:3|max:255',
            'publish'=>'required',
            'priority'=>'required'
        ];
    }
}
