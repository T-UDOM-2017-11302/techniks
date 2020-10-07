<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
      protected $fillable = ['title','title_msg','content_msg','phone','email','address'];
}
