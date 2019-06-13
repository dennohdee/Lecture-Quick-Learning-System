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

/*Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
*/
Route::get('/', 'TasksController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/task','TasksController@add');
Route::post('/task','TasksController@create');
//Route::get('/sysadmin', 'SysAdminController@showLessons')->name('sysadmin');
//Route::get('/netadmin', 'NetAdminController@showLessons')->name('netadmin');
//Route::get('/netadminlesson','NetAdminController@edit')->name('edit');;
//Route::get('/dbms', 'DbmsController@showLessons')->name('dbms');
//Route::get('/knowledgemanagement', 'KnowledgeManagementController@showLessons')->name('knowledgemanagement');
Route::get('/task/{task}','TasksController@edit');
Route::post('/task/{task}','TasksController@update');
Route::get('/quicklearning', 'QuickLearningController@quicklearning')->name('quicklearning');
Route::get('/forum', 'ForumController@forum')->name('forum');
Route::get('/profile', 'ProfileController@showProfile')->name('profile');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('netadmin', 'NetAdminController');
Route::resource('sysadmin', 'SysAdminController');
Route::resource('dbms', 'DbmsController');
Route::resource('knowledgemanagement', 'KnowledgeManagementController');
Route::put('/profile', 'profileController@update');
Route::prefix('admin')->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admin-quicklearning', 'AdminQuickLearningController@adminquicklearning')->name('adminquicklearning');
    Route::resource('adminnetadmin', 'AdminNetAdminController');
    Route::resource('adminsysadmin', 'AdminSysAdminController');
    Route::resource('admindbms', 'AdminDbmsController');
    Route::resource('adminknowledgemanagement', 'AdminKnowledgeManagementController');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});