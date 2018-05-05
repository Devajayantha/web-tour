<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messageuser extends Model
{
    protected $table = 'message_user';
    
    protected $fillable = ['id_user','message'
];
    public function user(){
        return $this->belogsTo('App\User','id_user');
    }
}
