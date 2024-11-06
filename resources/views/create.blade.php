@extends('layouts.foto')

@section('content')
@csrf
<div class="px-3 lg:px-0">
    <div class="px-3 lg:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:flex-row md:justify-between gap-3 md:gap-5">
        <div class="flex flex-col justify-center py-3 w-full">
            <h1 class="del font-bold md:leading-tight text-zinc-200 text-3xl text-center my-2">PODSUMOWANIE ZAMÓWIENIA</h1>
            <h1 class="del font-bold md:leading-tight text-white text-xl my-2 text-center">Wybierz kolejne zdjęcia, zmień rozmiar lub ilość odbitek.</h1>
            <div class="del grid grid-cols-1 gap-4 w-full my-2">
                <div>
                    <button type="button" class="hover:cursor-default w-full h-full p-4 flex flex-row justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                        <div class="w-1/2 flex flex-col items-start">
                            <span class="font-semibold text-lg text-white">
                                Nazwa
                            </span>
                            <p class="text-xs text-zinc-400">
                                1,20 zł/odbitka
                            </p>
                        </div>
                        <div class="w-1/2 flex flex-col items-end">
                            <span class="font-semibold text-lg text-white">
                                1,20 zł
                            </span>
                        </div>
                    </button>
                </div>
                <div>
                    <button type="button" class="hover:cursor-default w-full h-full p-4 flex flex-row justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                        <div class="w-1/2 flex flex-col items-start">
                            <span class="font-semibold text-lg text-white">
                                RAZEM
                            </span>
                            <p class="text-xs text-zinc-400">
                                Odbitki <span id="resume-count"></span> szt
                            </p>
                        </div>
                        <div class="w-1/2 flex flex-col items-end">
                            <span class="font-semibold text-lg text-white">
                                6,00 zł
                            </span>
                        </div>
                    </button>
                </div>
            </div>
            <h1 class="del font-bold md:leading-tight text-zinc-200 text-3xl text-center my-2">DOSTAWA I PŁATNOŚĆ</h1>
            <div class="del grid grid-cols-1 gap-4 w-full my-2">
                <div>
                    <input name="ending2" type="radio" id="ending" value="1" checked class="hidden peer">
                    <label for="ending" class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer hover:bg-zinc-900">
                        <div>
                            <span class="font-semibold text-lg text-white">
                                Odbiór osobisty
                            </span>
                        </div>
                        <div>
                            <p class="text-xs text-zinc-400">
                                W godzinach pracy FOTO RABSZTYN
                            </p>
                        </div>
                    </label>
                </div>

            </div>
            <div class="del">
                <label for="email" class="block my-2 text-sm font-medium text-white">Email</label>
                <input type="email" id="email" class="my-2 bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <div class="del">
                <label for="phone" class="block my-2 text-sm font-medium text-white">Numer telefonu</label>
                <input type="text" id="phone" class=" my-2 bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <div class="del">
                <label for="phone" class="block my-2 text-sm font-medium text-white">Imię i nazwisko</label>
                <input type="text" id="phone" class=" my-2 bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <div class="del rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4 w-full">
                <button type="button"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-green-600 text-green-50 hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-check mr-2"></i>Złóż zamówienie
                </button>
                <button type="button"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-xmark mr-2"></i>Anuluj zamówienie
                </button>
            </div>
            <div class="del rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4 w-full">
                <button type="button" id="openDrawerBtn"
                    class="params text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-purple-600 text-purple-50 hover:bg-purple-700 focus:outline-none focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-forward mr-2"></i>Zmień parametry następnych zdjęć
                </button>
                <button type="button"
                    class="params text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-layer-group mr-2"></i>Edytuj wszystkie
                </button>
            </div>
            <div id="photos" class="del grid grid-cols-1 md:grid-cols-3 gap-4">
                

            </div>
            <form id="myid" enctype="multipart/form-data" method="POST" action="{{ route('form.store') }}" class="my-3 grid-cols-5 gap-4 dropzone w-full border-2 border-zinc-700 border-dashed rounded-lg cursor-pointer bg-zinc-900">
                @csrf
                <input type="hidden" name="email" id="emailform" value=" ">
                <input type="hidden" name="phone" id="phoneform" value=" ">
                <input type="hidden" name="format" value="wkrótce">
                <input type="hidden" name="ending" value="wkrótce">
                <label for="dropzone-file">
                    <div data-dz-message class="dz-message flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-zinc-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-zinc-400"><span class="font-semibold">Kliknij aby przesłać</span> lub przeciągnij i upuść</p>
                        <p class="text-xs text-zinc-500">PNG, JPG</p>
                    </div>
                </label>
            </form>
            <div class="del rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4 w-full">
                <button type="button"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-green-600 text-green-50 hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-check mr-2"></i>Złóż zamówienie
                </button>
                <button type="button"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-xmark mr-2"></i>Anuluj zamówienie
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    Dropzone.autoDiscover = false; 
    // Zwraca widok zdjęcia z ustawieniami 
    function getCard(path)  {
     return `
     <div class="p-4 w-full h-full bg-zinc-800 rounded-lg border border-zinc-700 hover:bg-zinc-900">
                    <img class="" alt="" src="photo/${path}">
                    <div class="flex flex-col gap-4">
                        <div class="w-full">
                            <label for="countries" class="block mt-2 mb-4 text-sm font-medium text-white">Rozmiar</label>
                            <select id="countries" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>10x15 cm</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="countries" class="block mb-4 text-sm font-medium text-white">Wykończenie</label>
                            <select id="countries" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Błysk</option>
                                <option value="">Mat</option>
                            </select>
                        </div>
                        <div>
                            <label for="hs-trailing-button-add-on-multiple-add-ons" class="block mb4 text-sm font-medium text-white">Odbitki</label>
                            <div class="flex rounded-lg bg-zinc-800 border border-zinc-700 ">
                                <input type="text" value="1" id="hs-trailing-button-add-on-multiple-add-ons" name="hs-trailing-button-add-on-multiple-add-ons" class="text-white p-2.5 block w-full bg-zinc-800 text-sm focus:z-10 focus:ring-red-500 focus:border-red-500">
                                <button type="button" value="1" class="-ms-px py-4 px-4 font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-purple-600 text-purple-50 align-middle hover:bg-purple-700 focus:outline-none focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <button type="button" class="py-4 px-4 rounded-r-lg font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-zinc-600 text-zinc-50 align-middle hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <button type="button"
                            class="text-center md:text-start text-sm py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-trash-can mr-2"></i>Usuń
                        </button>
                    </div>
                </div>
     `
    }
    $(document).ready(function() {
    let csrf = $('input[name="_token"]');
    var resumeCounter = 0;


    uploader = new Dropzone(".dropzone",{
        url: "{{ route('form.store') }}", // Poprawny URL do obsługi uploadu
            maxFiles: 1000, // Maksymalna liczba plików
            maxFilesize: 50, // Maksymalny rozmiar pliku (MB)
            acceptedFiles: 'image/*', // Akceptowane typy plików
            dictDefaultMessage: "Przeciągnij i upuść zdjęcia tutaj lub kliknij, aby wybrać",
            headers: {
                '_token': csrf.val(),
            }, // Wsparcie dla tokenu CSRF w Laravel
            init: function() {
                this.on("success", function(file, response) {
                    console.log("response:", response['file_name']);
                    //pokazuje elementy
                    document.querySelectorAll('.del').forEach(element => {
                        element.classList.remove('hidden');
                    });  
                    //pokazywanie pełnego podglądu zdjęć
                    $('#photos').append(getCard(response['file_name']));
                    //licznik 
                    resumeCounter += 1;
                    $('#resume-count').html(resumeCounter);
                });
                this.on("error", function(file, response) {
                    console.log("Wystąpił błąd podczas przesyłania pliku:", response);
                    document.querySelectorAll('.del').forEach(element => {
                        element.classList.remove('hidden');
                    });
                });
            }
        });//end drop zone

        uploader.on("success", function(file,response) {
            console.log(response)
        });
    });
