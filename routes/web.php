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

Route::get('/home', 'dashboardController@index')->name('home');

Route::get('/', 'dashboardController@index')->name('home');
Route::get('/newDoc', 'newDocController@index')->name('add_new_document');
Route::post('/createDoc', 'newDocController@create')->name('createDoc');
Route::get('/docs', 'showDocsController@index')->name('show_documents');
Route::get('/doc/{id?}', 'showDocsController@getOne')->name('show_document');
Route::post('/upload_pic', 'newDocController@saveImage')->middleware('web');


