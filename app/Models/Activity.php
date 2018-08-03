<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	 protected $fillable = [
    	'name',
    	'description',
    	'map',
    	'slogan',
    	'image',
    	'location',
    	'coordinates',
    	'background',
    	'terms',
    ];
    public function categories(){
    	return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName()
	{
    	return 'name';
	}
}
