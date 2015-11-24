<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\PagesRequest;
use App\Http\Controllers\Controller;
use App\Page;

class PagesController extends Controller
{
    function getIndex()
    {
        $pages =  Page::all();
        $title = 'Page List';
        return view('admin.pages.pages',  compact('pages','title'));
    }
    
    function showForm()
    {
        return view('admin.pages.show_form');
    }
    
    function createPage(PagesRequest $request)
    {
        
        $input = $request->all();
        $input['url'] = str_slug($request->name, '-');
        $input['created_at'] = date("Y-m-d H:i:s");
        $page = Page::create($input);
        return redirect('pages')->with('success','Page was created successfuly');
    }
    
    function editPage($url)
    {
        $page =  Page::where('url',$url)->first();
        return view('admin.pages.edit_page',  compact('page'));
    }
    
    function updatePage($url,PagesRequest $request)
    {
        $page = Page::where('url', $url);
        $page->update($this->cleanRequest($request->all()));
        return redirect('pages')->with('success','The page was updated successfuly');
    }
    
    function viewPage($url)
    {
        
    }
    function deletePage($id)
    {
        if(Request::ajax()){
            $todo = Page::whereId($id)->first();
            $todo->delete();
            return "OK";
        }
        else 
        {
            "ERROR";
        }
        //$page = Page::destroy($id);
        //return redirect('pages')->with('success','The page was removed completetly from the databse');
    }
}
