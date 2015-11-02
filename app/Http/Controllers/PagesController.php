<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\PagesRequest;
use App\Http\Controllers\Controller;
use App\Page;

class PagesController extends Controller
{
    function getIndex()
    {
        $pages =  Page::all();
        $title = 'Page List';
        return view('admin.pages',  compact('pages','title'));
    }
    
    function showForm()
    {
        return view('admin.show_form');
    }
    
    function createPage(Requests\PagesRequest $request)
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
        return view('admin.edit_page',  compact('page'));
    }
    
    function updatePage($url, Requests\PagesRequest $request)
    {
        $page = Page::where('url', $url);
        $page->update($this->cleanRequest($request->all()));
        return redirect('pages')->with('success','The page was updated successfuly');
    }
    
    function viewPage($url)
    {
        
    }
    function deletePage($url)
    {
        
    }
    
    function cleanRequest($request)
    {
        unset($request['_method']);
        unset($request['_token']);
        unset($request['action']);
        $request['url'] =  str_slug($request['name']);
        return $request;
    }
}
