<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', [
    'as' => 'home', 'uses' => 'HomeController@GetIndex']
);
Route::get('about-us', [
    'as' => 'about', 'uses' => 'AboutUsController@GetIndex']
);

Route::get('partners', [
    'as' => 'partners', 'uses' => 'PartnersController@GetIndex']
);
Route::get('what-we-do', [
    'as' => 'action', 'uses' => 'WhatWeDoController@GetIndex']
);
Route::get('pages', [
    'as' => 'pages', 'uses' => 'PagesController@getIndex']
);
Route::get('pages/add', [
    'as' => 'add_page', 'uses' => 'PagesController@showForm']
);
Route::post('pages/create', [
    'as' => 'create_page', 'uses' => 'PagesController@createPage']
);

Route::get('pages/edit/{url}', [
    'as' => 'edit_page', 'uses' => 'PagesController@editPage']
);
Route::put('pages/update/{url}', [
    'as' => 'update_page', 'uses' => 'PagesController@updatePage']
);

Route::get('pages/delete/{url}', [
    'as' => 'delete_page', 'uses' => 'PagesController@deletePage']
);
Route::delete('pages/destory/{url}', [
    'as' => 'destroy_page', 'uses' => 'PagesController@deletePage']
);
Route::get('pages/view/{url}', [
    'as' => 'view_page', 'uses' => 'PagesController@viewPage']
);