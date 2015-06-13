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

Route::get('/', 'StaticController@index');

Route::get('/management', ['as'=>'management', 'uses'=>'StaticController@management']);

Route::get('/project_sponsors', ['as'=>'project_sponsors', 'uses'=>'StaticController@projectSponsors']);

//Route::get('home', 'HomeController@index');

