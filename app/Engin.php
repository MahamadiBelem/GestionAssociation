<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Visiteur;
class Engin extends Model
{
	protected $guarded=[];
    public function visiteurs()
    {
        return $this->belongsTo('App\Visiteur');
        return $this->belongsTo(Visiteur::class);
    }
}
