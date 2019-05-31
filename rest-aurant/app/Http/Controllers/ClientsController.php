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
        $client->save();
        
        return($client);
    }

    public function update(Request $request, $id)
    {
        return Clients::where('id',$id)->update($request->all());
    }

    public function destroy ($id)
    {
        $client = Clients::where('id', $id)->delete();

        return('Client '.$id.' supprimé');

    }
}
