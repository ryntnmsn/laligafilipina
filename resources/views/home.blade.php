@extends('layouts.app')

@section('contents')
    <div class="mb-10">
        <div class="text-center space-y-4">
            <div>
                <h1 class="text-default blink-bg font-bold uppercase py-5 text-3xl md:text-4xl lg:text-6xl text-center">
                    Revolutionaries Reimagined
                </h1>
            </div>
            <div>
                <a href="{{ route('media.index') }}" class="bg-default text-yellow-50 py-5 px-10 inline-block">CLICK HERE</a>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-4 mt-10 border-y-4 py-10 border-default">
            <div class="flex-none w-full lg:w-72">
                <h1 class="text-default font-bold text-xl">
                    Red Carpet Glam - Portrait Gallery for All Departments
                </h1>
                <a href="{{ route('media.index') }}">
                    <img src="{{ url('images/departments.jpg') }}" alt="" loading='lazy'>
                </a>
                <p class="text-default text-justify">
                    Step back in time and relive the excitement and elegance of the prestigious YEP 2023 event with our exclusive Red Carpet Portrait Gallery. From high fashion to unique designs, this gallery showcases the style and flair exhibited by all our departments during this memorable evening.
                    <br><br>
                    As guests arrived at the exquisite venue, the red carpet served as a stage for celebrities, executives, and influencers to showcase their stunning attire. The portraits capture the essence of each individual's fashion choices, reflecting their personality and creativity. From the breathtaking dresses that cascaded down the red carpet to the crisp tuxedos that exuded sophistication, the gallery is a testament to the exquisite taste and fashion prowess of YEP's attendees.
                    <br><br>
                    Let the beauty and style of YEP transport you back to that unforgettable night, reminding you of the impressive work accomplished by the incredible departments that make YEP the success it is.
                </p>
            </div>
            <div class="grow py-10 md:py-0">
                <a href="{{ route('event.awardees') }}">
                    <img src="{{ url('images/awardees.jpg') }}" alt="" loading='lazy'>
                </a>
                <h1 class="text-default font-bold text-4xl mb-5 pt-4">
                    Celebrating Service Excellence - Tributes to Our Loyal Awardees
                </h1>
                <p class="text-default text-justify text-xl font-bold">
                    Step back in time and relive the heartwarming and meaningful moments where we paid tribute to the dedicated individuals who exemplify committed service and excellence. Our collection of tribute videos serves as a testament to the unwavering loyalty and outstanding achievements of our loyal awardees.
                    
                    <br><br>
                    The tribute videos pay homage to the values that have made our awardees exemplary figures within our organization and beyond. They capture their remarkable stories, highlighting the challenges they have overcome, the milestones they have achieved, and the lives they have touched along the way. These videos serve as a reminder of the power of perseverance, passion, and dedication in driving meaningful change and making a lasting impact.
                    
                </p>
            </div>
            <div class="flex-none w-full lg:w-72">
                <h1 class="text-default font-bold text-xl">
                    Watch Us Dance! - Indak ng Lahi Performances
                </h1>
                <a href="{{route('event.games.indak')}}">
                    <img src="{{ url('images/dance_contest.jpg') }}" alt="" loading='lazy'>
                </a>
                <p class="text-default text-justify">
                    Re-experience the energy and excitement that filled the air as our talented dancers brought traditional dances to life with their captivating performances.
                    <br><br>
                    The Indak ng Lahi performances are more than just a display of impressive choreography; they serve as a testament to our commitment to preserving and promoting our cultural heritage. Through these dances, we pay homage to the ancestors who have passed down these traditions from generation to generation. We invite you to join us in celebrating the beauty of our cultural heritage and the power of dance to unite and uplift.
                    <br><br>
                    Don't miss the chance to witness the magic of our Indak ng Lahi performances. Prepare to be captivated by the rhythmic movements, awe-inspiring costumes, and the sheer passion exuded by our talented dancers. Immerse yourself in the vibrant tapestry of our cultural legacy and let the Indak ng Lahi performances ignite your spirit and leave you in awe of the timeless beauty and artistry of our traditions.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-10">
        <iframe width="100%" height="640" src="https://www.youtube.com/embed/ENJ_sNx7N60?si=GDgNGrOpxv80OQLJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="mb-10">
        <iframe width="100%" height="640" src="https://www.youtube.com/embed/ka-BpkMwJTw?si=qsoJ5sRaw1PKdd3d" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
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
                    <div class="text-amber-50 bg-default text-2xl flex-1 text-center py-6 flex items-center justify-center relative">
                        <a href="{{route('dress.index')}}" class="absolute top-0 left-0 bottom-0 right-0 flex justify-center items-center">Our Theme</a>
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