@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-2xl mb-3 text-center">{{ $media->name }} Department</h1>
       <div>
            <img src="{{ url('storage/' . implode($media->image)) }}" alt="" class="w-full sepia">
       </div>

       <div class="mt-10 text-center">
        <h1 class="text-xl">Photos Link:</h1><br>
        <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="{{ $media->link }}">CLICK HERE</a>
       </div>
    </div>
@endsection