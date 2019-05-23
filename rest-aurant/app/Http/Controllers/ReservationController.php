<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers\Controller;
use App\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function getAllReservations()
    {
        return Reservation::all();
    }

    public function getReservation($reservationId)
    {
        return Reservation::find($reservationId);
    }

    public function addReservation($)
}
