@extends('layouts.foto')

@section('content')
<div class="px-4 md:px-0">
    <div class="px-4 md:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-4 flex flex-col md:flex-row gap-4">
        <img src="{{asset('photo/main.jpg')}}" class="rounded-lg mt-4 md:my-4 w-auto h-full">
        <div class="flex flex-col justify-center">

        <h1 class="font-bold md:leading-tight text-zinc-50 text-3xl text-center">FOTO RABSZTYN</h1>
            
            <p class="text-zinc-50 py-4 text-center md:text-start">
                Firma została założona w 1966 r. przez Erwina Rabsztyn.
            </p>
            <p class="text-zinc-50 py-4 text-center md:text-start">
                W ciągu tych kilkudziesięciu lat przeszła wiele zmian, począwszy od fotografii
                tradycyjnej czarno-białej
                poprzez fotografie kolorową, aż do dzisiejszej fotografii cyfrowej, dającej o wiele więcej
                możliwości.
            </p>
            <p class="text-zinc-50 py-4 text-center md:text-start">
                W 1990 r. firma Foto-Rabsztyn zaczęła również zajmować się wideofilmowaniem.
            </p>
        </div>
    </div>
    <div class="px-4 md:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4">
        <div class="flex flex-col">
            <p class="text-zinc-50 py-4 text-center md:text-start">
                Dziś zajmujemy się fotografią studyjną, reportażową, reklamową, cyfrową obróbką zdjęć, skanowaniem,
                wydrukiem, wideofilmowaniem, jak również sprzedażą art. fotograficznych.
                - Mamy w ofercie również fogadżety, zdjęcia na porcelance, wydruki na płótnie.
            </p>
            <div class="rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4">
                <a href="{{route('form.create')}}"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-red-600 text-zinc-50 hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-upload mr-2"></i>Wyślij zdjęcia do wywołania przez internet
                </a>
            </div>
        </div>
    </div>
    <div class="px-4 md:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 flex flex-col items-center justify-center">
        <h1 class="my-4 text-zinc-50 text-3xl">Akceptujemy płatności</h1>
        <div class="flex flex-row gap-2 md:gap-5">
            <div class="flex w-full items-center justify-center flex-col">
                <div>
                    <ul class="space-y-4 text-sm self-start mb-4">
                        <li class="flex gap-x-4">
                            <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-zinc-50">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="text-zinc-50 md:text-xl">
                                Visa
                            </span>
                        </li>
                        <li class="flex gap-x-4">
                            <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-zinc-50">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="text-zinc-50 md:text-xl">
                                Maestro
                            </span>
                        </li>

                        <li class="flex gap-x-4">
                            <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-zinc-50">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="text-zinc-50 md:text-xl">
                                Mastercard
                            </span>
                        </li>
                        <li class="flex gap-x-4">
                            <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-zinc-50">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </span>
                            <span class="text-zinc-50 md:text-xl">
                                Blik
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-8 w-full">
                <div class="overflow-hidden">
                    <div class="flex justify-center">
                        <div class="w-36 h-24 bg-gradient-to-r from-yellow-700 via-yellow-800 to-yellow-900 rounded-lg">
                            <div class="flex justify-between m-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="3" y="5" width="18" height="14" rx="3" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                    <line x1="7" y1="15" x2="7.01" y2="15" />
                                    <line x1="11" y1="15" x2="13" y2="15" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="9.5" cy="9.5" r="5.5" fill="#fff" />
                                    <circle cx="14.5" cy="14.5" r="5.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection