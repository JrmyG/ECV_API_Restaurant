<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * GET ALL ITEMS OF A TABLE
 */

Route::get('factures','FacturesController@getAllFactures');
Route::get('reservations', 'ReservationsController@getAllReservations');
Route::get('clients', 'ClientsController@getAllClients');
Route::get('commandes', 'CommandesController@getAllCommandes');
Route::get('plats', 'PlatsController@getAllPlats');

/**
 * GET A SINGLE ITEM BY HIS ID
 */

Route::get('factures/{id}','FacturesController@getFacture');
Route::get('reservations{id}', 'ReservationsController@getReservation');
Route::get('clients/{id}', 'ClientsController@getClient');
Route::get('commandes/{id}', 'CommandesController@getCommande');
Route::get('plats/{id}', 'PlatsController@getPlat');

/**
 * ADD AN ITEM
 */

Route::post('facture', 'FacturesController@addFacture');
Route::post('reservation', 'ReservationsController@addReservation');
Route::post('client', 'ClientsController@addClient');
Route::post('commande', 'CommandesController@addCommande');

/**
 * UPDATE AN ITEM AN ITEM
 */

Route::put('factures/{id}', 'FacturesController@updateFacture');
Route::put('reservations/{id}', 'ReservationsController@updateReservation');
Route::put('clients/{id}', 'ClientsController@updateClient');
Route::put('commandes/{id}', 'CommandesController@updateCommande');

/**
 * DELETE AN ITEM BY HIS ID
 */

Route::delete('factures/{id}', 'FacturesController@deleteFacture');
Route::delete('reservations/{id}', 'ReservationsController@deleteReservation');
Route::delete('clients/{id}', 'ClientsController@deleteClient');
Route::delete('commandes/{id}', 'CommandesController@deleteCommande');
