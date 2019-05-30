<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Reservations;
use App\Facture;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FacturesController extends Controller
{
    public function index()
    {
        return Facture::all();
    }

    public function show($id)
    {
        return Facture::find($id);
    }

    public function store(Request $request)
    {
        $facture = new Facture();

        $facture->Date_Heure        = $request->Date_Heure;
        $facture->Etat              = $request->Etat;
        $facture->save();

        return($facture);
    }

    public function update($id)
    {
        $facture = Facture::find($id);

        $facture->date_heure        = Input::get('date_heure');
        $facture->etat              = Input::get('etat');
        $facture->save();

        return($facture);
    }

    public function destroy($id)
    {
        $facture = Facture::find($id);
        $facture->delete();
    }


}
