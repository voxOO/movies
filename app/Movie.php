<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title' , 'genre' , 'director' , 'year' , 'storyline'
    ];

    protected $guarded = [
        'id'
    ];

    const STORE_RULES = [
        'title' => 'required',
        'genre' => 'required',
        
        'year' => 'required| min:1900| max:2019',
        'storyline' => 'required|max:1000'
    ];
}
