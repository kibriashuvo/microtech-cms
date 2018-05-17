<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Pjcategory extends Model
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
                'source' => 'category'
            ]
        ];
    }
	protected $fillable = [
       'category',
    ];



    public function projects(){

    	return $this->belongsToMany('App\Project');
    }


}
