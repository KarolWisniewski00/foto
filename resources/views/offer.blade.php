@extends('layouts.foto')

@section('content')
<div class="px-3 lg:px-0">
    <div class="px-3 lg:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:flex-row md:justify-between gap-3 md:gap-5">
        <div class="flex flex-col justify-center py-3 w-full">
            <h1 class="font-bold md:leading-tight text-zinc-200 text-3xl text-center my-2">ZDJĘCIA</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-4 md:grid-rows-2 gap-5 w-full mt-5 md:px-0 mb-5">
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
                <div class="row-start-4 md:row-start-1 h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reportażowe
                        </span>
                    </div>
                </div>
                <div class="row-start-3 md:row-start-2 h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reklamowe
                        </span>
                    </div>
                </div>
                <div class="row-start-2 md:row-start-2 h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                        Do dokumentów
                         
                        </span>
                        <p class="font-semibold text-lg text-white">Paszportowe, Dowodowe, Legitymacyjne</p>
                        <p class="text-xs text-red-500">
                            Zdjęcia z retuszem - gotowe na poczekaniu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-3 lg:px-0 sm:px-4 lg:px-8 bg-zinc-900 flex flex-col md:justify-between rounded-lg max-w-4xl mx-auto mt-5  gap-3 md:gap-5 py-5">
        <div class="flex flex-col justify-center py-3 w-full">
            <h1 class="font-bold md:leading-tight text-white text-3xl text-center my-2">INNE</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-3 gap-5 w-full mt-5 mb-5">
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
                <div class="col-span-1 md:col-span-2 h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Zdjęcia z plików - aparatów, telefonów komórkowych, kart pamięci, pendrive - również przez internet
                        </span>
                    </div>
                </div>
            </div>
            <div class="rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4 w-full">
                <a href="{{route('form.create')}}"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-red-600 text-zinc-50 hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-upload mr-2"></i>Wyślij zdjęcia do wywołania przez internet
                </a>
            </div>
        </div>
    </div>
    <div class="px-3 lg:px-0 sm:px-4 lg:px-8 bg-zinc-900 flex flex-col md:justify-between rounded-lg max-w-4xl mx-auto mt-5  gap-3 md:gap-5 py-5">
        <div class="flex flex-col justify-center py-3 w-full gap-5">
            <h1 class="font-bold md:leading-tight text-white text-3xl text-center my-2">OFERTA ŚLUBNO-WESELNA</h1>
            <h1 class="font-bold md:leading-tight text-white text-xl my-2">PAKIET MINI</h1>
            <div class="grid grid-cols-1 gap-5 w-full mt-5 md:px-0 mb-5">
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Sesja studyjna lub plenerowa
                        </span>
                        <p class="text-xs text-zinc-400">
                            w dniu ślubu lub w innym dogodnym terminie
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Foto-Książka
                        </span>
                        <p class="text-xs text-zinc-400">
                        wg. indywidualnego projektu
                        </p>
                    </div>
            
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Portret na płótnie
                        </span>
                    </div>
                </div>
                
                
            </div>
            <h1 class="font-bold md:leading-tight text-white text-xl my-2">PAKIET STANDARD</h1>
            <div class="grid grid-cols-1 gap-5 w-full mt-5 md:px-0 mb-5">
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Sesja studyjna lub plenerowa
                        </span>
                        <p class="text-xs text-zinc-400">
                            w dniu ślubu lub w innym dogodnym terminie
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Foto-Książka
                        </span>
                        <p class="text-xs text-zinc-400">
                        wg. indywidualnego projektu
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Portret na płótnie
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Płyta CD/DVD z Waszymi zdjęciami
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Przygotowania w domu i Błogosławieństwo
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reportaż z ceremoni Ślubnej
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reportaż z przyjęcia weselnego
                        </span>
                        <p class="text-xs text-zinc-400">
                            do pierwszego tańca lub do tortu
                        </p>
                    </div>
                </div>
                
            </div>

            <h1 class="font-bold md:leading-tight text-white text-xl my-2">PAKIET STANDARD PLUS</h1>
            <div class="grid grid-cols-1 gap-5 w-full mt-5 md:px-0 mb-5">
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Sesja studyjna lub plenerowa
                        </span>
                        <p class="text-xs text-zinc-400">
                            w dniu ślubu lub w innym dogodnym terminie
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Foto-Książka
                        </span>
                        <p class="text-xs text-zinc-400">
                        wg. indywidualnego projektu
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Portret na płótnie
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Płyta CD/DVD z Waszymi zdjęciami
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Przygotowania w domu i Błogosławieństwo
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reportaż z ceremoni Ślubnej
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reportaż z przyjęcia weselnego
                        </span>
                        <p class="text-xs text-zinc-400">
                            do oczepin
                        </p>
                    </div>
                </div>
                
            </div>
            <h1 class="font-bold md:leading-tight text-white text-xl my-2">PAKIET STANDARD 2000</h1>
            <div class="grid grid-cols-1 gap-5 w-full mt-5 md:px-0 mb-5">
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Sesja studyjna lub plenerowa
                        </span>
                        <p class="text-xs text-zinc-400">
                            w dniu ślubu lub w innym dogodnym terminie
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Foto-Książka
                        </span>
                        <p class="text-xs text-zinc-400">
                        wg. indywidualnego projektu
                        </p>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Portret na płótnie
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Płyta CD/DVD z Waszymi zdjęciami
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Przygotowania w domu i Błogosławieństwo
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reportaż z ceremoni Ślubnej
                        </span>
                    </div>
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Reportaż z przyjęcia weselnego
                        </span>
                        <p class="text-xs text-zinc-400">
                            do pierwszego tańca lub do tortu
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection