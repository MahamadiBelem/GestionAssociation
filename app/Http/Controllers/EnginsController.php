<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;
use App\Engin;

//use App\Http\Controllers\Engin;
class EnginsController extends Controller
{
    public function create () {
    return view('pages.Engin');
				}

				 	public function store()
    {


     $data=array( 'immatricule'=>request('immatricule'),
        'marque'=>request('marque'),
        'couleur'=>request('couleur'),);
     $last_id=DB::table('engins')->insertGetId($data);
      
      $comment = Engin::find($last_id)->id;
 



Flashy::message('enregistre avec succes!');
//return view('pages.visiteur');
 return redirect('Engin');

    }
}
