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
Route::group(['middleware' => ['web']], function () {
  Route::get('/', function () {
      return view('public.index');
  });
  Route::get('/ecole', function () {
      return view('public.ecole');
  });
  Route::get('/actualite', function () {
      return view('public.news');
  });
  Route::get('/actions', function () {
      return view('public.actions');
  });
  Route::get('/info', function () {
      return view('public.whoarewe');
  });

  Route::auth();
});

Route::group(['middleware' => ['auth']], function () {
  Route::get('/home', 'Front\HomeController@index');
  Route::get('/admin', 'Back\AdminController@index');

  Route::get('/admin/ecole', 'Back\SchoolController@showAllSchool');
  Route::get('/admin/ecole/{ecole_id}/show','Back\SchoolController@showSchool');
  Route::get('/admin/ecole/create','Back\SchoolController@createSchool');
  // Route::post('/admin/ecole/create','Back\SchoolController@saveSchool');
  // Route::post('/admin/ecole/reset/{ecole_id}','Back\SchoolController@deleteSchool');
  // Route::post('/admin/ecole/update/{ecole_id}','Back\SchoolController@updateSchool');

  Route::get('/admin/millesime', 'Back\SchoolController@showAllMillesime');
  Route::get('/admin/millesime/{millesime_id}/show','Back\SchoolController@showMillesime');
  Route::get('/admin/millesime/create','Back\SchoolController@createMillesime');
  // Route::post('/admin/millesime/create','Back\SchoolController@saveSchool');
  // Route::post('/admin/millesime/reset/{ecole_id}','Back\SchoolController@deleteSchool');
  // Route::post('/admin/millesime/update/{ecole_id}','Back\SchoolController@updateSchool');
});
