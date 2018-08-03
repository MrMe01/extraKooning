<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    protected $fillable = [
    	'subtitle',
    	'description',
    	'image',
    	'video',
    	'type',
    ];
    public function blog(){
    	return $this->belongsTo(Blog::class);
    }
}
