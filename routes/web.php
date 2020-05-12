<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index')->name('start');

Route::get('/post/add/', 'PostsController@edit')->name('addpost');
Route::get('/post/edit/{ID}', 'PostsController@edit')->name('editpost');
Route::post('/post/add', 'PostsController@store');
Route::put('/post/add/{ID?}', 'PostsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
