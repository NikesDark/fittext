<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('api', 'ApiController@index');

Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/peoples', 'PeopleController@index');

Route::get('/peoples/delete/{id}', 'PeopleController@delete');


Route::get('/messages', 'MessagesController@index');

Route::get('/messages/{phone}', 'MessagesController@find');

Route::get('/delivery', 'DeliveryController@index');

Route::get('/delivery/add', 'DeliveryController@add');

Route::post('/delivery/add', 'DeliveryController@create');

Route::get('/delivery/delete/{id}', 'DeliveryController@delete');

