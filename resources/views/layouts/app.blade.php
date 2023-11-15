<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YEP - La Liga Filipina</title>

    {{-- <style>
        @font-face {
            font-family: 'Augusta';
            src: url('{{ asset("fonts/Augusta-Regular.woff2") }}') format('woff2'),
                url('{{ asset("fonts/Augusta-Regular.woff") }}') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Chapaza';
            src: url('{{ asset("fonts/Chapaza-Regular.woff2") }}') format('woff2'),
                url('{{ asset("fonts/Chapaza-Regular.woff") }}') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
    </style> --}}

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    
    <main>
        <div class="max-w-screen-xl mx-auto xl:px-0 lg:px-4 px-4">
            @yield('contents')
        </div>
    </main>

    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>