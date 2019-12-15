<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadster extends Model
{
  public function category()
  {
      return $this->belongsTo('App\Category');
  }


  public function ratings()
  {
      return $this->hasMany('App\Rating');
  }

  public function rate()
  {
      return $this->ratings->isNotEmpty() ? $this->ratings()->sum('value') / $this->ratings()->count() : 0;
  }
}
