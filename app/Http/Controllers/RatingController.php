<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
      $rating = Rating::get();
      return view('movies/index', ['ratings' => $ratings]);
    }
    public function show(Rating $rating)
    {
        return view('movies/show', ['rating' => $rating]);
    }
}
