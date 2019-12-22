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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Page_controller@index');
Route::get('/person', 'PersonController@index');
Route::get('/employee/add', 'PersonController@add_employee');
Route::post('/employee/store', 'PersonController@store_employee');
Route::post('/login', 'Page_controller@login');
Route::get('/logout', 'Page_controller@logout');
Route::get('/user', 'Page_controller@add_user');

Route::post('/user/store', 'Page_controller@user_store');
