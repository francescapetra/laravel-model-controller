@extends('layout.main')

@section('page_title')
    Home Page Series
@endsection

@section('fontawesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection
    
 @section('content')   
   
        <h1 class="series">Series <i class="fas fa-film"></i></h1>
        
    @foreach ($movies as $movie)
        <div class="main_container">
            <h2><i class="fas fa-video"></i> {{$movie->title}}</h2>
            <h3>{{$movie->author}}</h3>
            <h4>{{$movie->genre}}</h4>
            <p>{{$movie->plot}}</p> 
            <button><a href="{{route('movies.show', ['movie' => $movie->id])}}">Dettaglio film </a></button>
          </div>     
    @endforeach
  
@endsection