@extends('layout.main')
@section('title','Movies')
@section('content')
    @foreach ($movies as $movie)
        <ul>
            <li>ID: {{$movie->id}}</li>
            <li>Titolo: {{$movie->title}}</li>
            <li>Titolo Originale: {{$movie->original_title}}</li>
            <li>Produzione: {{$movie->nationality}}</li>
            <li>Rilascio: {{$movie->date}}</li>
            <li>Voto: {{$movie->vote}}</li>
        </ul>
        <hr>
    @endforeach
@endsection
