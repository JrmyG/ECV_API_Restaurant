<?php

use Illuminate\Database\Seeder;
use App\Clients;
class DatabaseSeeder extends Seeder
{

    public function run()
    {

        $this->call('ClientsSeeder');
        $this->call('Facturesseeder');
        // $this->call('ReservationsSeeder');
        }
    }

