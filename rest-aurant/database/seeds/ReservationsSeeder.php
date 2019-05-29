<?php

use Illuminate\Database\Seeder;
use App\Reservations;
class ReservationsSeeder extends Seeder
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
            DB::table('reservations')->insert([ //,


                'id_reservation' => $faker->randomDigit,
                'date_heure' => $faker->date,

                'Id_client'=> $faker->randomDigit,

            ]);
        }
    }
}
