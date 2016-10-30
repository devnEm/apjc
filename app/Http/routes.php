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
