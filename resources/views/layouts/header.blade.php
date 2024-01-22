<nav class="max-w-screen-xl mx-auto md:py-2 py-0 border-0 md:border-t-4 md:border-b-4 border-default mt-0 md:mt-4">
    <div class="md:flex flex-col hidden justify-center py-6 border-t-2 border-default">
        <div class="text-center">
            <h1 class="text-8xl text-default font-augusta">La Solidaridad</h1>
        </div>
        <div class="flex justify-center space-x-8 font-augusta text-md md:text-2xl">
            <div class="text-default">YEP 2023</div>
            <div class="text-default">Disyembre 22, 2023</div>
            <div class="text-default">La Liga Filipina</div>
        </div>
    </div>
    <div class="flex flex-wrap items-center justify-between border-b-2 border-default border-t-2">
        <a href="/" class="flex md:hidden items-center space-x-3 rtl:space-x-reverse  pl-4 ">
            <div class="text-left">
                <span class="self-center text-3xl font-semibold whitespace-nowrap text-default font-augusta">La Solidaridad</span>
            </div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-default rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block" id="navbar-default">
            <ul class="font-medium flex flex-col md:flex-row space-x-0 font-chapaza">
                <li class="flex-1 text-center hover:bg-default hover:text-amber-50 duration-200 ease-in-out {{ request()->is('/') ? 'bg-default text-amber-50' : '' }}">
                    <a href="{{ route('home.index') }}" class="block py-3 px-3">Home</a>
                </li>
                <li class="flex-1 text-center hover:bg-default hover:text-amber-50 duration-200 ease-in-out {{ request()->is('dress') ? 'bg-default text-amber-50' : '' }}">
                    <a href="{{ route('dress.index') }}" class="block py-3 px-3">Dress Code</a>
                </li>
                <li class="flex-1 text-center hover:bg-default hover:text-amber-50 duration-200 ease-in-out {{ request()->is('games') ? 'bg-default text-amber-50' : '' }}">
                    <a href="{{ route('games.index') }}" class="block py-3 px-3">Games</a>
                </li>
                <li class="flex-1 text-center hover:bg-default hover:text-amber-50 duration-200 ease-in-out {{ request()->is('media*') ? 'bg-default text-amber-50' : '' }}">
                    <a href="{{ route('media.index') }}" class="block py-3 px-3">Media</a>
                </li>
                <li class="flex-1 text-center hover:bg-default hover:text-amber-50 duration-200 ease-in-out {{ request()->is('venue') ? 'bg-default text-amber-50' : '' }}">
                    <a href="{{ route('venue.index') }}" class="block py-3 px-3">Venue</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex space-x-4 md:hidden font-augusta pl-4 border-t-4 border-b-4 border-default mt-1 bg-default text-amber-50 items-center">
        <div>YEP 2023</div>
        <div>December 22, 2023</div>
        <div>La Liga Filipina</div>
    </div>
  </nav>
  