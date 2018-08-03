<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =[
    	'title',
    	'location',
    	'image',
    	'description',
    	'views',
    ];
    public function city(){
    	return $this->belongsTo(City::class);
    }
}
