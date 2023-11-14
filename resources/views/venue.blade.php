@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-5xl mb-3">Venue</h1>
        <p>
            <b>Located in:</b> Rockwell Center<br>
            <b>Address:</b>R5 Level Power Plant Mall Plaza Drive Rockwell Center, Makati, Metro Manila<br>
            <b>Date and Time:</b> December 22, 2023 | 5PM
        </p>

        <div class="flex flex-col justify-center">
            <img src="{{ asset('images/the_fifth_venue.png') }}" alt="" class="opacity-100">
        </div>
    </div>
@endsection
