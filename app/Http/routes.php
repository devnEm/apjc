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
  Route::get('/', 'Front\IndexController@index');
  Route::get('/ecole', 'Front\IndexController@ecole');
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
  Route::get('/admin/ecole/show/{ecole_id}','Back\SchoolController@showSchool');
  Route::get('/admin/ecole/create','Back\SchoolController@createSchool');
  Route::post('/admin/ecole/create','Back\SchoolController@saveSchool');
  Route::get('/admin/ecole/edit/{ecole_id}','Back\SchoolController@editSchool');
  Route::post('/admin/ecole/update/{ecole_id}','Back\SchoolController@updateSchool');
  Route::get('/admin/ecole/delete/{ecole_id}','Back\SchoolController@deleteSchool');

  Route::get('/admin/promotion', 'Back\SchoolController@showAllPromotion');
  Route::get('/admin/promotion/show/{promotion_id}','Back\SchoolController@showPromotion');
  Route::get('/admin/promotion/create','Back\SchoolController@createPromotion');
  Route::post('/admin/promotion/create','Back\SchoolController@savePromotion');
  Route::get('/admin/promotion/edit/{promotion_id}','Back\SchoolController@editPromotion');
  Route::post('/admin/promotion/delete/{promotion_id}','Back\SchoolController@deletePromotion');
});
