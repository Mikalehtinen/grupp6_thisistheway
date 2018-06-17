<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
  function movie()
  {
    return $this->belongsTo('App\Movie');
  }
}
?>
