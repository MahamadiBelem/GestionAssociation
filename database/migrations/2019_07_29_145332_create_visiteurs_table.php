<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nom');
            $table->text('prenom');
            $table->text('sexe');
            
            //$table->integer('telrphone');
            //$table->integer('carte_id');
            //$table->unsignedBigInteger('carte_id');
            //$table->foreign('carte_id')->references('id')->on('cartes');
            /*$table->unsignedBigInteger('visite_id');
            $table->foreign('visite_id')->references('id')->on('visites');
            $table->unsignedBigInteger('engin_id');
            $table->foreign('engin_id')->references('id')->on('engins');*/
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteurs');
    }
}
