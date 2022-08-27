<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shrey-App</title>
    <link rel="stylesheet" href="{{ mix("css/app.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

</head>
<body>
    <nav class="border-b font-sans text-white" id="">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6 ">
            <ul class="flex items-center flex flex-col md:flex-row ">
                <li class="">
                    <i class="fa-solid fa-video" id="icon"></i>
                </li>
                <p class="py-1 justify-between" id="heading">Shrey</p>
                <li class="ml-12 mt-3 md:mt-0" id="menu">
                    <a href="" class="hover:text-gray-300">Events</a>
                </li>
                <li class="ml-12 mt-3 md:mt-0"id="menu">
                    <a href=""class="hover:text-gray-300">Pictures</a>
                </li>
                <li class="ml-12 mt-3 md:mt-0"id="menu">
                    <a href="" class="hover:text-gray-300">Videographers</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center" id="search-bar">
                <div class="flex relative mt-3 md:mt-0" style="background-color: rgb(31 41 55);">
                    <input id="search" type="text" class="rounded-lg px-4 pl-8 py-1 ml-5 text-sm" placeholder="Search">
                    {{-- <div class="absolute top-0"> --}}
                        <i class="fa-solid fa-magnifying-glass fill-current mt-0 ml-2" id="search-icon"></i>
                    {{-- </div> --}}
                </div>
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
</body>
</html>