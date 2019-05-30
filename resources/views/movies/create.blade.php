@extends('layouts.master')

@section('title')
    Create new movie
@endsection

@section('content')

    <h2 class="blog-post-title">Create new movie</h2>

    <form method="POST" action="{{ route('store')}}">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text"
                   class="form-control"
                   id="title"
                   name="title">
                   @include('partials.error-message', ['fieldTitle'=>'title'])
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text"
                   class="form-control"
                   id="genre"
                   name="genre">
                   @include('partials.error-message', ['fieldTitle'=>'genre'])
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text"
                   class="form-control"
                   id="director"
                   name="director">
        </div>

        <div class="form-group">
                <label for="year">Year</label>
                <input type="number"
                       class="form-control"
                       id="year"
                       name="year">
                       @include('partials.error-message', ['fieldTitle'=>'year'])
        </div>

        <div class="form-group">
                <label for="storyline">Story Line</label>
                <textarea name="storyline"
                          id="storyline" 
                          cols="97%" 
                          rows="4">                        
                </textarea>
                @include('partials.error-message', ['fieldTitle'=>'storyline'])
        </div>

        <div class="form-group">
            <button type="submitt" 
            class="btn btn-primary">Submit Form
            </button>
        </div>
    </form>

 @endsection