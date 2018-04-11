<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detpakets extends Model
{
    public function subpaket(){ 
    	return $this->belongsTo('App\Subpaket','id_subpaket');
    }
    public function paket(){ 
    	return $this->belongsTo('App\Paket','id_paket');
    }
    public function booking(){ 
    	return $this->hasMany('App\Booking','id_detpaket','id');
    }
}
