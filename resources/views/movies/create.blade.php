@extends('layouts.master')

@section('title')
    Create new movie
@endsection

@section('content')

    <h2 class="blog-post-title">Create new movie</h2>

    <form method="POST" >
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text"
                   class="form-control"
                   id="title"
                   name="title">
            
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text"
                   class="form-control"
                   id="genre"
                   name="genre">
           
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
               
        </div>

        <div class="form-group">
                <label for="StoryLine">Story Line</label>
                <textarea name="StoryLine"
                          id="StoryLine" 
                          cols="70" 
                          rows="4">
                </textarea>
        </div>

        <div class="form-group">
            <button type="submitt" 
            class="btn btn-primary">Submit Form
            </button>
        </div>
    </form>

 @endsection