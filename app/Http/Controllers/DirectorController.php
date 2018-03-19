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

    public function create()
    {
      //refererar till create.blade.php, skickar det formuläret till store nedan.
        return view('directors/create');
    }

    public function store(Request $request)
    {
        $director_name = $request->input('name');
        $director_description = $request->input('description');

        $director = new Director();
        $director->name = $director_name;
        $director->description = $director_description;
        $director->save();
        return redirect()->route('directors.index');

    }

    public function show(Director $director)
    {
        return view('directors/show', ['director' => $director]);
    }

    public function edit(Director $director)
    {
      return view('directors/edit', ['director' => $director]);
    }

    public function update(Request $request, Director $director)
    {
      $director_name = $request->input('name');
      $director_description = $request->input('description');

      $director->name = $director_name;
      $director->description = $director_description;
      $director->save();

      return redirect()->route('directors.show', ['director' => $director->id]);
    }

}
