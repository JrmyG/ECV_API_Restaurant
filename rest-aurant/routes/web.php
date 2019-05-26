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

Route::get('/factures/{id}', function($id) {
    return 'Page Facture '. $id;
});

Route::get('/reservations', function() {
    return view('reservations');

});Route::get('/reservations/{id}', function($id) {
    return 'Page Reservations '. $id;
    // Afficher la réservation en fonction de son ID
});

Route::get('/clients', function() {
    return view('clients');
});

Route::get('/clients/{id}', function($id) {
    return 'Page Client '. $id;
});

Route::get('/commandes', function() {
    return view('commandes');
});

Route::get('/commandes/{id}', function($id) {
    return 'Page Commande '. $id;
});

Route::get('/plats', function() {
    return view('plats');
});

Route::get('/plats/{id}', function($id) {
    return 'Page Plat '. $id;
});