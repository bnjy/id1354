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

Route::get('/', 'ContentsController@home');
Route::get('/clients', 'ClientsController@index');
Route::get('/clients/new', 'ClientsController@newClient');
Route::post('/clients/new', 'ClientsController@create');
Route::get('/clients/{client_id}', 'ClientsController@show');
