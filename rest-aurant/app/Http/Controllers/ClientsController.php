<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClientsController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function show($id)
    {
        return Client::find($id);
    }

    public function store()
    {

    }

    public function update($id)
    {
        $client = Client::find($id);

        $client->nom            = Input::get('nom');
        $client->prenom         = Input::get('prenom');
        $client->email          = Input::get('email');
        $client->telephone      = Input::get('telephone');
        $client->save();
    }

    public function destroy ($id)
    {
        $client = Client::find($id);
        $$client->delete();
    }
}
