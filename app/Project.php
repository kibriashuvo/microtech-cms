<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    //
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

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
