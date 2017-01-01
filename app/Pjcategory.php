<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pjcategory extends Model
{
    //
	protected $fillable = [
       'category',
    ];



    public function projects(){

    	return $this->belongsToMany('App\Project');
    }


}