</script>

<div id="modalOverlay" class="fixed inset-0 bg-black opacity-50 hidden"></div>

<div id="drawer" class="fixed bottom-0 left-0 z-50 w-full hidden">
    <div class="grid h-full max-w-lg grid-cols-1 mx-auto py-3 w-full sm:w-fit px-4 sm:px-4 sm:px-8 sm:mt-5 h-fit bg-zinc-800 border-t border-zinc-700 rounded-t-lg">
        <div class="flex flex-col gap-4  w-full">
            <div class="flex flex-row justify-between gap-4 w-full">
                <h1 class="font-bold md:leading-tight text-white text-xl my-2 text-center">

                </h1>
                <button type="button" class="close text-center inline-flex justify-center items-center gap-x-2 bg-transparent text-zinc-400 hover:text-red-700 transition-all text-sm">
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>
            <div class="flex flex-row justify-between gap-4 w-full">
                <h1 class="font-bold md:leading-tight text-white text-xl my-2 text-center">
                    Zmień parametry następnych zdjęć
                </h1>
            </div>

            <div class="w-full">
                <label for="countries" class="block mt-2 mb-4 text-sm font-medium text-white">
                    Rozmiar
                </label>
                <select id="countries" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>
                        10x15 cm
                    </option>
                </select>
            </div>
            <div class="w-full">
                <label for="countries" class="block mb-4 text-sm font-medium text-white">
                    Wykończenie
                </label>
                <select id="countries" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>
                        Błysk</option>
                    <option value="">
                        Mat
                    </option>
                </select>
            </div>
            <div>
                <label for="hs-trailing-button-add-on-multiple-add-ons" class="block mb4 text-sm font-medium text-white">Odbitki</label>
                <div class="flex rounded-lg bg-zinc-800 border border-zinc-700 ">
                    <input type="text" id="hs-trailing-button-add-on-multiple-add-ons" name="hs-trailing-button-add-on-multiple-add-ons" class="text-white p-2.5 block w-full bg-zinc-800 text-sm focus:z-10 focus:ring-red-500 focus:border-red-500">
                    <button type="button" value="1" class="-ms-px py-4 px-4 font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-purple-600 text-purple-50 align-middle hover:bg-purple-700 focus:outline-none focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <button type="button" class="py-4 px-4 rounded-r-lg font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-zinc-600 text-zinc-50 align-middle hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="w-full rounded-lg max-w-4xl mx-auto flex flex-row gap-4 items-center justify-center">
                <button type="button"
                    class="close w-full h-full text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-green-600 text-green-50 hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-check mr-2"></i>Zapisz zmiany
                </button>
                <button type="button"
                    class="close w-full h-full text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-xmark mr-2"></i>Anuluj
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.del').addClass('hidden');
        
        // Pokazuje modal i przyciemnia resztę strony
        $('.params').on('click', function() {
            $('#modalOverlay').removeClass('hidden'); // Pokazuje tło
            $('#drawer').removeClass('hidden'); // Pokazuje modal
        });

        // Zamyka modal na kliknięcie "Anuluj" lub "X"
        $('.close').on('click', function() {
            $('#modalOverlay').addClass('hidden'); // Ukrywa tło
            $('#drawer').addClass('hidden'); // Ukrywa modal
        });

        // Zapisz zmiany nie robi nic w tej chwili
        $('#save').on('click', function() {
            // Obecnie brak akcji
        });
    });
</script>
@endsection