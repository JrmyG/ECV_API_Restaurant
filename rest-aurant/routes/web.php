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
    return 'Page Factures';
});

Route::get('/factures/{id}', function($id) {
    return 'Page Facture '. $id;
});

Route::get('/reservations', function() {
    return 'Page Reservations';

});Route::get('/reservations/{id}', function($id) {
    return 'Page Reservations '. $id;
    // Afficher la réservation en fonction de son ID
});

Route::get('/clients', function() {
    return 'Page Clients';
});

Route::get('/clients/{id}', function($id) {
    return 'Page Client '. $id;
});

Route::get('/commandes', function() {
    return 'Page Commandes';
});

Route::get('/commandes/{id}', function($id) {
    return 'Page Commande '. $id;
});

Route::get('/plats', function() {
    return 'Page Plats';
});

Route::get('/plats/{id}', function($id) {
    return 'Page Plat '. $id;
});