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
                    <div class="my-10 text-center">
                        <h1 class="text-xl">For High Resolution Photos</h1><br>
                        <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" href="{{ $media->link }}">CLICK HERE</a>
                    </div>

                    <div class="pt-5">
                            @if($media->slug == 'marketing') {{-- marketing --}}
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/Gw7gYDYyrQE?si=ty8NHisD03g1omlm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'cs-and-operation')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/OpuiEYWPxV0?si=VGwFwm1QHy5U-yib" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'bhg-and-telfa')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/dttm7KSxn2Y?si=43bvuTyZIdJk2EmZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'committee')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/8qjXSjCor6w?si=OwscX5LRMF9jWQsm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'it')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/RkPp_6amUrc?si=a2MfcMwFmaejg0JO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'j9')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/3wudeFtbFQ8?si=jdXqzv8xu5N6hVvS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'ga-procurement-and-admin')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/tvkXfVysSeI?si=GX2G36e-A3FFgRSB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'visa-and-recruitment')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/FCTiJAOYOeA?si=LR_08-TcmuKN8njO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'hr')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/8qjXSjCor6w?si=OwscX5LRMF9jWQsm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'legal')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/Npq1vpXQBiI?si=s788XLbUiqUi_73i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @elseif($media->slug == 'oceanic-and-ms')
                                <iframe width="100%" height="640" src="https://www.youtube.com/embed/vHhxAT0DLIg?si=_yHE7kBsTXKgKwYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            @endif

                        <img src="{{ url('storage/' . implode($media->image)) }}" alt="" class="w-full mt-10">
                        
                    </div>
                </div>

                {{-- PHOTOBOOTH --}}
                <div class="content" id="photobooth">
                    <div class="mt-10 text-center">
                        <h1 class="text-xl">For High Resolution Photos</h1><br>
                        <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" target="__blank" href="
                            @if($media->slug == 'marketing') {{-- marketing --}}
                                //drive.google.com/drive/folders/1uxP1E5c2rGYSH_9263OuPE856A6CUgDx?usp=sharing
                            @elseif($media->slug == 'cs-and-operation')
                                //drive.google.com/drive/folders/1tSdXQ7ubWO5bkoKv1kOZ6JlWMhHLnKDH?usp=sharing
                            @elseif($media->slug == 'bhg-and-telfa')
                             //drive.google.com/drive/folders/1impaH2GORsMW92WqBNCO1MCVYjeviOVY?usp=sharing
                            @elseif($media->slug == 'committee')
                                //drive.google.com/drive/folders/1l1dBYErhLjoD6HM3PTYXsymC3cUYdHt5?usp=sharing
                            @elseif($media->slug == 'it')
                                //drive.google.com/drive/folders/13_uGQyBmCifnLGVxe9BJ7G1rn7peGdY5?usp=sharing
                            @elseif($media->slug == 'j9')
                                //drive.google.com/drive/folders/1Xp6iMfO8R5TbSFCYuIYeUsNNME_bUChu?usp=sharing
                            @elseif($media->slug == 'ga-procurement-and-admin')
                                //drive.google.com/drive/folders/1FzgiR9oPGUpWdJ7nHDqYXoxuipgWZG-A?usp=sharing
                            @elseif($media->slug == 'visa-and-recruitment')
                                //drive.google.com/drive/folders/1GXOe4AvDezWsy7F9g0zPRu0PVNKrSR6P?usp=sharing
                            @elseif($media->slug == 'hr')
                                //drive.google.com/drive/folders/1PeuZX3JoWKBC25sh2x-wpbJi8PVGZj9y?usp=sharing
                            @elseif($media->slug == 'legal')
                                //drive.google.com/drive/folders/10qmItl8H1ymnI0b_xaZC-XDmc81gH57u?usp=sharing
                            @elseif($media->slug == 'oceanic-and-ms')
                                //drive.google.com/drive/folders/1BrnCN94_vuC-CoVgM3C2WGUVD093uhkH?usp=sharing
                            @endif
                        ">CLICK HERE</a>
                    </div>

                    <div class="w-full mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @if($media->slug == 'marketing') {{-- marketing --}}
                            @foreach (File::glob('images/marketing/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'cs-and-operation')
                            @foreach (File::glob('images/cs_and_operation/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'bhg-and-telfa')
                            @foreach (File::glob('images/bhg_and_telfa/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'committee')
                            @foreach (File::glob('images/committee/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'it')
                            @foreach (File::glob('images/it/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'ga-procurement-and-admin')
                            @foreach (File::glob('images/ga_procurement_and_admin/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'visa-and-recruitment')
                            @foreach (File::glob('images/visa_and_recruitment/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'hr')
                            @foreach (File::glob('images/hr/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'oceanic-and-ms')
                            @foreach (File::glob('images/oceanic/pb/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @endif
                    </div>



                </div>

                {{-- RED CARPET --}}
                <div class="content" id="red_carpet">
                    <div class="mt-10 text-center">
                        <h1 class="text-xl">For High Resolution Photos</h1><br>
                        <a class="text-xl bg-rose-600 text-yellow-50 px-10 py-3" target="__blank" href="
                            @if($media->slug == 'marketing') {{-- marketing --}}
                                //drive.google.com/drive/folders/1KmXjVmuxn0PFfXTKICAL3oVHbJ8BEsJC?usp=sharing
                            @elseif($media->slug == 'cs-and-operation')
                                //drive.google.com/drive/folders/1HJ9B44oDR3NGtpMIQaPqcHpCKGZ7pI0r?usp=sharing
                            @elseif($media->slug == 'bhg-and-telfa')
                                //drive.google.com/drive/folders/1OP-FlPV-MQDnnwRxNS3R1R7QkgI7nZgo?usp=sharing
                            @elseif($media->slug == 'committee')
                                //drive.google.com/drive/folders/1l1dBYErhLjoD6HM3PTYXsymC3cUYdHt5?usp=sharing
                            @elseif($media->slug == 'it')
                                //drive.google.com/drive/folders/1Buuoy8hoICS-Wr2QLws-gVs8F0q0E0c6?usp=sharing
                            @elseif($media->slug == 'j9')
                                //drive.google.com/drive/folders/1Rja5AHz6o6CMnHXzLYNv62y_4anqhpLZ?usp=sharing
                            @elseif($media->slug == 'ga-procurement-and-admin')
                                //drive.google.com/drive/folders/1RqhTii-tK9RW1CGL5DDqGEspuaZ3-nrC?usp=sharing
                            @elseif($media->slug == 'visa-and-recruitment')
                                //drive.google.com/drive/folders/1cPpoRt2aWCaf2LHaqAEbioMSdi5bTEwm?usp=sharing
                            @elseif($media->slug == 'hr')
                                //drive.google.com/drive/folders/1GUNG6YStvU3mOgHKQ-uvXc7mTTbayaeK?usp=sharing
                            @elseif($media->slug == 'legal')
                                //drive.google.com/drive/folders/1_CEcQzuDQ8gNF25JdeIxf2Muif7f4N6S?usp=sharing
                            @elseif($media->slug == 'oceanic-and-ms')
                                //drive.google.com/drive/folders/11I1adOiIZ6RLwrYv9w5OQy4W104DzwJC?usp=sharing
                            @endif
                        ">CLICK HERE</a>
                    </div>


                    <div class="w-full mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @if($media->slug == 'marketing') {{-- marketing --}}
                            @foreach (File::glob('images/marketing/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'cs-and-operation')
                            @foreach (File::glob('images/cs_and_operation/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'bhg-and-telfa')
                            @foreach (File::glob('images/bhg_and_telfa/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'committee')
                            @foreach (File::glob('images/committee/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'it')
                            @foreach (File::glob('images/it/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'j9')
                            @foreach (File::glob('images/j9/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'ga-procurement-and-admin')
                            @foreach (File::glob('images/ga_procurement_and_admin/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'visa-and-recruitment')
                            @foreach (File::glob('images/visa_and_recruitment/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'hr')
                            @foreach (File::glob('images/hr/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'legal')
                            @foreach (File::glob('images/legal/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @elseif($media->slug == 'oceanic-and-ms')
                            @foreach (File::glob('images/oceanic/rc/*') as $file)
                                <img src="{{ url($file) }}">
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>


        

      
    </div>
@endsection