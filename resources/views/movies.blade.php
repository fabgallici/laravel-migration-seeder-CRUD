@extends('layouts.app')

@section('content')
    <ol>
        @foreach($movies as $movie)
            <li>
                <ul>
                    <li><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></li>
                    <li>{{ $movie->year }}</li>
                    <li><a href="{{ route('movies.edit', $movie->id) }}">EDIT</a></li>
                    <li>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="delete">DELETE/DESTROY</button>
                        </form>
                    </li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>
    <a href="{{ route('movies.create') }}">CREATE</a>
@endsection