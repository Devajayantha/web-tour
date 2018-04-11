<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    public function detpaket(){ 
    	return $this->hasMany('App\detpakets','id_paket', 'id');
    }

}

