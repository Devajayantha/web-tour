<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function paket(){ 
    	return $this->hasMany('App\Paket','id_paket', 'id');
    }
}
