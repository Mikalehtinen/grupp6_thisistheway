<?php

namespace App\Http\Controllers;

use Session;
use App\Actor;
use App\Movie;



// USE APP ACTOR_MOVIE?!





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
      return view('actors/index' , ['actors' => $actors]);

    }

    public function create(Movie $movie)
    {
      //refererar till create.blade.php, skickar det formuläret till store nedan.
        return view('actors.create', ['movie' => $movie, 'movies' => Movie::Get()]);
    }

    public function store(Request $request)
    {
        $actor_name = $request->input('name');
        $actor_description = $request->input('description');
        // $actor_movie = $request->input('movies');

        $actor = new Actor();
        $actor->name = $actor_name;
        $actor->description = $actor_description;
        // $actor->movies = $actor_movie; 
        $actor->save();

        $actor = $actor->id;
        // $movie->actors()->attach($actor);
        Session::flash('flash_message', 'actor added!');

        return redirect()->route('movies.show', ['id' => $request->input('movie_id')]);
    }

    public function show(Actor $actor)
    {
        return view('actors/show' , ['actor' => $actor]);
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
