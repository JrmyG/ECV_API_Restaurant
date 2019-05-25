<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers;
use App\Client;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function getAllClients()
    {
        return Client::all();
    }

    public function getClient($clientId)
    {
        return Client::find($clientId);
    }
}
