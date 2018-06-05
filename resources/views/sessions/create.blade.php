@extends('layouts.master')

@section('header')
    @include('layouts.nav')
@endsection

@section('content')
    <br>
    <h3 class="text-center">Register a new user</h3>
    <br>
    <div class="col-sm-12 col-md-6 offset-md-3">
            <form action="/register">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" id="name" name="name" class="form-control">
                    <small id="name-small" class="form-text text-muted">Choose an appropriate username</small>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                    <small id="email-small" class="form-text text-muted">Enter a valid email address</small>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                    <small id="password-small" class="form-text text-muted">Password should be more than 8 characters</small>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="registerBtn">Register</button>
                </div>
            </form>
    </div>
@endsection