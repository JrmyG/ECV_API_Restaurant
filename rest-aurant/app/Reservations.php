<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    public function up()
    {
        Schema::create('Reservations', function (Blueprint $table) {
            $table->increments('id_reservation');
            $table->string('Date_Heure');
            $table->increments('Id_client');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('Reservations');
    }
}
