@extends('layouts.app')

@section('content')
    {{-- <form action="/movies" method="post"> --}}
    <form action="{{ route('movies.store') }}" method="post">
    
      @csrf
      @method('POST')

      <div class="form-groud">
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" >
      </div>
      <div class="form-groud">
        <label for="year">Year:</label>
        <input type="text" name="year" value="{{ old('year') }}" required>
      </div>
      <div class="form-groud">
        <label for="overview">Overview:</label>
        <input type="text" name="overview" value="{{ old('overview') }}">
      </div>

      <button type="submit" name="button">SAVE ME!</button>
    </form>

    @if ($errors->any())
      <div class="notification-error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
@endsection