@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <div class="flex items-center text-center border-b-4 border-b-default">
            <a class="block flex-1 text-default p-5 bg-default/[.20] text-2xl lg:text-5xl" href="{{ route('media.index') }}">
                Portraits
            </a>
            <a class="block flex-1 text-yellow-50 p-5 bg-default text-2xl lg:text-5xl" href="{{ route('media.event') }}">
                Event
            </a>
        </div>

         
        <div class="w-full text-center mt-10">
            <h1 class="text-5xl">Games</h1>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
               
              
                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/bingo/bingo.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.bingo') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Bingo</h1>
                        </div>
                    </a>
                </div>


                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/maria-clara-at-ibarra/maria-clara-at-ibarra.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.maria') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Maria Clara at Ibarra</h1>
                        </div>
                    </a>
                </div>

               
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/pagsusulit/pagsusulit.jpg')}}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.pagsusulit') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Pagsusulit</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/silya-elektrika/silya-elektrika.jpg')}}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.silya') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Silya Elektrika</h1>
                        </div>
                    </a>
                </div>


            </div>
       </div>

        
    </div>
@endsection