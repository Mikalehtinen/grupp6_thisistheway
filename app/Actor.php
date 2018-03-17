<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  function actors()
  {
    return $this->belongsToMany('App\Movie');
  }

}
?>
