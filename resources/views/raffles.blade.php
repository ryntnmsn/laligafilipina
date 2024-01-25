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
            <h1 class="text-5xl">Raffles</h1>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
               
              
                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles/raffle-5k.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles.5k') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">5k</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles/raffle-10k.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles.10k') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">10k</h1>
                        </div>
                    </a>
                </div>

                
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles/raffle-25k.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles.25k') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">25k</h1>
                        </div>
                    </a>
                </div>

               
                 <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles/50k/50k4.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles.50k') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">50k</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles/raffle-70k.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles.70k') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">70k</h1>
                        </div>
                    </a>
                </div>
               

                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles/raffle-100k.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles.100k') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">100k</h1>
                        </div>
                    </a>
                </div>


                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ url('images/raffles/raffle-additional.jpg') }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('event.raffles.additionals') }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">Additional Raffle</h1>
                        </div>
                    </a>
                </div>

            </div>
       </div>

       {{-- <div class="mt-10 text-center">
            <h1 class="text-xl">For Group Photos:</h1><br>
            <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="">CLICK HERE</a>
       </div> --}}
        
    </div>
@endsection