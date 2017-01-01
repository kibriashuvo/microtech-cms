<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    //

    protected $fillable = [
        'name', 'address','email', 'post','cv',
    ];
}
