<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

//============admin route===============================================================
Route::group(['namespace'=>'Admin','middleware'=>['auth'],'prefix'=>'admin'],function(){

    Route::resource('product','ProductController');
    Route::resource('role','RoleController');
    Route::resource('user','UserController');
    Route::resource('permition','PermitionController');
    Route::resource('category','CategoryController');



});