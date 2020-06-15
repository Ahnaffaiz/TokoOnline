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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('admin')
    ->name('admin');
// Route::get('/admin', 'DashboardController@index');
// Route::get('/produk', 'ProductsController@index');
// Route::get('/produk/create', 'ProductsController@create');
// Route::get('/produk/{product}', 'ProductsController@show');
// Route::post('/produk','ProductsController@store');
