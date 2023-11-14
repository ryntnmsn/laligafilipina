@extends('layouts.app')

@section('contents')
    <div class="flex flex-col md:flex-row space-x-0 md:space-x-4">
        <div class="flex-1">
            <div class="mb-6">
                <h1 class="text-default xl:text-7xl lg:text-6xl md:text-5xl sm:text-7xl text-5xl whitespace-nowrap pt-4 border-b-2 border-default">
                    FELIZ NAVIDAD
                </h1>
                <h2 class="text-default xl:text-5xl lg:text-4xl md:text-3xl sm:text-5xl text-3xl whitespace-nowrap pt-4 border-b-2 border-default mb-6">
                    WE ARE INVITING YOU
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio iste laudantium corrupti vel officia sit aliquam? Quam reprehenderit consequatur vitae facere adipisci? Animi in tenetur error itaque optio numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio iste laudantium corrupti vel officia sit aliquam? Quam reprehenderit consequatur vitae facere adipisci? Animi in tenetur error itaque optio numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio iste laudantium corrupti vel officia sit aliquam? Quam reprehenderit consequatur vitae facere adipisci? Animi in tenetur error itaque optio numquam.
                </p>
            </div>
            <h1 class="text-default xl:text-6xl lg:text-5xl md:text-4xl sm:text-6xl text-4xl whitespace-nowrap pt-4 border-b-2 border-default mb-6">
                For More Information
            </h1>
            <p class="text-justify mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio iste laudantium corrupti vel officia sit aliquam? Quam reprehenderit consequatur vitae facere adipisci? Animi in tenetur error itaque optio numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            </p>
        </div>
        <div class="flex-1">
            <img src="{{ asset('images/image-01.png') }}" alt="" class="w-full">
            <div>
                <h2 class="text-default xl:text-3xl lg:text-2xl md:text-xl sm:text-3xl text-2xl whitespace-nowrap pt-4 border-b-2 border-default mb-6">
                    REGISTER ON OUR ACTIVITIES
                </h2>
                <p class="text-justify mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio iste laudantium corrupti vel officia sit aliquam? Quam reprehenderit consequatur vitae facere adipisci? Animi in tenetur error itaque optio numquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>
            </div>
        </div>
    </div>
@endsection