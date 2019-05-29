@extends('layouts.master')

@section('title', 'Movie details')

@section('content')

   <h2>{{$movie->title}}</h2>
   <p>{{$movie->genre}}</p>
   <p>{{$movie->director}}</p>
   <p>{{$movie->year}}</p>
   <p>{{$movie->storyline}}</p>

   @if(count($movie->comments)) 
   <h4> Comments </h4>
            <ul>
                @foreach($movie->comments as $comment)
                    <li>
                        <p>
                            {{ $comment->content }}
                        </p>
                        <p>
                            {{$comment->created_at}}
                        </p>
                    </li>
                @endforeach
            </ul>
   @endif

@endsection