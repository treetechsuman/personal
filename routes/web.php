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

Auth::routes();

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
//Route::get('/about', 'FrontendPageController@about'); 
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
/*
|--------------------------------------------------------------------------
| Experience Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'experience'], function() { 
		Route::get('/','Experience\ExperienceController@index');
		Route::get('/create','Experience\ExperienceController@create');
		Route::post('/store','Experience\ExperienceController@store');
		Route::get('/{id}/edit','Experience\ExperienceController@edit');
		Route::get('/{id}','Experience\ExperienceController@show');
		Route::post('/update/{id}','Experience\ExperienceController@update');
		Route::get('/delete/{id}','Experience\ExperienceController@delete');
	}); 
}); 
/*
|--------------------------------------------------------------------------
| Skill Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'skill'], function() { 
		Route::get('/','Skill\SkillController@index');
		Route::get('/create','Skill\SkillController@create');
		Route::post('/store','Skill\SkillController@store');
		Route::get('/{id}/edit','Skill\SkillController@edit');
		Route::get('/{id}','Skill\SkillController@show');
		Route::post('/update/{id}','Skill\SkillController@update');
		Route::get('/delete/{id}','Skill\SkillController@delete');
	}); 
}); 
/*
|--------------------------------------------------------------------------
| Portfolio Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'portfolio'], function() { 
		Route::get('/','Portfolio\PortfolioController@index');
		Route::get('/create','Portfolio\PortfolioController@create');
		Route::post('/store','Portfolio\PortfolioController@store');
		Route::get('/{id}/edit','Portfolio\PortfolioController@edit');
		Route::get('/{id}','Portfolio\PortfolioController@show');
		Route::post('/update/{id}','Portfolio\PortfolioController@update');
		Route::get('/delete/{id}','Portfolio\PortfolioController@delete');
	}); 
}); 
/*
|--------------------------------------------------------------------------
| About Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'about'], function() { 
		Route::get('/','About\AboutController@index');
		Route::get('/create','About\AboutController@create');
		Route::post('/store','About\AboutController@store');
		Route::get('/{id}/edit','About\AboutController@edit');
		Route::get('/{id}','About\AboutController@show');
		Route::post('/update/{id}','About\AboutController@update');
		Route::get('/delete/{id}','About\AboutController@delete');
	}); 
}); 
