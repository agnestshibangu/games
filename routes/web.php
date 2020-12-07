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



Route::get('/authentification', function () {
    return view('authentification');
});


Route::get('/catalog', function () {
    return view('catalog');
});


Route::get('/shopping-cart', function () {
    return view('shopping-cart');
});


Route::get('/order-details', function () {
    return view('order-details');
});

Route::get('/mon-compte', function () {
    return view('mon_compte');
});

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/gaming', function () {
    return view('gaming');
});

Route::get('/retro', function () {
    return view('retro');
});

Route::get('/culture_geek', function () {
    return view('culture_geek');
});

Route::get('/tous_nos_produits', function () {
    return view('tous_nos_produits');
});
