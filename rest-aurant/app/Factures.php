<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
     public function up()
    {
        Schema::create('Factures', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Date_Heure');
            $table->increments('Id_reservation');
            $table->boolean('Etat');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('factures');
    }

}
