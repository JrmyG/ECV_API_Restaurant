<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Reservations;
use App\Facture;
use App\Clients;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ReservationsController extends Controller
{
    public function index()
    {
        return Reservations::all();
    }

    public function show($id)
    {
        return Reservations::find($id);
    }

    public function store(Request $request)
    {
        $reservation = new Reservations();
        
        $reservation->Date_Heure    = $request->Date_Heure;
        $reservation->id_client     = $request->id_client;
        $reservation->save();

        $client = Clients::where('id',$request->id_client)->update(['id_reservation' => $reservation->id]);

        $facture = new Facture();
        $facture->Date_Heure         = $request->Date_Heure;
        $facture->ID_Reservation     = $reservation->id;
        $facture->save();

        $reservation->id_facture     = $facture->id;
        $reservation->save();

        return($reservation);
    }

    public function update(Requerst $request, $id)
    {
        return Reservations::where('id',$id)->update($request->all());
    }

    public function destroy ($id)
    {
        $reservation = Reservations::where('id', $id)->delete();
    
        return('Réservation '.$id.' supprimée');
    }
}
