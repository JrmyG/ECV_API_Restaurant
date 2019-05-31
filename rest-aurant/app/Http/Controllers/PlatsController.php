<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Htpp\Controllers;
use App\Plats;

use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;

class PlatsController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => '../../cacert.pem']);
        $request = $client->get('https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood');
        $response = $request->getBody();
        $response = json_decode($response);

        $recettes = $response->meals;

        foreach ( $recettes as $recette )
        {
            $id = $recette->idMeal;

            $this->show($id);
        }
    }

    public function show($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => '../../cacert.pem']);
        $request = $client->get('https://www.themealdb.com/api/json/v1/1/lookup.php?i='.$id);
        $response = $request->getBody();
        $response = json_decode($response);
        $response = $response->meals[0];

        $name   = $response->strMeal;
        $image  = $response->strMealThumb;
        $area   = $response->strArea;

        // var_dump($name);
        // var_dump($image);
        // var_dump($area);

        for( $i = 1; $i <= 20; $i++ )
        {
            $ingredient     = 'strIngredient'.$i;
            $ingredients    = $response->$ingredient;
            if ($ingredients != "")
            {
                // var_dump($ingredients);
            }
        }
        echo('<br>');

        $this->store($id);
    }

    public function store($id)
    {
        $plats = Plats::query()
            ->where('plat_id', 'LIKE', $id)
            ->get();

        if($plats == '[]')
        {
            $plat = new Plats();

            $plat->plat_id = $id;
            $plat->save();

            return($plat);
        }
    }
}
