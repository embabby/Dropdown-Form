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

;


 Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);


 Route::get('/cities/{id}', ['uses' => 'HomeController@cities']);
 Route::get('/areas/{id}', ['uses' => 'HomeController@areas']);
 Route::get('/companies/{id}', ['uses' => 'HomeController@companies']);
 Route::get('/brands/{id}', ['uses' => 'HomeController@brands']);
 Route::get('/branches/{id}', ['uses' => 'HomeController@branches']);
 Route::get('/stands/{id}', ['uses' => 'HomeController@stands']);