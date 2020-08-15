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

Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/pizza/{product}', 'MainController@pizza')->name('pizza');

Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');

Route::post('/basket/add/{product}', 'BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{product}', 'BasketController@basketRemove')->name('basket-remove');