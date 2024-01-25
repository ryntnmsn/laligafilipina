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

        <div class="mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
              
                {{-- AWARDEES --}}
                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees_group.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Awardees</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/indak-ng-lahi/indak-ng-lahi.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.indak') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Indak ng Lahi Dance Competition</h1>
                        </div>
                    </a>
                </div>

                {{-- CANDID --}}
                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/candid.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.candid') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Candid</h1>
                        </div>
                    </a>
                </div>

                 {{-- GAMES --}}
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Games</h1>
                        </div>
                    </a>
                </div>

                 {{-- RAFFLE --}}
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Raffles</h1>
                        </div>
                    </a>
                </div>
               
            </div>
       </div>

       {{-- <div class="mt-10 text-center">
            <h1 class="text-xl">Photos Link:</h1><br>
            <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="">CLICK HERE</a>
       </div> --}}
        
    </div>
@endsection