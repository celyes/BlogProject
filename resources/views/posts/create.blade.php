@extends('layouts.master')

@section('header')

    @include('layouts.nav')

@endsection

@section('content')
    <br>
    <h1>Create a post</h1>
    <br>
    <div class="row">
        <div class="col-md-8">
            <form method="POST" action="/posts">
              {{csrf_field()}}
             @include('layouts.errors')
              <div class="form-group">
                <label for="title">Type in the title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="postTitle">
                <small id="postTitle" class="form-text text-muted">Please, choose your words to express the post exhaustively.</small>
              </div>
              <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" rows="10"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish the post</button>
              </div>          
            </form>
            <br>
            
          </div>
              
          @include('layouts.sidebar')
          
    </div>
@endsection

@section('footer')

    @include('layouts.footer')

@endsection