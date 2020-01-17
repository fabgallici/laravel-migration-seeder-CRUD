@extends('layouts.app')

@section('content')
    <form action="{{ route('movies.store') }}" method="post">
      @csrf
      @method('POST')

      <div class="form-groud">
        <label for="title">Title:</label>
        <input type="text" name="title" value="">
      </div>
      <div class="form-groud">
        <label for="year">Year:</label>
        <input type="text" name="year" value="">
      </div>
      <div class="form-groud">
        <label for="overview">Overview:</label>
        <input type="text" name="overview" value="">
      </div>

      <button type="submit" name="button">SAVE ME</button>
    </form>

    
@endsection