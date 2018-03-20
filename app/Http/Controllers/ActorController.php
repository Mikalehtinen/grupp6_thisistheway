<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Movie;
use Illuminate\Http\Request;

class ActorController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['index', 'show']]);
    }
    public function index()
    {
      $actors = Actor::get();
      return view('actors/index');
    }

    public function create()
    {
      //refererar till create.blade.php, skickar det formuläret till store nedan.
        return view('actors/create');
    }

    public function store(Request $request)
    {
        $actor_name = $request->input('name');
        $actor_description = $request->input('description');

        $actor = new Actor();
        $actor->name = $actor_name;
        $actor->description = $actor_description;
        $actor->save();
        return redirect()->route('actors.index');
    }

    public function show(Actor $actor)
    {
        return view('actors/show');
    }

    public function edit(Actor $actor)
    {
      return view('actors/edit', ['actor' => $actor]);
    }

    public function update(Request $request, Actor $actor)
    {
      $actor_name = $request->input('name');
      $actor_description = $request->input('description');

      $actor->name = $actor_name;
      $actor->description = $actor_description;
      $actor->save();

      return redirect()->route('actors.show', ['actor' => $actor->id]);
    }
}
