<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers\Controller;
use App\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getAllClients()
    {
        return Clients::all();
    }

    public function getClient($clientId)
    {
        return Clients::find($clientId);
    }
}
