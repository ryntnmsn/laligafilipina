@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <div class="flex items-center text-center border-b-4 border-b-default">
            <a class="block flex-1 text-default p-5 bg-default/[.20] text-2xl lg:text-5xl" href="{{ route('media.index') }}">
               Photo Booth
            </a>
            <a class="block flex-1 text-yellow-50 p-5 bg-default text-2xl lg:text-5xl" href="{{ route('media.event') }}">
                Event
            </a>
        </div>

        <div>
            <div class="grid grid-cols"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-8">
            @php
                $images = [];
                foreach ($media as $data) {
                    foreach ($data->image as $key => $image) {
                        $images[] = $image;
                    }
                }
            @endphp

            @foreach ($images as $image)
                <div class="flex items-center border border-default duration-300 ease-in-out hover:-translate-y-2 cursor-pointer bg-default group">
                    <a href="{{ asset('storage/' . $image) }}" data-lightbox="{{ $image }}" data-fslightbox class="flex items-center">
                        <img src="{{ asset('storage/' . $image) }}" data-lightbox="{{ $image }}" alt="" class="h-auto" loading="lazy">
                    </a>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection