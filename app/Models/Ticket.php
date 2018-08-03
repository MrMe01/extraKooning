<?php

namespace App\Models;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
    	'name',
    	'image',
    	'description',
    	'content',
    	'adult',
    	'child',
    ];
    public function activities(){
    	return $this->belongsTo(Activity::class);
    }
}
