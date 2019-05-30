<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store ($movieid) {
        
        $this->validate(request(), Comment::STORE_RULES);

        $movie = Movie::find($movieid);

        $movie->comments()->create(request()->all());
        return redirect()->route("single-movie", ['id' => $movieid] );
    }
}
