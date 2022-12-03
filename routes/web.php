<?php
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
//     Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');

//     Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');

//     Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');
// });

Auth::routes();
Route::view('/', 'site.pages.homepage');
Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');
Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');

require 'admin.php';

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/admin', 'admin.dashboard.index');


// Auth::routes();

?>
