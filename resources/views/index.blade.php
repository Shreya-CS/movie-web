@extends('main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-videos">
            <h2 class="uppercase text-orange-400" id="popular-movies">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-1 place-items-center">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach
               
            </div>
            <div class="popular-videos">
                <h2 class="uppercase text-orange-400" id="popular-movies">Now Playing</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-1 place-items-center">
                    @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <div class="mt-8">
    <a href="">
        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:15rem;height:20rem">
    </a>
    <div class="mt-2">
        <a href="" class="text-lg mt-2 hover:text-gray:300">Beast</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <i class="fa-solid fa-star fa-xs fill-current text-orange-400"></i>
            <span class="ml-1">85%</span>
            <span class="mx-2">|</span>
            <span>March 24,2020</span>
        </div>
        <div class="text-gray-400 text-sm">
            Action,Thriller,Comedy
        </div>
    </div>
</div> --}}