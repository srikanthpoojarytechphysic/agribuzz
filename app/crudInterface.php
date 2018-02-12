<?php

namespace App;


/**
 *
 */
interface crudInterface
{
  public function fetch($type);

  public function create(array $attributes);
  
}
