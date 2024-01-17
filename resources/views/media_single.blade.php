@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-5xl mb-3 text-center">{{ $media->name }} Department</h1>
       <div>
            <img src="{{ url('storage/' . implode($media->image)) }}" alt="" class="w-full sepia">
       </div>

       <div class="mt-10 flex space-x-3 flex-wrap">
        <h1 class="text-2xl">Photos Link:</h1><br>
        <a class="text-2xl text-rose-600" href="{{ $media->link }}">{{ $media->link }}</a>
       </div>
    </div>
@endsection