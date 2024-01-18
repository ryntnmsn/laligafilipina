@extends('layouts.app')

@section('contents')
    <div class="flex flex-col">
        <h1 class="text-default text-4xl mb-3 mt-3 text-center">{{ $media->name }}</h1>
        
        <div class="wrapper mt-10">
            <div class="buttonWrapper border-b-4 border-default bg-default/[.20]">
                <button class="tab-button active py-5 text-2xl hover:bg-default text-default hover:text-yellow-50" data-id="group_photo">Group Photo</button>
                <button class="tab-button py-5 text-2xl hover:bg-default text-default hover:text-yellow-50" data-id="photobooth">Photo Booth</button>
                <button class="tab-button py-5 text-2xl hover:bg-default text-default hover:text-yellow-50" data-id="red_carpet">Red Carpet</button>
            </div>
            <div class="contentWrapper mt-5">
                <div class="content active" id="group_photo">
                    <div>
                        <img src="{{ url('storage/' . implode($media->image)) }}" alt="" class="w-full sepia">
                        <div class="mt-10 text-center">
                            <h1 class="text-xl">Photos Link:</h1><br>
                            <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="{{ $media->link }}">CLICK HERE</a>
                        </div>
                    </div>
                </div>
                <div class="content" id="photobooth">
                    <img src="{{ url('storage/photo_booth.jpg') }}" alt="" class="w-full sepia">
                    <div class="mt-10 text-center">
                        <h1 class="text-xl">Photos Link:</h1><br>
                        <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" target="__blank" href="
                            @if($media->slug == 'marketing') {{-- marketing --}}
                                //drive.google.com/drive/folders/1uxP1E5c2rGYSH_9263OuPE856A6CUgDx?usp=sharing
                            @elseif($media->slug == 'cs-and-operation')
                               
                            @elseif($media->slug == 'bhg-and-telfa')

                            @elseif($media->slug == 'committee')

                            @elseif($media->slug == 'it')

                            @elseif($media->slug == 'j9')

                            @elseif($media->slug == 'ga-procurement-and-admin')
                            
                            @elseif($media->slug == 'visa-and-recruitment')

                            @elseif($media->slug == 'hr')

                            @elseif($media->slug == 'legal')

                            @elseif($media->slug == 'oceanic-and-ms')
                                
                            @endif
                        ">CLICK HERE</a>
                    </div>
                </div>
                <div class="content" id="red_carpet">
                    <img src="{{ url('storage/red_carpet.jpg') }}" alt="" class="w-full sepia">
                    <div class="mt-10 text-center">
                        <h1 class="text-xl">Photos Link:</h1><br>
                        <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" target="__blank" href="
                            @if($media->slug == 'marketing') {{-- marketing --}}
                                //drive.google.com/drive/folders/1KmXjVmuxn0PFfXTKICAL3oVHbJ8BEsJC?usp=sharing
                            @elseif($media->slug == 'cs-and-operation')
                               
                            @elseif($media->slug == 'bhg-and-telfa')

                            @elseif($media->slug == 'committee')

                            @elseif($media->slug == 'it')

                            @elseif($media->slug == 'j9')

                            @elseif($media->slug == 'ga-procurement-and-admin')
                            
                            @elseif($media->slug == 'visa-and-recruitment')

                            @elseif($media->slug == 'hr')

                            @elseif($media->slug == 'legal')

                            @elseif($media->slug == 'oceanic-and-ms')
                                
                            @endif
                        ">CLICK HERE</a>
                    </div>
                </div>
            </div>
        </div>


        

      
    </div>
@endsection