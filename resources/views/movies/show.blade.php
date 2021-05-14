@extends('layout.main')

@section('page_title')
    Dettaglio Movie
@endsection
    
@section('content') 
        <a href="{{route('movies.index')}}">Torna alla homepage</a>
        <h2>{{$movie->title}}</h2>
        <h3>{{$movie->author}}</h3>
        <h4>{{$movie->genre}}</h4>
        <p>{{$movie->plot}}</p>    

@endsection