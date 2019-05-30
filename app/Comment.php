<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content' 
    ];

    protected $guarded = [
        'id'
    ];

    const STORE_RULES = [
        'content' => 'required',
        'movie_id' => 'required',
        
    ];

    
}
