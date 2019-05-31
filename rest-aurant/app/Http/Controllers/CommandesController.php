<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Commande;
use App\Clients;

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

    public function store(Request $request)
    {
        $commande = new Commande();

        $commande->id_client    = $request->id_client;
        $commande->id_plat      = $request->id_plat;
        $commande->save();

        $client = Clients::where('id',$request->id_client)->update(['id_commande' => $commande->id]);

        return $commande;
    }

    public function update(Request $request, $id)
    {
        return Commande::where('id',$id)->update($request->all());
    }

    public function destroy ($id)
    {
        $commande = Commande::where('id', $id)->delete();

        return('Commande '.$id.' supprimée');
    }
}
