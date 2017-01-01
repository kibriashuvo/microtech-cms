<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
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
