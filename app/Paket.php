<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    public function booking(){ 
    	return $this->belongsTo('App\Booking','id_paket');
    }
    public function detpaket(){ 
    	return $this->hasMany('App\detpakets','id_paket', 'id');
    }

}

