<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index () 
    {
        $movies= Movie::all();
        $last5added = Movie::latest()->take(5)->get();
        return view ('/movies/index', compact('movies','last5added'));
    }

    public function show($id) 
    {   
        $last5added = Movie::latest()->take(5)->get();
        $movie= Movie::with('comments')->findOrFail($id);
        return view ('/movies/show', compact('movie','last5added'));
    }

    public function create() 
    {   
        $last5added = Movie::latest()->take(5)->get();
        return view ('/movies/create', compact('last5added'));
    }

    public function store () 
    {
        $this->validate(request(), Movie::STORE_RULES);
        $movie = Movie::create(request()->all());
        return redirect()->route('store');
    }
}
