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



Route::group(['middleware' => ['web']], function()  {
    // Authentication Routes for loggin In
    Route::get('auth/login','UserAuth\AuthController@getLogin');
    Route::post('auth/login', 'UserAuth\AuthController@postLogin');
    Route::get('auth/logout','UserAuth\AuthController@getLogout'); 

    // Registration routes for registering
    Route::get('auth/register','UserAuth\AuthController@getRegister'); 
    Route::post('auth/register','UserAuth\AuthController@getRegister'); 



    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('blog',['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

    Route::get('about', 'PagesController@getAbout');

    Route::get('contact', 'PagesController@getContact');
    
    Route::get('/', 'PagesController@getIndex');
    
    Route::resource('posts','PostController');
});