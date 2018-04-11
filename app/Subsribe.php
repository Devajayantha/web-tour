<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsribe extends Model
{
    protected $table = 'email';

    protected $fillable =[
        'email'
    ];
}
