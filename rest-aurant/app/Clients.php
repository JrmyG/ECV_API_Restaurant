<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('Id_client');
            $table->increments('Id_réservation');
            $table->increments('Id_commande');

            $table->string('Nom');
            $table->string('Prenom');

            $table->string('E-mail')->unique();
            $table->string('Telephone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('clients');
    }



}
