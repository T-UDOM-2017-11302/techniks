<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = ['video','header_top','header_msg','welcome_header','welcome_msg'];
}
