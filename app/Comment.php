<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public $table="comments";
  public function roadster()
  {
      return $this->belongsTo('App\Roadster');
  }
}
