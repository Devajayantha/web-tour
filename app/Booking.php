<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['booking_no', 'id_user', 'telp', 'id_detpaket', 'person', 'departure',
     'amount', 'confirmation', 'payment'];
    public function detpaket(){ 
        return $this->belongsTo('App\detpakets','id_detpaket');
        
    }

}
