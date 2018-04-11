<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detpakets extends Model
{
    public function subpaket(){ 
    	return $this->belongsTo('App\detpakets','id_subpaket');
    }
    public function paket(){ 
    	return $this->belongsTo('App\detpakets','id_paket');
    }
}
