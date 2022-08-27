@extends('main')

@section('content')
    <div class="movie-info border-b mt-6 border-gray-800 ">
        <div class="container mx-auto px-4 py-16 flex mt-16">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="" class="w-60 ml-16 mb-" style="width:15rem;height:24rem">
            <div class="ml-24">
                <h2 class="text-4l font-semibold text-white">
                    Event name (2020)
                </h2>
                <div class="flex items-center text-gray-400 text-sm">
                    <i class="fa-solid fa-star fa-xs fill-current text-orange-400"></i>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>March 24,2020</span>
                    <span class="mx-2">|</span>
                    <span>Action,Thriller,Drama</span>
                </div>
                <p class="text-gray-300 mt-8 mr-20">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et id dolorem voluptatibus vero voluptatem reprehenderit sunt quae non! Molestiae facere commodi excepturi assumenda perspiciatis mollitia magni temporibus fuga? Architecto sit nulla dolore, quibusdam quae amet quam! Aliquid delectus cum quibusdam fugiat officia! A mollitia deserunt, deleniti ex dicta commodi ut!
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">
                        Featured Students
                    </h4>
                    <div class="flex mt-4">
                        <div>
                            <div class="text-white">
                                Student 1
                            </div>
                            <div class="text-sm text-gray-400 mt-2">
                                Video.Audio,Director
                            </div>
                        </div>
                        <div class="ml-8">
                            <div class="text-white">
                                Student 2
                            </div>
                            <div class="text-sm text-gray-400 mt-2">
                                Video.Audio,Director
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center bg-orange-400 text-gray-900 rounded font-semibold px-4 py-4 mb-2">
                        <i class="fa-solid fa-play fa-sm"></i>
                        <span class="ml-2">Play Video</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
{{-- end movie info --}}
{{-- starting cast/videographers section --}}
    <div class="movie-cast border-b border-gray-800"> 
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-semibold text-white mt-4">Videographers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-1 place-items-center">
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:15rem;height:20rem">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300 text-white">Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:15rem;height:20rem">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300 text-white">Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:15rem;height:20rem">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300 text-white">Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:15rem;height:20rem">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300 text-white">Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:15rem;height:20rem">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray:300 text-white">Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span>Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-images border-b border-gray-800"> 
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-semibold text-white mt-4">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 place-items-center">
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:25rem;height:15rem">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:25rem;height:15rem">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="images\movie1.png" alt="Beast" class="hover:opacity-75" style="width:25rem;height:15rem">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection