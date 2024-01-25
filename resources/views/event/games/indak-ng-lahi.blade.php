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
            <h1 class="text-5xl">Indak ng Lahi Dance Competition</h1>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
               
              
                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/indak-ng-lahi/hokage/hokage4.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.hokage') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Hokage</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/indak-ng-lahi/dynamic/dynamic4.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.dynamic') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Dynamic Duo</h1>
                        </div>
                    </a>
                </div>

                
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/indak-ng-lahi/groove/groove4.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.groove') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Groove Force</h1>
                        </div>
                    </a>
                </div>

               
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/indak-ng-lahi/sining/sining2.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.sining') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Sining Lahi Dance Troupe</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/games/indak-ng-lahi/bhg/bhg2.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.games.bhg') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Ingat Yaman Group</h1>
                        </div>
                    </a>
                </div>
               

            </div>
       </div>
{{-- 
       <div class="mt-10 text-center">
            <h1 class="text-xl">For Group Photos:</h1><br>
            <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="">CLICK HERE</a>
       </div>
         --}}
    </div>
@endsection