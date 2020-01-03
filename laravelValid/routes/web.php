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
    return view('welcome');
});
Route::prefix('register')->group(function(){
    Route::name('register.')->group(function(){
        Route::get('/register', 'RegisterController@create')->name("create");
        Route::post('/register', 'RegisterController@store')->name("handle_register");
    });
});


