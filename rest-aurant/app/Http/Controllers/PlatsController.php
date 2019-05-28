<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Htpp\Controllers;
use App\Plats;

use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;

class PlatsController extends Controller
{
    // public function index()
    // {
    //     $client = new \GuzzleHttp\Client(['verify' => '../../cacert.pem']);
    //     $request = $client->get('https://www.food2fork.com/api/search?key=2614f93cf8ae5f0d64166e01bb4aab0c&q=chicken%20breast&page=2&count=5');
    //     $response = $request->getBody();
    //     $response = json_decode($response);

    //     // dd($response);

    //     $recettes = $response->recipes;

    //     foreach ( $recettes as $recette )
    //     {
    //         $id = $recette->recipe_id;

    //         $this->getPlat($id);
    //     }
    // }

    // public function show($id)
    // {
    //     $client = new \GuzzleHttp\Client(['verify' => '../../cacert.pem']);
    //     $request = $client->get('https://www.food2fork.com/api/get?key=2614f93cf8ae5f0d64166e01bb4aab0c&rId='.$id);
    //     $response = $request->getBody();
    //     $response = json_decode($response);

    //     $name = $response->recipe->title;
    //     $image = $response->recipe->image_url;
    //     $ingredients = $response->recipe->ingredients;

    //     var_dump($name);
    //     var_dump($image);

    //     foreach( $ingredients as $ingredient )
    //     {
    //         var_dump($ingredient);
    //     }
    //     var_dump("<br>");
    // }

    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => '../../cacert.pem']);
        $request = $client->get('https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood');
        $response = $request->getBody();
        $response = json_decode($response);
        // dd($response);

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
        // dd($response);

        $name   = $response->strMeal;
        $image  = $response->strMealThumb;
        $area   = $response->strArea;

        var_dump($name);
        var_dump($image);
        var_dump($area);

        for( $i = 1; $i <= 20; $i++ )
        {
            $ingredient     = 'strIngredient'.$i;
            $ingredients    = $response->$ingredient;
            if ($ingredients != "")
            {
                var_dump($ingredients);
            }
        }
        echo('<br>');
    }
}
