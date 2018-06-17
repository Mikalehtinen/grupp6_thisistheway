<?php
namespace App\Http\Controllers;
use Session;
use App\Library;
use App\User;
use App\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LibraryController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Lets the user add a movie by selecting a format for the movie.
     *
     * @param  Movie  $movie Gets ID from request and uses model to fetch relevant data.
     * @return view        Returns the view images.create with the model movie.
     */
    public function create(Movie $movie)
    {
      return view('Library.create', ['movie' => $movie]);
    }
    /**
     * Stores the choosen movie in the users library.
     *
     * @param  Request $request Gets form data.
     * @param  Movie   $movie   Gets ID from request and uses model to fetch relevant data.
     * @return redirect           Redirects the user to movies.show with movie ID.
     */
    public function store(Request $request, Movie $movie)
    {
      
      $movieLibrary = Auth::user()->Library->where('movie_id', $movie->id)->first();

      if(!$movieLibrary) {

        $Library = new Library();
        $Library->movie_id = $movie->id;
        $Library->user_id = Auth::user()->id;
        $Library->format = $request->input('format');
        $Library->save();
        Session::flash('flash_message', 'Filmen har lagts till i ditt bibliotek!');
      }
      return redirect()->route('movies.show', ['id' => $movie->id]);
    }

    public function edit(Library $Library)
    {
      return view('Library.edit', ['Library' => $Library]);
    }

    public function update(Request $request, Library $Library)
    {
      $Library->format = $request->input('format');
      $Library->save();

      Session::flash('flash_message', 'Biblioteket har uppdaterats!');
      
      return redirect()->back();
    }
}