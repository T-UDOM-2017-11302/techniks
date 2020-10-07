<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    
    protected $fillable = ['about_msg','mission','vision'];

    public function core_values(){
    	return $this->hasMany('App\CoreValue');


}
    }

