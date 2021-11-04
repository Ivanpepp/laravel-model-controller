@extends('layouts.main')

@section('title', 'movies')

@section('content')
    <div class="container" id="movies">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    film passati dal database
                </h1>
                <h3>...nuovo e misterioso...</h3>
            </div>
            @foreach ($movies as $movie)
            <div class="col-sm-5 col-md-3 col-lg-2">
                <h1>{{$movie->title}}</h1>
                <h2>{{$movie->original_title}}</h2>
                <h3>{{$movie->nationality}}</h3>
                <h4>{{$movie->date}}</h4>
                <h5>{{$movie->vote}}</h5>
            </div>
            @endforeach
           
        </div>
    </div>
@endsection