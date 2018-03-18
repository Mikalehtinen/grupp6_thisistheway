<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  function user()
  {
    return $this->belongsTo('App\User');
  }
  function movie()
  {
    return $this->belongsTo('App\Movie');
  }
}
?>
