@extends('layouts.master')

@section('title', 'Movie details')

@section('content')

   <h2>{{$movie->title}}</h2>
   <a href="{{ '/movies/genre/' . $movie->genre }}"><p>{{$movie->genre}}</p></a>
   <!-- <p>{{$movie->genre}}</p> -->
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

   <h4> Post a comment </h4>

<form method="POST" action="{{ route('store_comment', ['movie_id' => $movie->id])}}">
        @csrf

        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" id="content" name="content" />
            @include('partials.error-message', ['fieldTitle'=>'content'])
        </div>

            <input type="hidden" name="movie_id" value="movie_id">


        <div class="form-control">
            <button type="submit" class="btn btn-primary"> Submit </button>
        </div>
</form>

@endsection