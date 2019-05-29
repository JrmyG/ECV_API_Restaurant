<?php

use Illuminate\Database\Seeder;
use app\Factures;
class Facturesseeder extends Seeder
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
            DB::table('factures')->insert([ //,


                'Etat' => $faker->word,
                'Date_Heure' => $faker->date,

                'ID_Reservation' => $faker->randomDigit,

            ]);
        }
    }
}
