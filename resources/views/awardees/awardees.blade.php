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
            <h1 class="text-5xl">Awardees</h1>
        </div>


        <div class="mt-10 text-center">
            <h1 class="text-xl">For Group Photos:</h1><br>
            <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="//drive.google.com/drive/folders/1ioviKWNarWvLxL4LNm_1EuteTG5Ix4Io?usp=sharing">CLICK HERE</a>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
               
              
                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/aina.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.aina') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Aina Omega</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/ariel.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.ariel') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Ariel Jarito</h1>
                        </div>
                    </a>
                </div>

                
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/carla.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.carla') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Carla Manuzon</h1>
                        </div>
                    </a>
                </div>

               
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/othelo.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.othelo') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Othelo Dairit</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/perry.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.perry') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Perry Ong</h1>
                        </div>
                    </a>
                </div>
               

                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/rene.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.rene') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Rene Castillo</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/reyes.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.reyes') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Reyes Junio</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/rodel.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.rodel') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Rodel Villasis</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/rogelio.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.rogelio') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Rogelio Carig</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/ronnie.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.ronnie') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Ronnie Dagmang</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/sharry.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.sharry') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Sharry Dioneda</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/awardees/shayne.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.awardees.shayne') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Shayne Ignacio</h1>
                        </div>
                    </a>
                </div>

            </div>
       </div>

        
    </div>
@endsection