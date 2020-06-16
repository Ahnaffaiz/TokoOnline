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

// Route::get('/', function () {
//     return view('frontend.homepage.index');
// });
Route::get('/', 'HomepageController@index');
Route::get('/admin', 'DashboardController@index')
    // ->middleware(['auth','admin'])
    ->name('admin');

Route::patch('/transaksi/{transaction}','TransactionController@update');
Route::get('/transaksi','TransactionController@index');
Route::get('/transaksi/{transaction}', 'TransactionController@show');
Route::patch('/transaksi/{transaction}','TransactionController@update');


Route::get('/produk', 'ProductsController@index');
Route::get('/produk/create', 'ProductsController@create');
Route::get('/produk/{product}', 'ProductsController@show');
Route::post('/produk','ProductsController@store');
Route::delete('/produk/{product}','ProductsController@destroy');
Route::patch('/produk/{product}','ProductsController@update');
Route::get('/produk/{product}/edit','ProductsController@edit');

Route::get('/{product}', 'HomepageController@show');

Route::get('/checkout/{product}','HomepageController@checkout');
Route::patch('/checkout/{product}','TransactionController@store');
Auth::routes();

Route::get('/', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
