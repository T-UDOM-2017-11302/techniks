<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    	//Insert fields which are not automatically generated
    protected $fillable = ['name','email','subject','message'];
}
