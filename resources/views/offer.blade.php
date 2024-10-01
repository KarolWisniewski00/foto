@extends('layouts.foto')

@section('content')
<div>
    
    <div class="bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 gap-5 py-5">
        <h1 class="font-bold md:leading-tight text-white text-3xl text-center">Zdjęcia</h1>
        <div class="grid grid-cols-2 grid-rows-2 gap-4 w-full mt-5 px-4 md:px-0">
            <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                    Studyjne
                    </span>
                    <p class="text-xs text-zinc-400">
                        Studyjne Ślubne, komunijne, roczne, chrzest, wizytowe.
                    </p>
                </div>
            </div>
            <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                        Reportażowe
                    </span>
                </div>
            </div>
            <div class="row-start-2 h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                        Reklamowe
                    </span>
                </div>
            </div>
            <div class="row-start-2 h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                        Do dokumentów
                        <span class="text-red-500">
                        w 5 minut sam możesz wybrać najlepsze ujęcie
                        </span>
                    </span>
                    <p class="text-xs text-zinc-400">
                        Paszportowe, dowodowe, legtymacyjne, dyplomowe 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 gap-5 py-5">
        <h1 class="font-bold md:leading-tight text-white text-3xl text-center">Inne</h1>
        <div class="grid grid-cols-2 grid-rows-3 gap-4 w-full mt-5 px-4 md:px-0">
            <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                        Reprodukcje i retusz zniszczonych zdjęć
                    </span>
                </div>
            </div>
            <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                        Skanowanie i archiwizacja zdjęć i negatywów
                    </span>
                </div>
            </div>
            <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                    Fotogadżety z Twoim zdjęciem: kubki, koszulki, poszewki, puzzle, breloczki
                    </span>
                </div>
            </div>
            <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                        Archiwizacja kaset VHS,VHS-C, HI-8, miniDV i inne na DVD i Pendrive
                    </span>
                </div>
            </div>
            <div class="col-span-2 h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                <div>
                    <span class="font-semibold text-lg text-white">
                    Zdjęcia z plików - aparatów, telefonów komórkowych, kart pamięci, pendrive - również przez internet
                    </span>
                </div>
            </div>
        </div>
        <div class="rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4">
                <a href="{{route('form.create')}}"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-red-600 text-zinc-50 hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-upload mr-2"></i>Wyślij zdjęcia do wywołania przez internet
                </a>
            </div>
    </div>
    <div class="bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 gap-5 py-5">
        <h1 class="font-bold md:leading-tight text-white text-3xl text-center">OFERTA ŚLUBNO-WESELNA</h1>
        <div class="bg-zinc-900 relative py-5 px-4 md:px-0">
            <!-- Header -->
            <div class="hidden lg:block sticky top-0 start-0 py-2 bg-zinc-900">
                <!-- Grid -->
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-2">
                        <!-- Header -->
                        <div class="h-full">
                            <!-- Możesz dodać logo lub inny content -->
                        </div>
                        <!-- End Header -->
                    </div>
                    <!-- End Col -->

                    <div class="col-span-1">
                        <!-- Free Plan -->
                        <div class="h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                            <div>
                                <span class="font-semibold text-lg text-white">
                                    Pakiet Mini
                                </span>
                                <p class="text-xs text-zinc-400">
                                    Budżetowy
                                </p>
                            </div>
                        </div>
                        <!-- End Free Plan -->
                    </div>
                    <!-- End Col -->

                    <div class="col-span-1">
                        <!-- Standard Plan -->
                        <div class="h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                            <div>
                                <span class="font-semibold text-lg text-white">
                                    Standard
                                </span>
                                <p class="text-xs text-zinc-400">
                                    Bestseller
                                </p>
                            </div>
                        </div>
                        <!-- End Standard Plan -->
                    </div>
                    <!-- End Col -->

                    <div class="col-span-1">
                        <!-- Standard Plus Plan -->
                        <div class="h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                            <div>
                                <span class="font-semibold text-lg text-white">
                                    Pakiet Standard Plus
                                </span>
                                <p class="text-xs text-zinc-400">
                                    Powiększony
                                </p>
                            </div>
                        </div>
                        <!-- End Standard Plus Plan -->
                    </div>
                    <!-- End Col -->

                    <div class="col-span-1">
                        <!-- Standard 2000 Plan -->
                        <div class="h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                            <div>
                                <span class="font-semibold text-lg text-white">
                                    Pakiet Standard 2000
                                </span>
                                <p class="text-xs text-zinc-400">
                                    Premium
                                </p>
                            </div>
                        </div>
                        <!-- End Standard 2000 Plan -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Header -->

            <!-- Section -->
            <div class="space-y-4 lg:space-y-0">
                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 lg:py-3">
                        <span class="text-lg font-semibold text-zinc-100 ">
                            Zawiera
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->

                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Sesja studyjna lub plenerowa ( w dniu ślubu lub w innym dogodnym terminie )
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-t border-zinc-700 rounded-t-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 md:border-x md:border-t md:border-zinc-700 md:rounded-t-xl ">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 md:border-x md:border-t md:border-zinc-700 md:rounded-t-xl ">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 rounded-b-xl  md:border-t  md:rounded-t-xl md:rounded-b-none ">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->

                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Foto-Książka (wg. indywidualnego projektu)
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-t border-zinc-700 rounded-t-xl md:rounded-t-none md:border-t-0">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 rounded-b-xl md:rounded-b-none">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->

                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Portret na płótnie
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 rounded-b-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 rounded-b-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 rounded-b-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700 rounded-b-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->
            </div>
            <!-- End Section -->



            <!-- Section -->
            <div class="mt-6 space-y-4 lg:space-y-0">
                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 lg:py-3">
                        <span class="text-lg font-semibold text-zinc-800 ">
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->

                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Płyta CD/DVD z Waszymi zdjęciami
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-t border-zinc-700 rounded-t-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-t border-zinc-700 rounded-t-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-t border-zinc-700 rounded-t-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-t border-zinc-700 rounded-t-xl">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->
                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Przygotowania w domu i Błogosławieństwo
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->
                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Reportaż z ceremoni Ślubnej
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->

                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Reportaż z przyjęcia weselnego do pierwszego tańca lub do tortu
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End List -->
                <!-- List -->
                <ul class="grid lg:grid-cols-6 lg:gap-6">
                    <!-- Item -->
                    <li class="lg:col-span-2 pb-1.5 lg:py-3">
                        <span class="text-sm text-zinc-100 ">
                            Reportaż z przyjęcia weselnego do oczepin
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Pakiet Mini
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 border-x border-zinc-700">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard 2000
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-red-600 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                
                <!-- End List -->
            </div>
            <!-- End Section -->
        </div>

    </div>
</div>
@endsection