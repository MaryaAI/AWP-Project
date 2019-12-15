<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function roadsters()
  {
      return $this->hasMany('App\Roadster');
  }
}
