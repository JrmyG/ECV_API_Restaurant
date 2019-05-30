<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Reservations;

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
    }
}
