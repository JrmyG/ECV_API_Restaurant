<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers\Controller;
use App\Facture;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function getAllFactures()
    {
        return Factures::all();
    }

    public function getFacture($factureId)
    {
        return Factures::find($factureId);
    }
}
