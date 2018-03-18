<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::get();
      return view('movies/index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //refererar till create.blade.php, skickar det formuläret till store nedan.
        return view('movies/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie_title = $request->input('title');
        $movie_desctiption = $request->input('desctiption');
        $movie_runtime = $request->input('runtime');
        $movie_releasedate = $request->input('releasedate');
        $movie_posterpicture = $request->input('posterpicture');
        $movie_directorid = $request->input('director_id');

        $movie = new Movie();
        $movie->title = $movie_title;
        $movie->desctiption = $movie_desctiption;
        $movie->runtime = $movie_runtime;
        $movie->releasedate = $movie_releasedate;
        $movie->posterpicture = $movie_posterpicture;
        $movie->director_id = $movie_directorid;
        $movie->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies/show',['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies/edit' , ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

      $movie_title = $request->input('title');
      $movie_desctiption = $request->input('desctiption');
      $movie_runtime = $request->input('runtime');
      $movie_releasedate = $request->input('releasedate');
      $movie_posterpicture = $request->input('posterpicture');
      $movie_directorid = $request->input('director_id');

      $movie->title = $movie_title;
      $movie->desctiption = $movie_desctiption;
      $movie->runtime = $movie_runtime;
      $movie->releasedate = $movie_releasedate;
      $movie->posterpicture = $movie_posterpicture;
      $movie->director_id = $movie_directorid;
      $movie->save();

      return redirect()->route('movies.show', ['movie' => $movie->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
