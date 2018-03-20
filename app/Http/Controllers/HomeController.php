<?php

namespace App\Http\Controllers;
use App\User;
use App\Rating;
use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('home', ['users' => $users]);
    }

    public function show(User $user)
    {
      $user = User::find($user->id);

      $user->ratings = $user->ratings()->avg('rating');

      // $user->ratings = $user->ratings()->find('rating');
      // $user->count = $user->ratings()->count('rating');
      // $user->select = $user->ratings()->select('rating');
      // $user->sum = $user->ratings()->sum('rating');

      return view('home', ['user' => $user]);
    }
}
