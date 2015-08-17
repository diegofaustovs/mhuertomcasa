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

Route::get('/news', ['as'=>'news', 'uses'=>'NewsController@showAllNews']);
Route::get('/press', ['as'=>'press', 'uses'=>'NewsController@showAllPress']);
Route::get('/solar_press', ['as'=>'solar_press', 'uses'=>'NewsController@showAllSolarPress']);

Route::get('/', ['as'=>'index', 'uses'=>'StaticController@index']);

/*
 * Teams
 */

Route::get('/environmental', ['as'=>'environmental', 'uses'=>'StaticController@environmental']);
Route::get('/management', ['as'=>'management', 'uses'=>'StaticController@management']);
Route::get('/architecture', ['as'=>'architecture', 'uses'=>'StaticController@architecture']);
Route::get('/civil', ['as'=>'civil', 'uses'=>'StaticController@civil']);
Route::get('/social', ['as'=>'social', 'uses'=>'StaticController@social']);
Route::get('/electric', ['as'=>'electric', 'uses'=>'StaticController@electric']);
Route::get('/orchards', ['as'=>'orchards', 'uses'=>'StaticController@orchards']);
Route::get('/bioclimatics', ['as'=>'bioclimatics', 'uses'=>'StaticController@bioclimatics']);
Route::get('/design', ['as'=>'design', 'uses'=>'StaticController@design']);
Route::get('/web', ['as'=>'web', 'uses'=>'StaticController@web']);

Route::get('/org_chart', ['as'=>'org_chart', 'uses'=>'StaticController@organization_chart']);
/*
 * Sponsors
 */

Route::get('/project_sponsors', ['as'=>'project_sponsors', 'uses'=>'StaticController@projectSponsors']);

/*
 * Solar Decathlon
 */

Route::get('/solarInfo',['as'=>'solarInfo', 'uses'=>'StaticController@solarInfo']);
Route::get('/contests',['as'=>'contests', 'uses'=>'StaticController@contests']);

Route::get('/videos',['as'=>'videos', 'uses'=>'StaticController@videos']);

//Route::get('home', 'HomeController@index');