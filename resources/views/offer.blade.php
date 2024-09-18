@extends('layouts.foto')

@section('content')
<div>
    <div class="bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 gap-5">
        <div class="max-w-2xl mx-auto text-center lg:mb-14 pt-14">
            <h1 class="text-2xl font-bold md:text-3xl md:leading-tight text-yellow-400 text-3xl">OFERTA ŚLUBNO-WESELNA</h1>
        </div>

        <div class="bg-zinc-900 relative pb-5">
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
                                <span class="font-semibold text-lg text-yellow-300">
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
                                <span class="font-semibold text-lg text-red-400">
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
                                <span class="font-semibold text-lg text-green-400">
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
                                <span class="font-semibold text-lg text-purple-400">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                            WIDEOFILMOWANIE
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                            Kamerzysta jest od momentu przygotowań w domu do oczepin (istnieje możliwość dłuższego filmowania)
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                            Profesjonalny montaż filmu po wcześniejszym uzgodnieniu szczegółów z Parą Młodą długość filmu 2-4 godziny
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                            3 płyty DVD z indywidualną okładką (napisy i zdjęcia)
                        </span>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
                        <div class="grid grid-cols-6 lg:block">
                            <span class="lg:hidden col-span-2 font-semibold text-sm text-zinc-100 ">
                                Standard Plus
                            </span>
                            <svg class="shrink-0 lg:mx-auto size-5 text-zinc-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                            </svg>
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center bg-zinc-800 ">
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
    <div class="bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 gap-5">
        <h1 class="text-yellow-400 text-3xl font-bold mb-5">
            <center>ZDJĘCIA</center>
        </h1>
        <div class="flex flex-col">
            <ul class="space-y-3 text-sm self-start">
                <li class="flex gap-x-3">
                    <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Studyjne: ślubne, komunijne, roczne, chrzest.
                    </span>
                </li>
                <li class="flex gap-x-3">
                    <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Do dokumentów: paszportowe, dowodowe, legtymacyjne, dyplomowe (techniką
                        cyfrową w 5 min - sam możesz wybrać najlepsze ujęcie)
                    </span>
                </li>
                <li class="flex gap-x-3">
                    <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Reportażowe
                    </span>
                </li>
                <li class="flex gap-x-3">
                    <span class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white mb-5">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Reklamowe
                    </span>
                </li>

            </ul>
        </div>
    </div>
    <div class="bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-5 gap-5">
        <h1 class="text-yellow-400 text-3xl font-bold mb-5">
            <center>INNE</center>
        </h1>
        <div class="flex flex-col">
            <ul class="space-y-3 text-sm self-start">
                <li class="flex gap-x-3">
                    <span
                        class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Reprodukcje i retusz zniszczonych zdjęć
                    </span>
                </li>
                <li class="flex gap-x-3">
                    <span
                        class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Skanowanie i archiwizacja zdjęć i negatywów
                    </span>
                </li>
                <li class="flex gap-x-3">
                    <span
                        class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Zdjęcia z plików i aparatów cyfrowych - również przez internet
                    </span>
                </li>
                <li class="flex gap-x-3">
                    <span
                        class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Archiwizacja kaset VHS,VHS-C, HI-8, miniDV i inne na DVD
                    </span>
                </li>
                <li class="flex gap-x-3">
                    <span
                        class="size-5 flex justify-center items-center rounded-full bg-yellow-600 text-white mb-5">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </span>
                    <span class="text-zinc-50">
                        Fotogadżety z Twoim zdjęciem:
                        kubki, koszulki, poszewki, puzzle, breloczki
                    </span>
                </li>
            </ul>
        </div>
    </div>

</div>
@endsection