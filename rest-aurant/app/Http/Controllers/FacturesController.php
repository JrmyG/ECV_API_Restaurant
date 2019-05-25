<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Facture;

use Illuminate\Http\Request;

class FacturesController extends Controller
{
    public function getAllFactures()
    {
        return Facture::all();
    }

    public function getFacture($factureId)
    {
        return Facture::find($factureId);
    }
}
