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

    public function update(Request $request, $id)
    {
        return Commande::where('id',$id)->update($request->all());
    }

    public function destroy ($id)
    {
        $commande = Commande::where('id', $id)->delete();
    }
}
