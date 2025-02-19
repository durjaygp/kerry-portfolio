@extends('website.master')
@section('title','404')
@section('content')

        <div class="container">
            <div class="text-center">
                <h1  style="margin-top: 200px;">404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not exist</div>
                <a href="{{route('home')}}" class="btn btn-primary" style="margin-bottom: 180px;">Go to home page</a>
            </div>
        </div>
@endsection
