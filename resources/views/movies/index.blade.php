@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4">

        <div class="now-playing-movies py-8">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Now Playing movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $movie)
                    <x-movie-card-component :movie="$movie" :genres="$genres"></x-movie-card-component>
                @endforeach
            </div>
        </div>

        <div class="popular-movies py-8">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                    <x-movie-card-component :movie="$movie" :genres="$genres"></x-movie-card-component>
                @endforeach
            </div>
        </div>

        <div class="up-coming-movies py-8">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">up coming movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($upcomingMovies as $movie)
                    <x-movie-card-component :movie="$movie" :genres="$genres"></x-movie-card-component>
                @endforeach
            </div>
        </div>
    </div>
@endsection
