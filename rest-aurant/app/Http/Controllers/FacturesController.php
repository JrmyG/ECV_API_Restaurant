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

    public function update(Request $request, $id)
    {
        return Facture::where('id',$id)->update($request->all());
    }

    public function destroy($id)
    {
        $facture = Facture::where('id', $id)->delete();
    }
}
