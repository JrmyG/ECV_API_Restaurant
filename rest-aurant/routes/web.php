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
});

Route::get('/factures', function() {
    return view('factures');
});

Route::get('/reservations', function() {
    return view('reservations');
});

Route::get('/clients', function() {
    return view('clients');
});

Route::get('/commandes', function() {
    return view('commandes');
});

Route::get('/plats', function() {
    return view('plats');
});