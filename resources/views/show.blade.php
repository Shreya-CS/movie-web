@extends('main')

@section('content')
    <div class="movie-info border-b mt-6 border-gray-800 ">
        <div class="container mx-auto px-4 py-16 flex mt-16">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="" class="w-60 ml-16 mb-" style="width:15rem;height:24rem">
            <div class="ml-24">
                <h2 class="text-4l font-semibold text-white">
                    {{ $movie['title'] }}
                </h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <i class="fa-solid fa-star fa-xs fill-current text-orange-400"></i>
                    <span class="ml-1">{{$movie['vote_average']* 10 .'%'}}</span>
                    <span class="mx-2">|</span>
                    <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')  }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                        {{$genre['name']}}
                        @if (!$loop->last),
                        @endif   
                    @endforeach</span>
                </div>
                <p class="text-gray-300 mt-8 mr-20">
                    {{$movie['overview']}}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">
                        Featured Crew
                    </h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index<2)
                                <div class="mr-8">
                                    <div class="text-white">
                                        {{$crew['name']}}
                                    </div>
                                    <div class="text-sm text-gray-400 mt-2">
                                        {{$crew['job']}}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @if (count($movie['videos']['results'])>0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="flex inline-flex items-center bg-orange-400 text-gray-900 rounded font-semibold px-4 py-4 mb-2" style="max-width: 14rem">
                            <i class="fa-solid fa-play fa-sm"></i>
                            <span class="ml-2">Play Video</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
{{-- end movie info --}}
{{-- starting cast/videographers section --}}
    <div class="movie-cast border-b border-gray-800"> 
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-semibold text-white mt-4">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-1 place-items-center">
                @foreach ($movie['credits']['cast'] as $cast)               
                    @if ($loop->index<5)
                        <div class="mt-8">
                            <a href="">
                                <img src="{{'https://image.tmdb.org/t/p/w300/'.$cast['profile_path']}}" alt="" class="hover:opacity-75" style="width:15rem;height:24rem">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray:300 text-white">{{$cast['name']}}</a>
                                <div class="flex items-center text-gray-400 text-sm mt-1">
                                    <span>{{$cast['character']}}</span>
                                </div>
                            </div>
                        </div>     
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="movie-images border-b border-gray-800"> 
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-semibold text-white mt-4">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 place-items-center">
                @foreach ($movie['images']['backdrops'] as $image)               
                    @if ($loop->index<9)
                        <div class="mt-8">
                            <a href="">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}" alt="" class="hover:opacity-75" style="width:25rem;height:15rem">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection