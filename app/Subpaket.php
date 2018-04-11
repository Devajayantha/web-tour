<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpaket extends Model
{
    public function detpaket(){ 
    	return $this->hasMany('App\detpakets','id_subpaket','id');
    }
}
