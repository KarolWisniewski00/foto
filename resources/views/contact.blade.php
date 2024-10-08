@extends('layouts.foto')

@section('content')
<div class="px-3 lg:px-0">
    <div class="px-3 lg:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:justify-between gap-3 md:gap-5 pb-5">
        <div class="flex flex-col justify-center py-3">
            <h1 class="font-bold md:leading-tight text-white text-3xl text-center my-2">FOTO RABSZTYN</h1>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex flex-col justify-center py-3 md:w-1/2">
                <p class="text-white text-center md:text-start">ul. Bytomska 94</p>
                <p class="text-white text-center md:text-start mb-5 "><span class="text-zinc-400">41-940</span> Piekary Śląskie</p>
                <a href="tel:322885532" class="hover:text-yellow-400 text-white text-center md:text-start"><i class="fa-solid fa-phone mr-2"></i>32 288 55 32</a>
                <a href="tel:605761435" class="hover:text-yellow-400 text-white text-center md:text-start mb-5"><i class="fa-solid fa-mobile-screen-button mr-3"></i>605 761 435</a>
                <a href="mailto:studio@fotorabsztyn.com" class="hover:text-yellow-400 text-white text-center md:text-start mb-5"><i class="fa-regular fa-envelope mr-2"></i>studio@fotorabsztyn.com</a>
                <h2 class="text-white text-xl text-center md:text-start">Godziny otwarcia</h2>
                <p class="text-white text-center md:text-start">Pon. - Pt. 8.00 - 16.00</p>
                <p class="text-zinc-400 text-center md:text-start">Sob. 9.00 - 12.00</p>
            </div>
            <iframe class="my-3 rounded-lg md:w-1/2 md:mx-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14393.214556514458!2d18.928876507036165!3d50.37802296315436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d358177e47ed%3A0x92508bacd1d6c156!2sFoto-Rabsztyn.%20Us%C5%82ugi%20fotograficzne!5e0!3m2!1spl!2spl!4v1726688986031!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <div class="px-3 lg:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 flex flex-col gap-5">
        <div class="flex flex-col justify-center py-3">
            <div class="rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 flex flex-row gap-5 items-center justify-center mb-5">
                <a href="{{route('form.create')}}"
                    class="text-center md:text-start py-3 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-upload mr-2"></i>Wyślij zdjęcia do wywołania przez internet
                </a>
            </div>
        </div>
    </div>
</div>
@endsection