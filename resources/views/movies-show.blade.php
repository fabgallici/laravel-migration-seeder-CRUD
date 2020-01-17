@extends('layouts.app')

@section('content')
  <p data-id="{{ $movie->title }}">{{ $movie->title }}</p>
  <p>{{ $movie->year }}</p>
  <p>{{ $movie->overview }}</p>
        
@endsection