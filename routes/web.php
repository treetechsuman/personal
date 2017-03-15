<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::get('/dashboard','Dashboard\DashboardController@index'); 
	Route::get('/logout','Dashboard\DashboardController@logout'); 
}); 
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'FrontendPageController@index'); 
Route::get('/home', 'FrontendPageController@index'); 
Route::get('/about', 'FrontendPageController@about'); 
/*
|--------------------------------------------------------------------------
| Education Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'education'], function() { 
		Route::get('/','Education\EducationController@index');
		Route::get('/create','Education\EducationController@create');
		Route::post('/store','Education\EducationController@store');
		Route::get('/{id}/edit','Education\EducationController@edit');
		Route::get('/{id}','Education\EducationController@show');
		Route::post('/update/{id}','Education\EducationController@update');
		Route::get('/delete/{id}','Education\EducationController@delete');
	}); 
}); 
