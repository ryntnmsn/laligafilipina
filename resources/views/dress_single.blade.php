@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-5xl mb-3">{{ $dressCode->name }}</h1>
        <p>
            {{ $dressCode->description }}
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-8">
            @php
                $images = [];
                foreach ($dressCode->images as $key => $image) {
                    $images[] = $image;
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