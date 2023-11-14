@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-5xl mb-3">Dress Codes</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet excepturi omnis impedit enim accusamus soluta fugiat ipsum dolore quia sed temporibus veritatis ad, officiis incidunt deserunt doloremque sit! Quia, rem.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
            @foreach ($dressCodes as $dressCode)
                <div class="bg-default h-96 w-full overflow-hidden flex items-start justify-center relative">
                    <img src="{{ asset('storage/' . $dressCode->image) }}" alt="" class="block sepia opacity-40">
                    <a href="{{ route('dress.show', $dressCode->slug) }}" class="absolute top-0 bottom-0 left-0 right-0 hover:bg-default duration-300 ease-in-out">
                        <div class="flex justify-center items-center h-full">
                            <h1 class="text-amber-50 text-5xl bg-default p-4 leading-none">{{ $dressCode->name }}</h1>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection