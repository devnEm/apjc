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

Route::get('/home', 'Front\HomeController@index');
Route::get('/admin', 'Back\AdminController@index');

Route::get('/admin/ecole', 'Back\SchoolController@showAllSchool');
// Route::get('/admin/ecole/{ecole_id}','Back\SchoolController@showSchool');
// Route::post('/admin/ecole/save/{ecole_id}','Back\SchoolController@saveSchool');
// Route::post('/admin/ecole/reset/{ecole_id}','Back\SchoolController@deleteSchool');
// Route::post('/admin/ecole/update/{ecole_id}','Back\SchoolController@updateSchool');
