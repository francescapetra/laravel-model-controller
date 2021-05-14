@extends('layout.main')

@section('page_title')
    Home Page Movies
@endsection
    
 @section('content')   
    <h1>Movies</h1>
    @foreach ($movies as $movie)
        <h2>{{$movie->title}}</h2>
        <a href="{{route('movies.show', ['movie' => $movie->id])}}">Dettaglio film</a>
        <h3>{{$movie->author}}</h3>
        <h4>{{$movie->genre}}</h4>
        <p>{{$movie->plot}}</p>    
    @endforeach
    
@endsection