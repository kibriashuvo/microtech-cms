<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Product extends Model
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
        'name', 'details','pdcategory_id','path',
    ];

    protected $cloud = '/product-images/';

    public function images(){

    	return $this->morphMany('App\Image','imageable');
    }

    public function pdcategory(){

    	return $this->belongsTo('App\Pdcategory');
    }

    public function getPathAttribute($path){
        return $this->cloud . $path;

    }
    


}
