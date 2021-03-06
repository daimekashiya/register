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

Route::get('/', function () {
    return view('FrontPage');
});

Route::get('theme', function () {
    return view('test.welcome');
});


Route::group(['prefix' => 'theme'], function() {
    Route::group(['prefix' => 'demo'], function() {
        Route::get('home/{id}', 'theme\DemoController@home');
    });
});

Auth::routes();

Route::get('/FrontPage', 'FrontPageController@index')->name('FrontPage');

Route::get('/about', 'FrontPageController@about')->name('about');

Route::get('/membership', 'FrontPageController@membership')->name('membership');

Route::get('/contact', 'FrontPageController@contact')->name('contact');

Route::get('/gallery', 'FrontPageController@gallery')->name('gallery');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'membership'], function() {
    Route::post('update/{id}', 'MembershipController@update');
    Route::get('approve/{id}', 'MembershipController@approve');
    Route::get('delete/{id}', 'MembershipController@delete');
});

