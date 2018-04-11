<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function detpaket(){ 
    	return $this->belongsTo('App\detpakets','id_detpaket');
    }
}
