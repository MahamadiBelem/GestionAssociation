<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Visiteur;
class Visite extends Model
{
    protected $guarded=[];
    public function visiteurs()
    {
        //return $this->belongsTo('App\Visiteur');
        return $this->belongsTo(Visiteur::class);
    }
}
