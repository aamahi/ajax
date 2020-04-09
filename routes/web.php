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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('contacts','ContactController@getIndex');
Route::post('contacts','ContactController@postStore');
Route::get('contacts/data','ContactController@getData');
Route::post('contact/update','ContactController@postUpdate');
Route::post('contact/delete','ContactController@postDelete');
