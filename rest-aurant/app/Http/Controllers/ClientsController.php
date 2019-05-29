<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Clients;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClientsController extends Controller
{
    public function index()
    {
        return Clients::all();
    }

    public function show($id)
    {
        return Clients::find($id);
    }

    public function store(Request $request)
    {
        $client = new Clients();

        $client->nom        = $request->nom;
        $client->prenom     = $request->prenom;
        $client->mail      = $request->mail;
        $client->telephone  = $request->telephone;
        $client->save();
        
        return($client);
    }

    public function update(Request $request, $id)
    {
        $client = Clients::find($id);

        $client->nom        = $request->nom;
        $client->prenom     = $request->prenom;
        $client->mail      = $request->mail;
        $client->telephone  = $request->telephone;
        $client->save();

        return($client);
    }

    public function destroy ($id)
    {
        $client = Clients::find($id);
        $$client->delete();
    }
}
