@extends('layouts.app')

@section('contents')
    <div class="flex flex-col md:flex-row space-x-0 md:space-x-4">
        <div class="flex-1">
            <div class="mb-6">
                <h1 class="text-default xl:text-7xl lg:text-6xl md:text-5xl sm:text-7xl text-4xl whitespace-nowrap pt-4 border-b-2 border-default">
                    FELIZ NAVIDAD
                </h1>
                <h2 class="text-default xl:text-5xl lg:text-4xl md:text-3xl sm:text-5xl text-3xl whitespace-nowrap pt-4 border-b-2 border-default mb-6">
                    PROSPERO AÑO NUEVO
                </h2>
                <div class="flex space-x-4 mb-4">
                    <div class="text-amber-50 bg-default text-2xl flex-1 text-center py-6 px-2 flex items-center justify-center">
                        2023 Year End Party
                    </div>
                    <div class="text-amber-50 bg-default text-2xl flex-1 text-center py-6 flex items-center justify-center">
                        Our Theme
                    </div>
                </div>
                <p class="text-justify">
                    Celebrate with us this holiday season at a festive gathering, honoring cherished Filipino traditions while also embracing the modern Filipino spirit. As the year draws to a close, we cordially invite you to join us for a lively evening of delectable food, jubilant music, and good cheer shared among friends old and new.
                </p>
            </div>
            <h1 class="text-default xl:text-4xl lg:text-3xl md:text-2xl sm:text-4xl text-2xl whitespace-nowrap pt-4 border-b-2 border-default mb-6">
                Celebrating the Holidays in Style
            </h1>
            <p class="text-justify">
                <b>When:</b> December 22, 2023 at 6PM
                <div class="flex">
                    <b>Where:</b>
                    <a href="{{ route('venue.index') }}" class="underline text-rose-600 font-bold pl-2">
                        <span>The Fifth at Rockwell</span>
                    </a>
                </div>

                
                <b>Attire:</b> <a href="{{ route('dress.index') }}" class="underline text-rose-600 font-bold">Modernized Traditional Filipino Attire</a><br><br>

                Our theme this year, "La Liga Filipina", pays homage to the Katipunan revolutionary society. While we honor Philippine history, we also embrace the modern Filipino spirit. Feel free to interpret the theme in your outfit with a contemporary twist on traditional Filipino attire.<br><br>

                We hope to see you at this 2023 Year-End celebration!
 
            </p>
        </div>
        <div class="flex-1">
            <img src="{{ asset('images/image-01.png') }}" alt="" class="w-full" loading="lazy">
            <div>
                <h2 class="text-default xl:text-3xl lg:text-2xl md:text-xl sm:text-3xl text-2xl whitespace-nowrap pt-4 border-b-2 border-default mb-6">
                    Get Involved in the Fun
                </h2>
                <p class="text-justify mb-4">
                    Let’s make lasting memories playing traditional Philippine games with contemporary flair. Come ready to dive into the activities and embrace true Filipino camaraderie. With bright festivities in store, let's ring in the new year by celebrating Pinoy way for a night we'll never forget.

                </p>
            </div>
        </div>
    </div>
@endsection