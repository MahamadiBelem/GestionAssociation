<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{



   public function create() {
    return view('pages.modal');
//espace dessai pour la fonction date
    
   
}

 public function validite( Request ){
 	$entree $request+10;
 	$date=new date('d/m/y');
 	@if ($date>$entree) {
 		return('<p>carte invalide</p>');
 	}
 	@else
 	return('infos enregistrer avec succes');
 }  

}
