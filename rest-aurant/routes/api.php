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

Route::get('factures','FactureController@getAllFactures');
Route::get('factures/{id}','FactureController@getFacture');

Route::get('reservations', 'ReservationController@getAllReservations');
Route::get('reservations{id}', 'ReservationController@getReservation');

Route::get('clients', 'ClientsController@getAllClients');
Route::get('clients/{id}', 'ClientsController@getClient');

Route::get('commandes', 'CommandesController@getAllCommandes');
Route::get('commandes/{id}', 'CommandesController@getCommande');

Route::get('plats', 'PlatsController@getAllPlats');
Route::get('plats/{id}', 'PlatsController@getPlat');

Route::post('factures', 'FactureController@addFacture');
Route::post('reservations', 'ReservationController@addReservation');
Route::post('clients', 'ClientsController@addClient');
Route::post('commande', 'CommandeController@addCommande');

