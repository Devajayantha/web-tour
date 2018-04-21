<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InputRating extends Model
{
    protected $table = 'ratings';
    
    protected $fillable = ['id_user',
    'stars','message'
];
    public function user(){
        return $this->belogsTo('App\User','id_user');
    }
}
