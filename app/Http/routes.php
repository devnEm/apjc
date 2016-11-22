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

  Route::get('/admin/promotion', 'Back\PromotionController@showAllPromotion');
  Route::get('/admin/promotion/show/{promotion_id}','Back\PromotionController@showPromotion');
  Route::get('/admin/promotion/create','Back\PromotionController@createPromotion');
  Route::post('/admin/promotion/create','Back\PromotionController@savePromotion');
  Route::get('/admin/promotion/edit/{promotion_id}','Back\PromotionController@editPromotion');
  Route::post('/admin/promotion/update/{promotion_id}','Back\PromotionController@updatePromotion');
  Route::get('/admin/promotion/delete/{promotion_id}','Back\PromotionController@deletePromotion');

  Route::get('/admin/promotion/create/classe/{promotion_id}','Back\ClassesController@createClasses');
  Route::post('/admin/promotion/create/classe/{promotion_id}','Back\ClassesController@saveClasses');
  Route::get('/admin/promotion/classe/edit/{classe_id}','Back\ClassesController@editClasses');
  Route::post('/admin/promotion/classe/update/{classe_id}','Back\ClassesController@updateClasses');
  Route::get('/admin/promotion/classe/delete/{classe_id}','Back\ClassesController@deleteClasses');
});
