@extends('layouts.master')
@section('header')

    @include('layouts.nav')
@endsection
@section('content')

    <div class="container">
    <h1>{{ $post->title}}</h1>
    <br>
    <small>by {{$post->user->name }} on {{ $post->created_at->diffForHumans() }}</small>
    <br>
    <br>
    <div class="row">
        <div class="col-md-8">
        <p>
            {{ $post->body }}
        </p>
        <br>
        <hr>
        <br>
        <div class="comments">
            <h5>Leave a comment</h5>
            <br>
            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Leave a comment" rows="4" required></textarea>    
                </div>      
                <div class="form-group">
                    <button class="btn btn-primary" name="submitComment">Add comment</button>
                </div>    
                <div class="form-group">
                    @include('layouts.errors')    
                </div>            
            </form>
            <br>
            <p class="text-primary"> {{$post->comments->count()}} Comments </p>
            
            <ul class="list-group">
                @foreach($post->comments as $comment)
                <li class="list-group-item">
                    {{$comment->body}}
                    <br>
                <small>{{$comment->created_at->diffForHumans()}}</small>
                </li>
                @endforeach
                <br>
            </ul>
        </div>
        </div>
        @include('layouts.sidebar')
    </div>
    </div>

@endsection
@section('footer')
    @include('layouts.footer')
@endsection