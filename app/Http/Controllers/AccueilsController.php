<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilsController extends Controller
{
    public function create(){
    	return view('pages.accueil');
    }
}
