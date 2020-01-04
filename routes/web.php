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
Route::get('/onboard', 'HomeController@onboard')->name('onboard');
Route::post('/onboard/submit', 'HomeController@onboard_submit')->name('onboard.submit');
Route::get('/about-us', 'PageController@about_us')->name('about-page');


Route::get('/restaurant/{restaurant}', 'RestaurantController@view')->name('restaurant.show');
Route::get('/restaurant/view/{restaurant}', 'RestaurantController@show')->name('restaurant.detail');
Route::get('/all-restaurants', 'RestaurantController@index')->name('all.restaurants');

//Logged-in User
Route::get('/my-account/{username}', 'ProfileController@my_account')->name('my-account');

//Frontend Regster Restaurant Auth\RegisterController@save_frontend_restaurant 
Route::get('/submit-restaurant','PageController@register_restaurant')->name('submit.restaurant');
Route::post('/save-restaurant','PageController@save_frontend_restaurant')->name('save.restaurant');

//Manager Routes
Route::get('/my-restaurant/onboard','MyRestaurantController@onboard')->name('res.onboard');
Route::put('/my-restaurant/onboard-complete/{restaurant}','MyRestaurantController@complete')->name('res.complete');
Route::get('/my-restaurant/preferences','MyRestaurantController@preferences')->name('res.preferences');
Route::post('/my-restaurant/preferences-complete','MyRestaurantController@pref_complete')->name('res.pref.complete');
Route::get('/my-restaurant/menus','MenuController@index')->name('my.menus');
Route::post('/save-menu','MenuController@store')->name('save.menu');
Route::get('/my-restaurant/menus/{menu}','MenuController@edit')->name('edit.menu');
Route::put('/update-menu/{menu}','MenuController@update')->name('update.menu');
Route::delete('/delete-menu/{menu}','MenuController@destroy')->name('delete.menu');

Route::get('/my-restaurant/foods', 'FoodController@index')->name('food.index');
Route::post('/my-restaurant/save-food', 'FoodController@store')->name('food.store');
//Frontend Regster Delivery Man 
Route::get('/rider-signup','PageController@rider')->name('view.rider.form');
Route::post('/save-rider','PageController@save_rider')->name('save.rider');

//Admin Routes
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/user-types', 'UserTypeController@create')->name('admin.user.types');
Route::post('/admin/user-types/store', 'UserTypeController@store')->name('admin.user.types.store');
Route::delete('/admin/user-types/delete/{userType}', 'UserTypeController@destroy')->name('admin.user.type.delete');

//Admin Restaurant Management Routes
Route::get('/admin/restaurants','Admin\RestaurantController@index')->name('admin.restaurants');
Route::get('/admin/restaurants/edit/{restaurant}','Admin\RestaurantController@edit')->name('admin.restaurant.edit');
Route::post('/admin/restaurant/store','Admin\RestaurantController@store')->name('admin.restaurant.store');
Route::put('/admin/restaurant/update/{restaurant}','Admin\RestaurantController@update')->name('admin.restaurant.update');


//Restaurant Types
Route::get('/admin/restaurant-types','Admin\RestaurantTypeController@index')->name('admin.restaurant.types');
Route::post('/admin/restaurant-types/store', 'Admin\RestaurantTypeController@store')->name('admin.restaurant.types.store');
Route::delete('/admin/restaurant-types/delete/{restaurantType}', 'Admin\RestaurantTypeController@destroy')->name('admin.restaurant.type.delete');

//Payment Types
Route::get('/admin/payment-types','Admin\PaymentTypeController@index')->name('admin.payment.types');
Route::post('/admin/payment-types/store', 'Admin\PaymentTypeController@store')->name('admin.payment.types.store');
Route::delete('/admin/payment-types/delete/{paymentType}', 'Admin\PaymentTypeController@destroy')->name('admin.payment.type.delete');

//Order Status
Route::get('/admin/order-status','OrderStatusController@index')->name('admin.orderStatus');
Route::post('/admin/order-status/store', 'OrderStatusController@store')->name('admin.orderStatus.store');
Route::delete('/admin/order-status/delete/{orderStatus}', 'OrderStatusController@destroy')->name('admin.orderStatus.delete');


//User Mgmt
Route::get('/admin/all-users', 'Admin\UserController@index')->name('admin.all.users');
Route::get('/admin/all-admins', 'Admin\UserController@admins')->name('admin.all.admins');
Route::get('/admin/all-customers', 'Admin\UserController@customers')->name('admin.all.customers');
Route::get('/admin/all-managers', 'Admin\UserController@manager')->name('admin.all.managers');
Route::get('/admin/edit-user/{user}', 'Admin\UserController@edit')->name('admin.edit.user');
Route::put('/admin/update-user/{user}', 'Admin\UserController@update')->name('admin.update.user');

Route::post('/admin/admin/store', 'Admin\UserController@store')->name('new.admin.store');
Route::delete('/admin/user/delete/{restaurantType}', 'Admin\UserController@destroy')->name('admin.user.delete');
