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

Route::get('/', 'EventController@index');
Route::get('/about', 'EventController@about');
Route::get('/service', 'EventController@service');
Route::get('/contract', 'EventController@contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/events/{id}/{event}', 'HomeController@show')->name('events.show');
Route::get('/payments/{id}', 'HomeController@paymentOption')->name('payments.payment');

