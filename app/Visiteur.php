<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Visite;
use App\Carte;


class Visiteur extends Model
{
    //protected $fillable=['nom','prenom'];
protected $guarded=[];
 protected $dates=['$date_d'];


 public function visites()
    {
    	$comment = App\Visite::find(1);
        return $this->hasMany('App\Visite');
    }

    public function engins()
    {
    	
        return $this->hasMany(Engin::class);
    }


public function carte()
    {
    	
        return $this->hasOne(Carte::class);
    }
}
