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

Route::get('/', 'PagesController@index');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/meatballs', 'PagesController@meatballs');
Route::get('/pancakes', 'PagesController@pancakes');
Route::get('/login', 'PagesController@login');
Route::get('/comments', 'PagesController@comments');
//Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/dashboard', 'DashboardController@index');

//Route::get('/comments/{recipe}', 'ComemntsController@store');

Route::resource('comments', 'CommentsController');

Auth::routes();
