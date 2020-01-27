<?php

namespace App\Http\Controllers;
//namespace App;
use Carbon\Carbon;
use App\Visiteur;
use App\Visite;
use App\Carte;
use Illuminate\Http\Request;
//use Illuminate\Database\Eloquent\Model\Visiteur;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;



class VisiteurController extends Controller
{



protected $dates=['$date_d','$dte','$now'];
    public function create(){
    	//$visiteur= new App\Visiteur;
//$visiteur->nom=request('nom');
//$visiteur->prenom=request('prenom');
//$visiteur->save();
    	//return view('post.create');
return view('pages.visiteur');       
   	}



   	public function store()
    {

      //$carte_id=DB::table('cartes')->select('id')->get();
        
        //dd($visiteur_id);
//valide();
      //$comment = mysql_insert_id();

     $data=array( 'nom'=>request('nom'),
        'prenom'=>request('prenom'),
        'sexe'=>request('sexe'),);
     $last_id=DB::table('visiteurs')->insertGetId($data);
      
      //Visiteur::create([

        //'nom'=>request('nom'),
        //'prenom'=>request('prenom'),
        //'sexe'=>request('sexe'),
        //'numero_cnib'=>request('numero_cnib'),
        //$visiteur_id=DB::table('visiteurs')->select('id')->get(),
        //$carte_id=DB::table('cartes')->select('id')->get(),
        //$users = DB::table('cartes')->where('id', '=', 'id.visiteurs')->get(),
        //'carte_id'=>request(DB::table('visites')->select('service')->where('id','=','visiteurs.id')->get()),
        //'visite_id'=>DB::table('visites')->select('id')->where('id','=','$visiteur_id')->get(),
        //'engin_id'=>DB::table('engins')->select('id')->where('id','=','$visiteur_id')->get(),
        //'engin_id'=>request(DB::table('engins')->join('visiteurs', 'engins.id', '=', 'visiteurs.id')->select('engins.id')->get()),
        //'carte_id'=>request(DB::table('cartes')->join('visiteurs', 'cartes.id', '=', 'visiteurs.id')->select('cartes.id')->get()),
        //'visite_id'=>request(DB::table('visites')->join('visiteurs', 'visites.id', '=', 'visiteurs.id')->select('visites.id')->get()),
      
       //'visite_id'=>DB::table('visites')->select('id')->first(),
       //'engin_id'=>DB::table('engins')->select('id')->first(),
        //'engin_id'=>DB::table('engins')->select('id')->get(),
       //dd($carte_id),
        
 //dd($comment),
      //]);
      $comment = Visiteur::find($last_id)->id;
 //$comment = Visiteur::find(2)->id;
 
     /* Visite::create([
        'service'=>request('service'),
        'motif'=>request('motif'),
        //$carte_id=DB::table('visiteurs')->select('id')->first(),
        //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::'visiteur_id'=>$comment,
        //$carte_id=DB::table('visiteurs')->select('id')->first(),
        //dd($carte_id),
        
        //'visiteur_id'=> request($comment),
        //'visiteur_id'=>request(DB::table('visiteurs')->select('id')->limit(1)->first()),
        
      ]);  */

      /*cartes::create([
        'nom'=>request('nom'),
        'prenom'=>request('prenom'),
        'sexe'=>request('sexe'),
        'telrphone'=>request('telephone'),
      ]);
        //$nom = $request->input('nom');
        //$prenom = $request->input('prenom');
  //return view('pages.visiteur');


$visiteur->nom=request('nom');
$visiteur->prenom=request('prenom');
$visiteur->sexe=request('sexe');
//$visiteur->date_d=request('date_d');
$visiteur->telrphone=request('telephone');
//$visiteur->carte_id=request('carte_id');
//$visiteur->visite=request('visite_id');
//$visiteur->engin_id=request('engin_id');
$visiteur->service=request('service');
$visiteur->motif=request('motif');
$visiteur->save();*/

//dd($comment);
/*:::::::::::::::::::::::::::::::::::::::::Carte::create([
        'numero_cnib'=>request('numero_cnib'),
        'nom_pers'=>request('nom_pers'),
        'prenom_pers'=>request('prenom_pers'),
        'numero_pers'=>request('telephone'),
        'date_d'=>request('date_d'),
        'visiteur_id'=>$comment,

//$date_d='date_d'=>request('date_d'),
      ]);
//la fonction de controle de la validite de la carte
/**/
//<?php
//use Carbon\Carbon;

 



Flashy::message('enregistre avec succes!');
//return view('pages.visiteur');
 return redirect('visiteur');

    }

    
    //valide(request('date_d'));
}

