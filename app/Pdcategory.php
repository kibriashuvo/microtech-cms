<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdcategory extends Model
{
    //
	protected $fillable = [
       'category',
    ];


    public function products(){

    	return $this->hasMany('App\Product');
    }

}
