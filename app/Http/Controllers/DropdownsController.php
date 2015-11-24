<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Http\Requests\DropdownRequest;
use App\Http\Controllers\Controller;
use App\Dropdown;
use App\Page;

class DropdownsController extends Controller
{
    function getIndex()
    {
        $pages = Dropdown::all();
        //dd($pages);
        $title = 'Drop down navigation list - Kasichana Inaitiatives';
        return view('admin.dropdown.index',  compact('pages','title'));
    }
    function showForm()
    { 
        $pages = Page::lists('name','id');
        $title = 'Add drop down navigation list - Kasichana Inaitiatives';
        return view('admin.dropdown.show_form',  compact('pages','title'));
    }
    function createDrop(DropdownRequest $request)
    {
        $input = $request->all();
        $input['url'] = str_slug($request->name, '-');
        $input['created_at'] = date("Y-m-d H:i:s");
        $page = Dropdown::create($input);
        return redirect('dropdown')->with('success','Drop navigation was created successfuly');
    }
    function editDrop($id)
    {
        $pages = Page::lists('name','id');
        $page = Dropdown::where('id',$id)->first();
        $title = 'Edit drop down navigation list - Kasichana Inaitiatives';
        return view('admin.dropdown.edit_drop',  compact('page','pages','title'));
    }
    function updateDrop($id,DropdownRequest $request)
    {
        $page = Dropdown::where('id', $id);
        $page->update($this->cleanRequest($request->all()));
        return redirect('dropdown')->with('success','The drop navigation was updated successfuly');
    }
    
}
