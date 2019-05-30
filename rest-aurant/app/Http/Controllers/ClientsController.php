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

        $client->Nom            = $request->Nom;
        $client->Prenom         = $request->Prenom;
        $client->email          = $request->email;
        $client->Telephone      = $request->Telephone;
        $client->updated_at     = date("Y-m-d h:i:s");
        $client->created_at     = date("Y-m-d h:i:s");
        $client->save();
        
        return($client);
    }

    public function update(Request $request, $id)
    {
        $client = Clients::find($id);

        //return($request);

        $client->Nom            = $request->Nom;
        $client->Prenom         = $request->Prenom;
        $client->email          = $request->email;
        $client->Telephone      = $request->Telephone;
        $client->Updated_at     = date("Y-m-d h:i:s");
        $client->save();

        return $client;
        //return redirect('/contacts')->with('success', 'Contact updated!');
    }

    public function destroy ($id)
    {
        $client = Clients::find($id);
        $$client->delete();
    }
}
