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

Route::get('currency/{currencyCode}', 'MainController@changeCurrency')->name('currency');

Route::get('/', 'MainController@index')->name('index');
Route::get('/pizza/{product}', 'MainController@pizza')->name('pizza');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/account', 'AccountController@account')->name('your-account');
    Route::get('/account/{order}', 'AccountController@getOrder')->name('get-order');
    Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
});



Route::group(['prefix' => 'basket'], function(){
    Route::post('/add/{product}', 'BasketController@basketAdd')->name('basket-add');

    Route::group(['middleware' => 'basket_not_empty'], function(){
        Route::get('/', 'BasketController@basket')->name('basket');
        Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
        Route::post('/place', 'BasketController@basketConfirm')->name('basket-confirm');
                        
        Route::post('/remove/{product}', 'BasketController@basketRemove')->name('basket-remove');
    });
});

Route::get('/home', 'HomeController@index')->name('home');