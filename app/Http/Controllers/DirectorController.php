<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
      $directors = Director::get();
      return view('directors/index', ['directors' => $directors]);
    }

    public function show(Director $director)
    {
        return view('directors/show', ['director' => $director]);
    }
}
