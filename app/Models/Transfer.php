<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
    	'name',
    	'van',
    	'escalade',
    	'suburban',
    	'sprinter',
    ];
    public function city(){
    	return $this->belongsTo(City::class);
    }
}
