<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shrey-App</title>
    <link rel="stylesheet" href="{{ mix(" css/app.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <livewire:styles />

</head>

<body>
    <nav class="border-b font-sans text-white" id="">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6 ">
            <ul class="flex items-center flex flex-col md:flex-row ">
                <li class="">
                    <a href="{{route('movies.index')}}" class="fa-solid fa-video" id="icon"></a>
                </li>
                <a href="{{route('movies.index')}}" class="py-1 justify-between" id="heading">Shrey</a>
                <li class="ml-12 mt-3 md:mt-0" id="menu">
                    <a href="{{route('movies.index')}}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="ml-12 mt-3 md:mt-0" id="menu">
                    <a href="" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="ml-12 mt-3 md:mt-0" id="menu">
                    <a href="" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center" id="search-bar">
                <livewire:search-dropdown>
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="">
                            <img src="images/dp.png" alt="avatar" class="rounded-full w-8 h-8">
                        </a>
                    </div>
            </div>
        </div>
    </nav>
    {{-- @section('content')
    helo
    @endsection
    --}}
    <div>
        @yield('content')
    </div>
    <livewire:scripts>

</body>

</html>