<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_operation extends Model
{
    protected $fillable = ['work_info','work_days','inform_us','phone','email','address'];
}
