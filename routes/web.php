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
| Setup Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'setup'], function() { 
	Route::get('/cache-clear', function(){ 
		\Artisan::call('cache:clear');
		echo 'cache-clear complete';
	});
	Route::get('/config-cache', function(){ 
		\Artisan::call('config:cache');
		echo 'config-cache complete';
	});
	Route::get('/dump-autoload', function(){ 
		exec('composer dump-autoload');
		echo 'composer dump-autoload complete';
	});
}); 

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
Route::get('/register', 'FrontendPageController@index');  
//Route::get('/blogs', 'FrontendPageController@blog'); 
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
/*
|--------------------------------------------------------------------------
| Message Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'message'], function() { 
		Route::get('/','Message\MessageController@index');
		Route::get('/create','Message\MessageController@create');
		Route::post('/store','Message\MessageController@store');
		Route::get('/{id}/edit','Message\MessageController@edit');
		Route::get('/{id}','Message\MessageController@show');
		Route::post('/update/{id}','Message\MessageController@update');
		Route::get('/delete/{id}','Message\MessageController@delete');
	}); 
}); 
/*
|--------------------------------------------------------------------------
| Slide Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'slide'], function() { 
		Route::get('/','Slide\SlideController@index');
		Route::get('/create','Slide\SlideController@create');
		Route::post('/store','Slide\SlideController@store');
		Route::get('/{id}/edit','Slide\SlideController@edit');
		Route::get('/{id}','Slide\SlideController@show');
		Route::post('/update/{id}','Slide\SlideController@update');
		Route::get('/delete/{id}','Slide\SlideController@delete');
	}); 
}); 
/*
|--------------------------------------------------------------------------
| Social Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() { 
	Route::group(['prefix' => 'social'], function() { 
		Route::get('/','Social\SocialController@index');
		Route::get('/create','Social\SocialController@create');
		Route::post('/store','Social\SocialController@store');
		Route::get('/{id}/edit','Social\SocialController@edit');
		Route::get('/{id}','Social\SocialController@show');
		Route::post('/update/{id}','Social\SocialController@update');
		Route::get('/delete/{id}','Social\SocialController@delete');
	}); 
}); 
