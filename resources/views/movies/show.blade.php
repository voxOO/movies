@extends('layouts.master')

@section('title', 'Movie details')

@section('content')

   <h3>{{$movie->title}}</h3>
   <p>{{$movie->genre}}</p>
   <p>{{$movie->director}}</p>
   <p>{{$movie->year}}</p>
   <p>{{$movie->storyline}}</p>


@endsection