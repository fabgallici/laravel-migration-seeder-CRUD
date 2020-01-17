@extends('layouts.app')

@section('content')
    <form action="{{ route('movies.update', $movie->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="form-groud">
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $movie->title }}">
      </div>
      <div class="form-groud">
        <label for="year">Year:</label>
        <input type="text" name="year" value="{{ $movie->year }}">
      </div>
      <div class="form-groud">
        <label for="overview">Overview:</label>
        <input type="text" name="overview" value="{{ $movie->overview }}">
      </div>

      <button type="submit" name="button">UPDATE ME</button>
    </form>

    
@endsection