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

Route::get('/restaurant/view/{restaurant}', 'RestaurantController@show')->name('restaurant.show');

//Frontend Regster Restaurant Auth\RegisterController@save_frontend_restaurant 
Route::get('/submit-restaurant','Auth\RegisterController@register_restaurant')->name('submit.restaurant');
Route::post('/save-restaurant','Auth\RegisterController@save_frontend_restaurant')->name('save.restaurant');

//Admin Routes

Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/user-types', 'UserTypeController@create')->name('admin.user.types');
Route::post('/admin/user-types/store', 'UserTypeController@store')->name('admin.user.types.store');
Route::delete('/admin/user-types/delete/{userType}', 'UserTypeController@destroy')->name('admin.user.type.delete');

//Admin Restaurant Management Routes
Route::get('/admin/restaurants','Admin\RestaurantController@index')->name('admin.restaurants');
Route::get('/admin/restaurants/edit/{restaurant}','Admin\RestaurantController@edit')->name('admin.restaurant.edit');
Route::post('/admin/restaurant/store','Admin\RestaurantController@store')->name('admin.restaurant.store');


//Restaurant Types
Route::get('/admin/restaurant-types','Admin\RestaurantTypeController@index')->name('admin.restaurant.types');
Route::post('/admin/restaurant-types/store', 'Admin\RestaurantTypeController@store')->name('admin.restaurant.types.store');
Route::delete('/admin/restaurant-types/delete/{restaurantType}', 'Admin\RestaurantTypeController@destroy')->name('admin.restaurant.type.delete');

//Payment Types
Route::get('/admin/payment-types','Admin\PaymentTypeController@index')->name('admin.payment.types');
Route::post('/admin/payment-types/store', 'Admin\PaymentTypeController@store')->name('admin.payment.types.store');
Route::delete('/admin/payment-types/delete/{paymentType}', 'Admin\PaymentTypeController@destroy')->name('admin.payment.type.delete');


//User Mgmt
Route::get('/admin/all-users', 'Admin\UserController@index')->name('admin.all.users');
Route::get('/admin/all-admin', 'Admin\UserController@admins')->name('admin.all.admins');
Route::get('/admin/users/customers', 'Admin\UserController@customers')->name('admin.all.customers');
Route::get('/admin/users/restaurant-managers', 'Admin\UserController@manager')->name('admin.all.managers');

Route::post('/admin/admin/store', 'Admin\UserController@store')->name('new.admin.store');
Route::delete('/admin/user/delete/{restaurantType}', 'Admin\UserController@destroy')->name('admin.user.delete');
