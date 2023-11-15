@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-5xl mb-3">Games</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis numquam iusto quae, rem ipsum iure commodi, nisi ullam dignissimos voluptatibus ab animi quasi illum magnam illo nihil totam ea error?
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 ">
            @foreach ($games as $game)
                <div class="mb-8">
                    <div class="flex-none">
                        <div class="sepia bg-default hover:sepia-0 group duration-300 ease-in-out">
                            <a href="{{ asset('storage/' . $game->image) }}" data-fslightbox  class="opacity-70 group-hover:opacity-100">
                                <img src="{{ asset('storage/' . $game->image) }}" alt="" class="w-full" loading="lazy">
                            </a>
                        </div>
                        <div class="text-center bg-default py-4">
                            <h1 class="text-amber-50 text-4xl">
                                {{ $game->name }}
                            </h1>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
@endsection