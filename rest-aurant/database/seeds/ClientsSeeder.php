<?php

use Illuminate\Database\Seeder;
use app\Clients;
class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('Clients')->insert([ //,


                'nom' => $faker->name,
                'prenom' => $faker->lastname,

                'E-mail' => $faker->unique()->email,
                'Telephone' => $faker->phoneNumber,
                'Id_commande'=> $faker->randomDigit,
                'Id_Réservation' => $faker->randomDigit,

            ]);
        }
    }
}
