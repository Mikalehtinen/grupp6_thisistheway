<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
      $actors = Actor::get();
      return view('actors/index', ['actors' => $actors]);
    }

    public function show(Actor $actor)
    {
        return view('actors/show', ['actor' => $actor]);
    }
}
