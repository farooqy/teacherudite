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

//Admin

Route::get('/login', 'unauth\generalPagesController@getAdminLoginPage')->name('login')->middleware('loginAuthRoute');
Route::get('/register', 'admin\adminController@getAdminRegisterPage')->name('adminRegisterPage');
Route::get('/admin', 'admin\adminController@getAdminIndexPage')->name('adminIndexPage');

//jobs
Route::get('/admin/jobs/new', 'jobs\MainJobsController@newJobsView')->name('newJobView');
Route::get('/admin/jobs/list', 'jobs\MainJobsController@listActiveJobsView')->name('listActiveJobsView');
Route::get('/admin/jobs/list/disabled', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');

//employers
Route::get('/admin/employer/new', 'jobs\MainJobsController@newJobsView')->name('newJobView');
Route::get('/admin/employer/list', 'jobs\MainJobsController@listActiveJobsView')->name('listActiveJobsView');
Route::get('/admin/employer/list/disabled', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');


//applicatins
Route::get('/admin/applications', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');
Route::get('/admin/applications/rejected', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');

//News
Route::get('/admin/news/new', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');
Route::get('/admin/news/published', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');

//Feedback
Route::get('/admin/feedback', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');
Route::get('/admin/feedback/seen', 'jobs\MainJobsController@listDisabledJobsView')->name('listDisabledJobsView');
