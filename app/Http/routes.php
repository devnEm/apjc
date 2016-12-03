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
  Route::get('/actualite', 'Front\NewsController@index');
  Route::get('/actualite/article/{post_id}', 'Front\NewsController@article');

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

  Route::get('/admin/ecole', 'Back\School\SchoolController@showAllSchool');
  Route::get('/admin/ecole/show/{ecole_id}','Back\School\SchoolController@showSchool');
  Route::get('/admin/ecole/create','Back\School\SchoolController@createSchool');
  Route::post('/admin/ecole/create','Back\School\SchoolController@saveSchool');
  Route::get('/admin/ecole/edit/{ecole_id}','Back\School\SchoolController@editSchool');
  Route::post('/admin/ecole/update/{ecole_id}','Back\School\SchoolController@updateSchool');
  Route::get('/admin/ecole/delete/{ecole_id}','Back\School\SchoolController@deleteSchool');

  Route::get('/admin/promotion', 'Back\School\PromotionController@showAllPromotion');
  Route::get('/admin/promotion/show/{promotion_id}','Back\School\PromotionController@showPromotion');
  Route::get('/admin/promotion/create','Back\School\PromotionController@createPromotion');
  Route::post('/admin/promotion/create','Back\School\PromotionController@savePromotion');
  Route::get('/admin/promotion/edit/{promotion_id}','Back\School\PromotionController@editPromotion');
  Route::post('/admin/promotion/update/{promotion_id}','Back\School\PromotionController@updatePromotion');
  Route::get('/admin/promotion/delete/{promotion_id}','Back\School\PromotionController@deletePromotion');

  Route::get('/admin/promotion/create/classe/{promotion_id}','Back\School\ClassesController@createClasses');
  Route::post('/admin/promotion/create/classe/{promotion_id}','Back\School\ClassesController@saveClasses');
  Route::get('/admin/promotion/classe/edit/{classe_id}','Back\School\ClassesController@editClasses');
  Route::post('/admin/promotion/classe/update/{classe_id}','Back\School\ClassesController@updateClasses');
  Route::get('/admin/promotion/classe/delete/{classe_id}','Back\School\ClassesController@deleteClasses');

  Route::get('/admin/promotion/create/council/{promotion_id}','Back\School\CouncilController@createCouncil');
  Route::post('/admin/promotion/create/council/{promotion_id}','Back\School\CouncilController@saveCouncil');
  Route::get('/admin/promotion/council/edit/{council_id}','Back\School\CouncilController@editCouncil');
  Route::post('/admin/promotion/council/update/{council_id}','Back\School\CouncilController@updateCouncil');

  Route::get('/admin/election', 'Back\School\ElectionController@showAllElection');
  Route::get('/admin/election/show/{promotion_id}','Back\School\ElectionController@showElection');
  Route::get('/admin/election/create/{promotion_id}','Back\School\ElectionController@createElection');
  Route::post('/admin/election/create/{promotion_id}','Back\School\ElectionController@saveElection');
  Route::get('/admin/election/edit/{election_id}','Back\School\ElectionController@editElection');
  Route::post('/admin/election/update/{election_id}','Back\School\ElectionController@updateElection');

  Route::get('/admin/redaction/','Back\Redaction\PostController@redaction');

  Route::get('/admin/redaction/create/post','Back\Redaction\PostController@createPost');
  Route::post('/admin/redaction/create/post','Back\Redaction\PostController@savePost');
  Route::get('/admin/redaction/edit/post/{post_id}','Back\Redaction\PostController@editPost');
  Route::post('/admin/redaction/edit/post/{post_id}','Back\Redaction\PostController@updatePost');

  Route::get('/admin/redaction/create/category','Back\Redaction\CategoryController@createCategory');
  Route::post('/admin/redaction/create/category','Back\Redaction\CategoryController@saveCategory');
});
