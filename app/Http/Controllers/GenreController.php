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
      $genre = Genre::get();
      return view('movies/index', ['genres' => $genres]);
    }
    public function show(Genre $genre)
    {
        return view('movies/show', ['genre' => $genre]);
    }
}
