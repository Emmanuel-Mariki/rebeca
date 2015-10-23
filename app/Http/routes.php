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