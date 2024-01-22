@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <div class="flex items-center text-center border-b-4 border-b-default">
            <a class="flex-1 text-yellow-50 p-5 bg-default text-2xl lg:text-5xl" href="{{ route('media.index') }}">Portraits</a>
            <a class="flex-1 text-default p-5 bg-default/[.20] text-2xl lg:text-5xl" href="{{ route('media.event') }}">
               Event
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
            @foreach ($media as $media)
                <div class="bg-default h-auto md:h-96 w-full overflow-hidden flex items-center justify-center relative">
                    <img src="{{ asset('storage/' . implode($media->image)) }}" alt="" class="block sepia opacity-40" loading="lazy">
                    <a href="{{ route('media.show', $media->slug) }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-3xl md:text-5xl bg-default/[.80] p-4 leading-none text-center">{{ $media->name }}</h1>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>




            {{-- @php
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
            @endforeach --}}
        </div>
        
    </div>
@endsection