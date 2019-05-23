<?php

namespace App\Http\Controllers;
use App\Htpp\Controllers\Controller;
use App\Plats;

use Illuminate\Http\Request;

class PlatsController extends Controller
{
    public function getAllPlats()
    {
        return Plats::all();
    }

    public function getPlat($platId)
    {
        return Plats::find($platId);
    }
}
