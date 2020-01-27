<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteursController extends Controller
{
    
//return 'effectuer avec succes';
	
  public function store()
    {

      Visiteurs::create([
        'nom'=>request('nom'),
        'prenom'=>request('prenom'),
        'sexe'=>request('sexe'),
        'telrphone'=>request('telephone'),
      ]);

      Visite::create([
        'service'=>request('service'),
        'motif'=>request('motif'),
      ]);

      Carte::create([
        'numero_cnib'=>request('numero_cnib'),
        'nom_pers'=>request('nom_pers'),
        'prenom_pers'=>request('prenom_pers'),
        'numero_pers'=>request('telephone'),
        'date_d'=>request('date_d'),
      ]);

      /*cartes::create([
        'nom'=>request('nom'),
        'prenom'=>request('prenom'),
        'sexe'=>request('sexe'),
        'telrphone'=>request('telephone'),
      ]);
        //$nom = $request->input('nom');
        //$prenom = $request->input('prenom');
  //return view('pages.visiteur');

$visiteur= new Visiteur;
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
return view('pages.visiteur');
    } 		 

   
}
