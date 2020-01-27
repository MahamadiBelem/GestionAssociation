<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('numero_cnib');
            $table->text('nom_pers');
            $table->text('prenom_pers');
            $table->text('numero_pers');
            $table->date('date_d');
            $table->integer('visiteur_id')->unsigned();
            $table->foreign('visiteur_id')->references('id')->on('visiteurs');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartes');
    }
}
