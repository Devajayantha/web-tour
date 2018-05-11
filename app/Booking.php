<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
\Carbon\Carbon::setToStringFormat('l jS F Y');
class Booking extends Model
{
    protected $fillable = ['booking_no', 'id_user', 'telp', 'id_detpaket', 'person', 'departure',
     'amount', 'confirmation', 'payment', 'stars', 'message', 'confirm_rating', 'created_at'];
    public function detpaket(){ 
        return $this->belongsTo('App\detpakets','id_detpaket');   
    }
    protected $dates =[
        'departure','created_at'
    ];

}
