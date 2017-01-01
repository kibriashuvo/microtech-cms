<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //


	protected $fillable = [
        'path',
    ];

    protected $cloud = '/gallery-images/';

    public function imageable(){

    	return $this->morphTo();
    }

    public function getPathAttribute($path){
        return $this->cloud . $path;

    }
    



}
