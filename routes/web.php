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


Route::get('/', 'PagesController@index');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
  Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

    Route::get('/', function() {
      return view('admin.index');
    })->name('admin.index');

    Route::resource('product', 'ProductsController');
    Route::resource('category','CategoriesController');
    Route::get('/orders/{type?}','OrderController@Orders');
});

  Route::resource('address', 'AddressController');

  Route::get('/user/profile/{user}', 'UserProfileController@index')->name('user_profile');


Route::get('/alarms', 'FrontController@alarm');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::get('shipping-info', 'CheckoutController@shipping')->name('checkout.shipping');

Route::get('payment', 'CheckoutController@payment')->name('checkout.payment');
Route::post('store-payment', 'CheckoutController@storePayment')->name('payment.store');
