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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', function () {
    return ('<h1>Mon Site</h1>');
});

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@sendcontact')->name('sendcontact');

