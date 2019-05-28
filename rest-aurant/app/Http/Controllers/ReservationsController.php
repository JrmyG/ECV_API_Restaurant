<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Reservation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ReservationsController extends Controller
{
    public function index()
    {
        return Reservation::all();
    }

    public function show($id)
    {
        return Reservation::find($id);
    }

    public function store()
    {

    }

    public function update($id)
    {
        $reservation = Reservation::find($id);
        $reservation->date_heure    = Input::get('date_heure');
        $reservation->save();
    }

    public function destroy ($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
    }
}
