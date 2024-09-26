<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <!-- Dropzone.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- Dropzone.js JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="bg-zinc-950">
    <header class="flex flex-wrap sm:justify-center flex-col sm:flex-nowrap w-full text-sm">
        <div class="w-full max-w-[85rem] mx-auto max-h-[7rem] overflow-hidden items-center justify-center">
            <img class="w-full h-full" src="{{asset('photo/header.jpg')}}" style="transform: translateY(-30%);">
        </div>
        <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-center my-8">

            <div class="flex flex-col md:flex-row text-center items-center gap-4 mt-0 justify-center">
                <a class="
                @if(request()->routeIs('index'))
                font-medium text-yellow-400 focus:outline-none sm:text-sm md:text-xl
                @else
                font-medium text-zinc-50 hover:text-yellow-400 focus:outline-none focus:text-yellow-400 sm:text-sm md:text-xl
                @endif
                "
                    href="{{route('index')}}">
                    Start
                </a>
                <a class="
                @if(request()->routeIs('offer'))
                font-medium text-yellow-400 focus:outline-none sm:text-sm md:text-xl
                @else
                font-medium text-zinc-50 hover:text-yellow-400 focus:outline-none focus:text-yellow-400 sm:text-sm md:text-xl
                @endif
                "
                    href="{{route('offer')}}">
                    Oferta
                </a>
                <a class="
                @if(request()->routeIs('form.create'))
                font-medium text-yellow-400 focus:outline-none sm:text-sm md:text-xl
                @else
                font-medium text-zinc-50 hover:text-yellow-400 focus:outline-none focus:text-yellow-400 sm:text-sm md:text-xl
                @endif
                "
                    href="{{route('form.create')}}">
                    Wyślij zdjęcia do wywołania
                </a>
                <a class="
                @if(request()->routeIs('contact'))
                font-medium text-yellow-400 focus:outline-none sm:text-sm md:text-xl
                @else
                font-medium text-zinc-50 hover:text-yellow-400 focus:outline-none focus:text-yellow-400 sm:text-sm md:text-xl
                @endif
                "
                    href="{{route('contact')}}">
                    Kontakt
                </a>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
        <div class="py-6 border-t border-zinc-400">
            <div class="flex flex-wrap justify-between items-center gap-2">
                <div>
                    <a href="https://wibest.pl" class="text-xs text-zinc-50">
                        © 2024 WIBEST
                    </a>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </footer>

</body>

</html>