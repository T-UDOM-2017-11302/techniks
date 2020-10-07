<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title','category','customer_name','start_date','end_date','description','process','demo_url','status'];
}
