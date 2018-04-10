<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpaket extends Model
{
    public function paket(){ 
    	return $this->belongsTo('App\Paket','id_subpaket');
    }
}
