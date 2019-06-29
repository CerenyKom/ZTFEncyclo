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

route::group(['namespace' => 'Admin', 'prefix' => 'Admin'],  function(){

    route::resource('Student', 'StudentController');

    route::resource('User', 'UserController');

});

Route::get('/', 'PageController@index')->name('home');

route::get('student.api', 'StudentController@apiStudent')->name('student.api');

Route::resource('student', 'StudentController');

Route::get('/student', 'PageController@student')->name('student');

Route::get('/session', 'PageController@session')->name('session');

Route::get('/message', 'PageController@message')->name('message');

Route::get('/testimonial', 'PageController@testimonial')->name('testimonial');

Route::get('/activity', 'PageController@activity')->name('activity');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
