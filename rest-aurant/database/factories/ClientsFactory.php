<?


use Faker\Generator as Faker;

$factory->define(App\Clients::class, function (Faker $faker) {
    return [

                'Nom' => $faker->Nom,
                'Prenom' => $faker->firstname,
                'E-mail' => $faker->unique()->email,
                'Telephone' => $faker->phonenumber,
                'Id_Commande' => $faker->autoincrement(),
    ];
});



?>
