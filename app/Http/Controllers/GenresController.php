<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class GenresController extends Controller
{
    public function show($genre) 
    {
        $movies= Movie::where('genre', $genre)->get();
        $last5added = Movie::latest()->take(5)->get();

        return view ('movies/index', compact('movies','last5added'));
     }
}
