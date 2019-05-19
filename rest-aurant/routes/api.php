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

Route::middleware('auth:api')->get('/factures', function (Request $request) {
    return $request->factures();
});

Route::middleware('auth:api')->get('/reservations', function (Request $request) {
    return $request->reservations();

});Route::middleware('auth:api')->get('/clients', function (Request $request) {
    return $request->clients();

});Route::middleware('auth:api')->get('/commandes', function (Request $request) {
    return $request->commandes();

});Route::middleware('auth:api')->get('/plats', function (Request $request) {
    return $request->plats();
});