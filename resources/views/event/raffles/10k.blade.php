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
            <h1 class="text-5xl">10k Raffle Winners</h1>
        </div>


        <div class="mt-10 text-center">
            <h1 class="text-xl">For more photos:</h1><br>
            <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="//drive.google.com/drive/folders/1ouiqloaHgDZCWW6tFf3G_gC8e_tYvN16?usp=sharing">CLICK HERE</a>
        </div>

        <div class="mt-10">
            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <img src="{{ url('images/raffles/10k/10k1.jpg') }}">
                <img src="{{ url('images/raffles/10k/10k2.jpg') }}">
                <img src="{{ url('images/raffles/10k/10k3.jpg') }}">
            </div>
       </div>

        
    </div>
@endsection