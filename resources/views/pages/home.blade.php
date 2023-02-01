@extends('layouts.main-layout')

@section('content')

    <h1>Films</h1>

    @foreach ($movies as $movie)
        <p>{{ $movie -> title }}</p>
    @endforeach
    
@endsection
