@extends('visitors.template.base')

@section('title', $title)
    

@section('content')
    <h1> {{ $comic['series']}}</h1>

    <img src="{{ $comic['thumb'] }}" alt="Comic Image">

    <p> {{ $comic['description'] }} </p>
@endsection