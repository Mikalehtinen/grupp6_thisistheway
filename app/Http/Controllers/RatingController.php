<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Movie;
use App\User;
use Illuminate\Http\Request;

class RatingController extends Controller
{
  //skriver ut alla kollumner i en lista
    public function index()
    {
      $rating = Rating::get();
      return view('movies/index', ['ratings' => $ratings]);
    }
    public function show(Rating $rating)
    {
      return view('movies/show', ['rating' => $rating]);
    }
    public function store(Request $request)
    {
        $rating = $request->input('rating');

        $rating = new Rating();
        $rating->rating = $rating;
        $rating->save();

        return redirect()->route('movies.index');
    }
}
