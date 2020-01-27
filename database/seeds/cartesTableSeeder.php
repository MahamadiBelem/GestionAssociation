<?php

use Illuminate\Database\Seeder;
use App\Carte;
class cartesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Carte::create([
        'numero_cnib'=>request('numero_cnib'),
        'nom_pers'=>request('nom_pers'),
        'prenom_pers'=>request('prenom_pers'),
        'numero_pers'=>request('telephone'),
        'date_d'=>request('date_d'),
        //'visiteur_id'=>1,

//$date_d='date_d'=>request('date_d'),
      ]);
    }
}
