<?php

use Illuminate\Database\Seeder;
use App\Visite;
class VisitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visite::create([
        'service'=>request('service'),
        'motif'=>request('motif'),
        //$carte_id=DB::table('visiteurs')->select('id')->first(),
        //dd($carte_id),
        
        //'visiteur_id'=> request($comment),
        //'visiteur_id'=>request(DB::table('visiteurs')->select('id')->limit(1)->first()),
        
      ]);
    }
}
