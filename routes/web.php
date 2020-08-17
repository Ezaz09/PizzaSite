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
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);


Route::group(['middleware' => 'auth'], function() {
    Route::get('/account', 'AccountController@account')->name('your-account');
    Route::get('/account/{order}', 'AccountController@getOrder')->name('get-order');
    Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
});


Route::get('/', 'MainController@index')->name('index');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/pizza/{product}', 'MainController@pizza')->name('pizza');

Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/place', 'BasketController@basketPlace')->name('basket-place');
Route::post('/basket/place', 'BasketController@basketConfirm')->name('basket-confirm');

Route::post('/basket/add/{product}', 'BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{product}', 'BasketController@basketRemove')->name('basket-remove');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
