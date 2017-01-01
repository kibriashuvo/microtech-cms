<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    //
    protected $fillable = [
        'job_title', 'deadline','details',
    ];
}
