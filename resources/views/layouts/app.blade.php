<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YEP - La Liga Filipina</title>
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

    <script>
        const tabs = document.querySelector(".wrapper");
        const tabButton = document.querySelectorAll(".tab-button");
        const contents = document.querySelectorAll(".content");

        tabs.onclick = e => {
        const id = e.target.dataset.id;
        if (id) {
            tabButton.forEach(btn => {
            btn.classList.remove("active");
            });
            e.target.classList.add("active");

            contents.forEach(content => {
            content.classList.remove("active");
            });
            const element = document.getElementById(id);
            element.classList.add("active");
        }
        }
    </script>


</body>
</html>