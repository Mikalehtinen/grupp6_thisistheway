<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Movie;
use App\User;
use Exception;
use Illuminate\Http\Request;

class RatingController extends Controller
{
  //skriver ut alla kollumner i en lista
    public function index()
    {
      $rating = Rating::get();
      return view('movies/index', ['ratings' => Rating::orderBy('rating')->get()]);

    }
    public function show(Rating $rating)
    {
      return view('movies/show', ['rating' => $rating]);
    }
    public function create()
    {
      //refererar till create.blade.php, skickar det formuläret till store nedan.
        return view('movies/show', ['rating' => $rating]);
    }
    public function store(Request $request)
    {
      $rating_user = $request->input('user_id');
      $rating_movie = $request->input('movie_id');
      $rating_rate = $request->input('rating');
      $rating = new Rating();

      try {

        $rating->user_id = $rating_user;
        $rating->movie_id = $rating_movie;
        $rating->rating = $rating_rate;

        $rating->save();
        return redirect()->route('movies.index');

      } catch (\exception $e) {
        report($e);
        return false;

      }

      }
}
