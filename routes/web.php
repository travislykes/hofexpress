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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-us', 'PageController@about_us')->name('about-page');

//Admin Routes

Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/user-types', 'UserTypeController@create')->name('admin.user.types');
Route::post('/admin/user-types/store', 'UserTypeController@store')->name('admin.user.types.store');
Route::delete('/admin/user-types/delete/{userType}', 'UserTypeController@destroy')->name('admin.user.type.delete');
