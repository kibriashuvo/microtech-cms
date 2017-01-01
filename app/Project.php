<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

	protected $fillable = [
        'name', 'details','path',
    ];

	protected $cloud = '/project-images/';

	public function pjcategories(){

    	return $this->belongsToMany('App\Pjcategory');
    }

    public function getPathAttribute($path){
        return $this->cloud . $path;

    }


}
