<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoreValue extends Model
{
     protected $fillable = ['title','description','about_us_id'];

    public function about_us(){
    	return $this->belongsTo('App\AboutUs');
    }
}
