<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Commande;

use Illuminate\Http\Request;

class CommandesController extends Controller
{
    public function index()
    {
        return Commande::all();
    }

    public function show($id)
    {
        return Commande::find($id);
    }

    public function store()
    {

        //return($commande)
    }

    public function update($id)
    {
        // $commande = Commande::find($id);

        //return($commande)
    }

    public function destroy ($id)
    {
        $commande = Commande::find($id);
        $commande->delete();
    }
}
