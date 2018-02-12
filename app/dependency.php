<?php

namespace App;
use App\ads;

use Illuminate\Container\Container;

class dependency
{
    public $dependency;

    public function __construct($dep)
    {
      $this->dependency = new $dep;
    }
}
