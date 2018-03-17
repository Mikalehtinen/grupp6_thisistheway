<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  function genres()
  {
    return $this->belongsToMany('App\Genre');
  }
  function actors()
  {
    return $this->belongsToMany('App\Actor');
  }
  function director()
  {
    return $this->belongsTo('App\Director');
  }
}
?>
