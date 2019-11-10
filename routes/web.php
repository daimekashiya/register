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
    return view('membership.home');
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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('membership/update/{id}', 'MembershipController@update');
Route::get('/membership/approve/{id}', 'MembershipController@approve');