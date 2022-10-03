<div>
    <div class="flex relative mt-3 md:mt-0 bg-gray-800" style="background-color: rgb(31 41 55);">
        <input wire:model="search" id="search-1" type="text" class="rounded-lg px-4 pl-8 py-1 h-9 ml-5 text-sm"
            placeholder="Search">
        {{-- <div class="absolute top-0"> --}}
            <i class="fa-solid fa-magnifying-glass fill-current mt-0 ml-2"
                style="border-radius: 50%; height:5rem; width:5rem;" id="search-icon"></i>
            {{--
        </div> --}}
    </div>
    <div class="spinner"></div>

    @if(strlen($search)>=2)
    <div class="absolute bg-gray-800 text-sm rounded mt-4 w-64 text-white">
        @if($searchResults->count()>0)
        <ul>
            @foreach($searchResults as $result)
            <li class="border-b   text-white">
                <a href="{{route('movies.show',$result['id'])}}" class="block px-6 py-4 text-white flex items-center">
                    @if ($result['poster_path'])
                    <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path'] }}" class="w-6" alt="poster">
                    @else
                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-6">
                    @endif
                    <span class="ml-4">{{ $result['title'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <div class="px-3 py-3">No Results for "{{$search}}"
        </div>
        @endif
    </div>
    @endif
</div>