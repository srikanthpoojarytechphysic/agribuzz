<?php

namespace App;

use App\dependency;

use Illuminate\Container\Container;

use Illuminate\Database\Eloquent\Model;

use App\ads;

class crudHelper
{
   public function create($model,array $attributes)
   {
     $data = new $model;

     return $data;
   }
}
