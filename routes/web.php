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
    return view('index');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/pizza/pepperoni', function () {
    return view('pepperoni');
});

Route::get('/pizza/margarita', function () {
    return view('margarita');
});

Route::get('/pizza/4_cheese', function () {
    return view('4_cheese');
});

Route::get('/pizza/carbonara', function () {
    return view('carbonara');
});

Route::get('/pizza/crudo', function () {
    return view('crudo');
});

Route::get('/pizza/neapolitano', function () {
    return view('neapolitano');
});