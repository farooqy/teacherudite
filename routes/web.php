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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'homepage\mainController@openIndexPage')->name('openIndexPage');
Route::get('/jobs', 'homepage\mainController@jobIndexPage')->name('jobIndexPage');
Route::get('/employers', 'homepage\mainController@employerIndexPage')->name('employerIndexPage');
Route::get('/blog', 'homepage\mainController@blogIndexPage')->name('blogIndexPage');
Route::get('/tefl', 'homepage\mainController@teflIndexPage')->name('teflIndexPage');
Route::get('/aboutus', 'homepage\mainController@aboutIndexPage')->name('aboutIndexPage');
Route::get('/contactus', 'homepage\mainController@contactIndexPage')->name('contactIndexPage');
