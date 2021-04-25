<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
  {
    $movies = Movie::all();
    return view('movies.index', compact('movies'));
  }

  public function create()
  {
    return view('movies.create');
  }

  public function store(CreateMovieRequest $request)
  {
    $data = $request->validated();
    Movie::create($data);
    return redirect('/movies');
  }

  public function show(Movie $movie)
  {
    return view('movies.show', compact('movie'));
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}


