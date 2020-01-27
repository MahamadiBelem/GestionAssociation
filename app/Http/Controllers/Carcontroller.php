<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
@param  \Illuminate\Http\Request  

class Carcontroller extends Controller
{
    // a methode that create a car
    public function create (Request $request) {
    	$marque=$request['marque'];
    	$modele=$request['modele'];

    	$car=new car();

    	$car->make=$marque;
    	$car->make=$modele;

    	$car->save();
    	return redirect()->back(); 


    }

    // a methode that show all cars
    public function show(){
    	
    }
}
