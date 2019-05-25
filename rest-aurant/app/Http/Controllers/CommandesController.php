<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    public function getAllCommandes()
    {
        return Commande::all();
    }

    public function getCommande($commandesId)
    {
        return Commande::find($commandesId);
    }
}
