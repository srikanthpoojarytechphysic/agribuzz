<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    protected $fillable = ['ad_title','name','date','city','state','contact','email','comments'];
}
