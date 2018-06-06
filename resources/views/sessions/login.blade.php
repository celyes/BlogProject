@extends('layouts.master')

@section('header')
    @include('layouts.nav')
@endsection

@section('content')
    <br>
    <h3 class="text-center">Login to your account</h3>
    <br>
    <div class="col-sm-12 col-md-6 offset-md-3">
            <form action="/login" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
                </div>
            </form>
            @include('layouts.errors')
        </div>
@endsection