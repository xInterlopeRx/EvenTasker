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

// These routes can be access without authentication
Route::get('/', 'PublicController@splash')->name('splash');

Route::get('/profile', 'PublicController@profile')->name('profile');

Route::get('/events', 'PublicController@events')->name('events');

Route::get('/contact', 'PublicController@events')->name('contact');


// These routes require authentication and re-route to a login page when access is attempted
Auth::routes();

Route::get('/home', 'PrivateController@index')->name('home');


