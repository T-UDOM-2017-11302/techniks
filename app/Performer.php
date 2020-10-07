<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    protected $fillable = ['performer_name','performer_professional','image','event_id'];
}
