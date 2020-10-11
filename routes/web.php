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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin/stuff/{id}', 'AdminController@stuff')->name('admin.stuff')->middleware('admin');
Route::Patch('/admin/stuff/{id}', 'AdminController@stuffPrice')->name('admin.stuffPrice')->middleware('admin');


Route::get('/surveyor', 'SurveyorController@index')->name('surveyor')->middleware('surveyor');
Route::get('/surveyor/stuff/{id}', 'SurveyorController@stuff')->name('surveyor.stuff')->middleware('surveyor');
Route::post('/surveyor/stuff/{id}', 'SurveyorController@stuffPrice')->name('surveyor.stuffPrice')->middleware('surveyor');


Route::get('/visitor', 'VisitorController@index')->name('visitor')->middleware('visitor');
Route::get('/visitor/stuff/{id}', 'VisitorController@stuff')->name('visitor.stuff')->middleware('visitor');
