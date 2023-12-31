@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-5xl mb-3">Games</h1>
        <p>
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 ">
            @foreach ($games as $game)
                <div class="mb-8">
                    <div class="flex-none">
                        <div class="bg-default group duration-300 ease-in-out">
                            <a href="{{ asset('storage/' . $game->image) }}" data-fslightbox>
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