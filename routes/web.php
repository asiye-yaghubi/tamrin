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


Route::get('/', 'IndexController@index');

Auth::routes();

//===========social google==============
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');




//====================================admin route===================================================
Route::group(['namespace'=>'Admin','middleware'=>['auth','UserLevel'],'prefix'=>'admin'],function(){
// Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){

    Route::get('gallery/{id}','ProductController@gallery');
    Route::post('product/upload','ProductController@upload');


    Route::resource('product','ProductController');
    Route::resource('role','RoleController');
    Route::resource('user','UserController');
    Route::resource('permition','PermitionController');
    Route::resource('category','CategoryController');
    Route::resource('slider','SliderController');
    Route::resource('filter','FilterController');


});

Route::group(['middleware'=>['auth','UserLevel']],function()
{
    Route::get('/home','HomeController@index')->name('home');
});

Route::get('/userpanel', 'HomeController@userpanel');

//===================route default page ===================


Route::resource('category','CategoryController');

Route::group([],function()
{
    // Route::get('/basketme','BasketController@index')->middleware('auth');
    //==========ajax route ================
    Route::resource('basket','BasketController');
});
