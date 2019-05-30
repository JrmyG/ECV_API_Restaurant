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

Route::get('factures','FacturesController@index');
Route::get('reservations', 'ReservationsController@index');
Route::get('clients', 'ClientsController@index');
Route::get('commandes', 'CommandesController@index');
Route::get('plats', 'PlatsController@index');

/**
 * GET A SINGLE ITEM BY HIS ID
 */

Route::get('factures/{id}','FacturesController@show');
Route::get('reservations{id}', 'ReservationsController@show');
Route::get('clients/{id}', 'ClientsController@show');
Route::get('commandes/{id}', 'CommandesController@show');
Route::get('plats/{id}', 'PlatsController@show');

/**
 * ADD AN ITEM
 */

Route::post('facture', 'FacturesController@store');
Route::post('reservation', 'ReservationsController@store');
Route::post('client', 'ClientsController@store');
Route::post('commande', 'CommandesController@store');

/**
 * UPDATE AN ITEM AN ITEM
 */

Route::put('factures/{id}', 'FacturesController@update');
Route::put('reservations/{id}', 'ReservationsController@update');
Route::put('clients/{id}', 'ClientsController@update');
Route::put('commandes/{id}', 'CommandesController@update');

/**
 * DELETE AN ITEM BY HIS ID
 */

Route::delete('factures/delete/{id}', 'FacturesController@destroy');
Route::delete('reservations/delete/{id}', 'ReservationsController@destroy');
Route::delete('clients/delete/{id}', 'ClientsController@destroy');
Route::delete('commandes/delete/{id}', 'CommandesController@destroy');

