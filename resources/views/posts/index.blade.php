@extends('layouts.master')

@section('header')
    @include('layouts.nav')
@endsection
@section('content')

    @include('layouts.header')
  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>

        @foreach($posts as $post)
          @include('posts.postcard')
        @endforeach
        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

      </div><!-- /.blog-main -->
      <div class="col-md-4">
        
      @include('layouts.sidebar')
      </div>
    </div><!-- /.row -->

  </main><!-- /.container -->
  @endsection
  @section('footer')
    @include('layouts.footer')
  @endsection