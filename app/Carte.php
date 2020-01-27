<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Visiteur;
class Carte extends Model
{
    protected $guarded=[];
    public function visiteur(){
    	return $this->belongsTo(Visiteur::class);
    }
    
}
