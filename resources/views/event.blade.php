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

        <div>
            @foreach ($media as $media)
                <img src="{{ url('storage/' . implode($media->image)) }}" alt="" class="w-full sepia">
            @endforeach
       </div>

       <div class="mt-10 text-center">
            <h1 class="text-xl">Photos Link:</h1><br>
            <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="{{ $media->link }}">CLICK HERE</a>
       </div>
        
    </div>
@endsection