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

// We want to replace everything into directing to the controller 
// than connecting through the routes
Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

// name of the function of the controller is submit
Route::get('messages', 'MessagesController@getMessages');

// name of the function of the controller is submit
Route::post('/contact/submit', 'MessagesController@submit');

