<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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