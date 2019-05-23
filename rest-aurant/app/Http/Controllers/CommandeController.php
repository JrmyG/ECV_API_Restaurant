<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers\Controller;
use App\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function getAllCommandes()
    {
        return Commandes::all();
    }

    public function getCommande($commandesId)
    {
        return Commandes::find($commandesId);
    }
}
