@extends('layouts.app')

@section('metaTitle', 'Home page')

@section('content')
<ul class="container movies-wrapper">
    @forelse($movies as $movie)
        <li class="card">
            <h3>{{ $movie['title'] }}</h3>
            <div>{{ $movie['original_title'] }}</div>
            <div>{{ $movie['nationality'] }}</div>
            <div>{{ $movie['date'] }}</div>
            <div>{{ $movie['vote'] }}</div>
        </li>
    @empty
        <p>No movie available</p>
    @endforelse
</ul>
@endsection