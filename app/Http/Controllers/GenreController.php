<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['index', 'show']]);
    }
    public function index()
    {
      $genres = Genre::get();
      return view('genres/index', ['genres' => Genre::orderBy('name')->get()]);
    }
    public function create()
    {
      return view('genres/create');
    }
    public function store(Request $request)
    {
      $genre_name = $request->input('name');

      $genre = new Genre();
      $genre->name = $genre_name;
      $genre->save();
      return redirect()->route('genres.index');
    }

    public function show(Genre $genre)
    {
        return view('genres/show', ['genre' => $genre]);
    }
    public function edit(Genre $genre)
    {
      return view('genres/edit', ['genre' => $genre]);
    }
    public function update(Request $request, Genre $genre)
    {
      $genre_name = $request->input('name');
      $genre->name = $genre_name;
      $genre->save();
      return redirect()->route('genres.show', ['genre' => $genre->id]);
    }


}
