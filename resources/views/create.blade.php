@extends('layouts.foto')

@section('content')
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
                    Zmień parametry wszystkich zdjęć
                </h1>
            </div>

            <div class="w-full">
                <label for="modal-size" class="block mt-2 mb-4 text-sm font-medium text-white">
                    Rozmiar
                </label>
                <select id="modal-size" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected value="10x15">
                        10x15 cm
                    </option>
                    <option value="13x18">13x18 cm</option>
                </select>
            </div>
            <div class="w-full">
                <label for="modal-ending" class="block mb-4 text-sm font-medium text-white">
                    Wykończenie
                </label>
                <select id="modal-ending" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected value="blysk">Błysk</option>
                    <option value="mat">Mat</option>
                </select>
            </div>
            <div>
                <label for="modal-count" class="block mb4 text-sm font-medium text-white">Odbitki</label>
                <div class="flex rounded-lg bg-zinc-800 border border-zinc-700 ">
                    <input value="1" type="text" id="modal-count" class="text-white p-2.5 block w-full bg-zinc-800 text-sm focus:z-10 focus:ring-red-500 focus:border-red-500">
                    <button type="button" value="1" class="-ms-px py-4 px-4 font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-purple-600 text-purple-50 align-middle hover:bg-purple-700 focus:outline-none focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <button type="button" class="py-4 px-4 rounded-r-lg font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-zinc-600 text-zinc-50 align-middle hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="w-full rounded-lg max-w-4xl mx-auto flex flex-row gap-4 items-center justify-center">
                <button type="button" id="modal-save"
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
@csrf
<div class="px-3 lg:px-0">
    <div class="px-3 lg:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:flex-row md:justify-between gap-3 md:gap-5">
        <div class="flex flex-col justify-center py-3 w-full">
            <h1 class="del font-bold md:leading-tight text-zinc-200 text-3xl text-center my-2">PODSUMOWANIE ZAMÓWIENIA</h1>
            <h1 class="del font-bold md:leading-tight text-white text-xl my-2 text-center">Wybierz kolejne zdjęcia, zmień rozmiar lub ilość odbitek.</h1>
            <div class="del grid grid-cols-1 w-full my-2">
                <div id="resume-container">

                </div>
                <div>
                    <button type="button" class="hover:cursor-default w-full h-full p-4 flex flex-row justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                        <div class="w-1/2 flex flex-col items-start">
                            <span class="font-semibold text-lg text-white">
                                RAZEM <span id="resume-count"></span> szt
                            </span>
                            <p class="text-xs text-zinc-400">
                                Odbitki
                            </p>
                        </div>
                        <div class="w-1/2 flex flex-col items-end">
                            <span class="font-semibold text-lg text-white">
                                <span id="resume-price"></span> zł
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
            <form id="myForm" action="{{ route('form.store_form') }}" method="post" class="del flex flex-col justify-center w-full">
                @csrf
                <div class="del">
                    <label for="email" class="block my-2 text-sm font-medium text-white">Email</label>
                    <input type="email" id="email" name="email" class="my-2 bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
                </div>
                <div class="del">
                    <label for="phone" class="block my-2 text-sm font-medium text-white">Numer telefonu</label>
                    <input type="text" id="phone" name="phone" class=" my-2 bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
                </div>
                <div class="del">
                    <label for="name" class="block my-2 text-sm font-medium text-white">Imię i nazwisko</label>
                    <input type="text" id="name" name="name" class=" my-2 bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
                </div>

                <input type="hidden" name="photos" id="photos-send" value="">
                <input type="hidden" name="rows" id="rows" value="">
                <input type="hidden" name="total_price" id="total-price" value="">
                <input type="hidden" name="total_count" id="total-count" value="">
                <div class="del rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4 w-full">
                    <button type="submit" id="submit"
                        class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-green-600 text-green-50 hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                        <i class="fa-solid fa-check mr-2"></i>Złóż zamówienie
                    </button>
                    <a href="{{route('form.create')}}"
                        class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                        <i class="fa-solid fa-xmark mr-2"></i>Anuluj zamówienie
                    </a>
                </div>
            </form>
            <div class="del rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 mt-4 flex flex-row gap-4 items-center justify-center mb-4 w-full">
                <button type="button" id="openDrawerBtn"
                    class="params text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-purple-600 text-purple-50 hover:bg-purple-700 focus:outline-none focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-layer-group mr-2"></i>Edytuj wszystkie
                </button>
            </div>
            <h1 class="del font-bold md:leading-tight text-white text-xl my-2 text-center">Przesłane zdjęcia</h1>
            <div id="photos" class="del grid grid-cols-1 md:grid-cols-3 gap-4">


            </div>
            <h1 class="font-bold md:leading-tight text-white text-xl my-2 text-center">Miejsce do przesyłania zdjęć</h1>
            <form id="myid" enctype="multipart/form-data" method="POST" action="{{ route('form.store') }}" class="my-3 grid-cols-5 gap-4 dropzone w-full border-2 border-zinc-700 border-dashed rounded-lg cursor-pointer bg-zinc-900">
                @csrf
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
                <button id="submit2" type="button"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-green-600 text-green-50 hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-check mr-2"></i>Złóż zamówienie
                </button>
                <a href="{{route('form.create')}}"
                    class="text-center md:text-start py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-xmark mr-2"></i>Anuluj zamówienie
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    class Photo {
        constructor(id, src, form) {
            const self = this;
            self.src = src;
            self.id = id;
            self.form = form;
            self.size = '10x15';
            self.ending = 'blysk';
            self.count = 1;
        }
        // Zwraca widok zdjęcia z ustawieniami 
        getCard() {
            const self = this;
            return `
            <div id="${self.id}" class="flex flex-col p-4 w-full h-full bg-zinc-800 rounded-lg border border-zinc-700 hover:bg-zinc-900">
                <img id="" class-"mx-auto w-full h-auto rounded-lg" alt="" src="data:image/jpeg;base64,${self.src}">
                <div class="flex flex-col justify-between gap-4">
                    <div class="w-full">
                        <label for="${self.id}-size" class="block mt-2 mb-4 text-sm font-medium text-white">Rozmiar</label>
                        <select id="${self.id}-size" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="${self.size}" selected>${self.size} cm</option>
                            <option value="13x18">13x18 cm</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="${self.id}-ending" class="block mb-4 text-sm font-medium text-white">Wykończenie</label>
                        <select id="${self.id}-ending" class="bg-zinc-800 border border-zinc-700 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected value="blysk">Błysk</option>
                            <option value="mat">Mat</option>
                        </select>
                    </div>
                    <div>
                        <label for="count" class="block mb4 text-sm font-medium text-white">Odbitki</label>
                        <div class="flex rounded-lg bg-zinc-800 border border-zinc-700 ">
                            <input type="number" step="1" min="1" value="${self.count}" id="${self.id}-count" name="count" class="text-white p-2.5 block w-full bg-zinc-800 text-sm focus:z-10 focus:ring-red-500 focus:border-red-500">
                            <button id="${self.id}-plus" type="button" class="-ms-px py-4 px-4 font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-purple-600 text-purple-50 align-middle hover:bg-purple-700 focus:outline-none focus:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <button id="${self.id}-minus" type="button" class="py-4 px-4 rounded-r-lg font-bold text-center md:text-start inline-flex justify-center items-center gap-x-2 border border-transparent bg-zinc-600 text-zinc-50 align-middle hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none transition-all text-sm">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <button type="button" id="${self.id}-del"
                        class="text-center md:text-start text-sm py-4 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent bg-zinc-600 text-zinc-50 hover:bg-zinc-700 focus:outline-none focus:bg-zinc-700 disabled:opacity-50 disabled:pointer-events-none">
                        <i class="fa-solid fa-trash-can mr-2"></i>Usuń
                    </button>
                </div>
            </div>
            `
        }
    }

    Dropzone.autoDiscover = false;
    class Form {
        constructor() {
            const self = this;
            self.counter = 0;
            self.photos = [];
            self.types = [];
            self.priceList = {
                '10x15': [{
                        start: 0,
                        end: 50,
                        price: 0.80
                    },
                    {
                        start: 51,
                        end: 100,
                        price: 0.75
                    },
                    {
                        start: 101,
                        end: 150,
                        price: 0.70
                    },
                ],
                '13x18': [{
                        start: 0,
                        end: 20,
                        price: 1.20
                    },
                    {
                        start: 21,
                        end: 50,
                        price: 1.10
                    },
                    {
                        start: 51,
                        end: 100,
                        price: 0.90
                    },
                ],
            };
        }
        //Pokazuje elementy formularza
        showAll() {
            $('.del').removeClass('hidden');
            //window.addEventListener('beforeunload', (event) => {
            //    // Wyświetla komunikat ostrzegawczy
            //    event.preventDefault(); // Standardowe zabezpieczenie
            //    event.returnValue = ''; // Wymagane dla zgodności z większością przeglądarek
            //});

        }
        addToArrayIfNotExist(val, arr) {
            const doesAlreadyExist = arr.includes(val);
            if (doesAlreadyExist) return arr;
            arr.push(val);
            $('#resume-container').append(`
                <div id="${val}" class="mb-4">
                </div>
            `);
            return arr;
        }
        //Aktualizauje elementy formularza
        updateParams() {
            const self = this;
            var count = 0;
            var prices = 0;
            var rows = [];
            var photos = [];
            var listphotosSend = [];
            var rows = [];

            //Przejdź przez wszystkie zdjęcia podlicz je i wypisz formaty
            self.photos.forEach(photo => {
                count += parseInt(photo.count);
                self.types = self.addToArrayIfNotExist(photo.size, self.types)
            });

            //Dla każdego formatu pokaż rekord z dynamicznie zmieniamymi cenami
            self.types.forEach(type => {
                var counter = 0;
                var price = 0;
                var psc = null;

                //podlicz ten typ
                self.photos.forEach(photo => {
                    if (photo.size === type) {
                        counter += parseInt(photo.count);
                    }
                });
                console.log(type);
                //wylicz cene dla tego typu
                self.priceList[type].forEach(element => {
                    if (counter >= element.start && counter <= element.end) {
                        price += counter * element.price;
                        psc = element.price;
                    }
                });

                //dodaj rekord do podsumowania
                if(price.toFixed(2) == 0){
                    $('#' + type).html('');
                }else{
                    $('#' + type).html(self.getRecordResume(type, psc, price.toFixed(2)));
                }
                prices += price;
                rows.push({
                    type: type,
                    psc: psc,
                    price: price.toFixed(2),
                    count: counter,
                });
            });
            self.photos.forEach(photo => {
                listphotosSend.push({
                    count: photo.count,
                    src: photo.src,
                    format: photo.size,
                    ending: photo.ending,
                });
            });
            $('#photos-send').val(JSON.stringify(listphotosSend));
            $('#rows').val(JSON.stringify(rows));

            //pokaż sumę wszytkich odbitek
            $('#resume-count').html(count);
            $('#total-count').val(count);

            //pokaż sumę ceny
            $('#resume-price').html(prices.toFixed(2));
            $('#total-price').val(prices.toFixed(2));
        }
        //Dodaje zdjecia do formularza
        addPhoto(id, src) {
            const self = this;
            const photo = new Photo(id, src, self); //Stwórz obiekt
            $('#photos').append(photo.getCard()); //Dodaj do html'a
            self.photos.push(photo); //Dodaj do obiektu formularz do zmiennej typu lista (siebie)

            //Aktywacja przycisku "Usuwanie"
            $(document).on('click', '#' + id + '-del', function() {
                self.removePhoto(id);
            });
            //Aktywacja przycisku "Dodawanie"
            $(document).on('click', '#' + id + '-plus', function() {
                var val = $('#' + id + '-count').val();
                val = parseInt(val);
                val += 1;
                $('#' + id + '-count').val(val);

                self.updateObjPhotos(val, id);
                self.updateParams();
            });
            //Aktywacja przycisku "Obejmowanie"
            $(document).on('click', '#' + id + '-minus', function() {
                var val = $('#' + id + '-count').val();
                val = parseInt(val);
                val -= 1;
                $('#' + id + '-count').val(val);

                self.updateObjPhotos(val, id);
                self.updateParams();
            });
            //Aktywacja Na każdą zmiane inputa "Odbitki"
            $('#' + id + '-count').on('change', function() {
                const val = $('#' + id + '-count').val();

                self.updateObjPhotos(val, id);
                self.updateParams();
            });

            $('#' + id + '-size').on('change', function() {
                const val = $('#' + id + '-size').val();

                self.updateObjPhotosSize(val, id);
                self.updateParams();
            });
            $('#' + id + '-ending').on('change', function() {
                const val = $('#' + id + '-ending').val();

                self.updateObjPhotosEnding(val, id);
                self.updateParams();
            });
            self.updateParams();
        }
        //Usuwa zadjęcia z formularza
        removePhoto(id) {
            const self = this;
            self.photos = self.photos.filter(photo => photo.id !== id); // Usuwamy zdjęcie z zmiennej typu lista
            $('#' + id).remove(); //Usuwamy do html'a
            self.updateParams();
        }
        //Aktualizuje count na podstawie liczby odbitek
        updateObjPhotos(val, id) {
            const self = this;
            self.photos.forEach(photo => {
                if (photo.id == id) {
                    photo.count = parseInt(val);
                }
            });
        }
        //Aktualizuje format
        updateObjPhotosSize(val, id) {
            const self = this;
            self.photos.forEach(photo => {
                if (photo.id == id) {
                    photo.size = val;
                }
            });
        }
        //Aktualizuje format
        updateObjPhotosEnding(val, id) {
            const self = this;
            self.photos.forEach(photo => {
                if (photo.id == id) {
                    photo.ending = val;
                }
            });
        }
        getRecordResume(name, psc, price) {
            return `
            <button type="button" class="hover:cursor-default w-full h-full p-4 flex flex-row justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                <div class="w-1/2 flex flex-col items-start">
                    <span class="font-semibold text-lg text-white">
                        ${name}
                    </span>
                    <p class="text-xs text-zinc-400">
                        ${psc} zł/odbitka
                    </p>
                </div>
                <div class="w-1/2 flex flex-col items-end">
                    <span class="font-semibold text-lg text-white">
                        ${price} zł
                    </span>
                </div>
            </button>
            `;
        }
    }
    $(document).ready(function() {
        const form = new Form();
        let csrf = $('input[name="_token"]');

        uploader = new Dropzone(".dropzone", {
            url: "{{ route('form.store') }}", // Poprawny URL do obsługi uploadu
            maxFiles: 1000, // Maksymalna liczba plików
            maxFilesize: 50, // Maksymalny rozmiar pliku (MB)
            acceptedFiles: 'image/jpeg, image/jpg, image/png',
            dictDefaultMessage: "Przeciągnij i upuść zdjęcia tutaj lub kliknij, aby wybrać",
            headers: {
                '_token': csrf.val(),
            },
            init: function() {
                this.on("success", function(file, response) {
                    form.showAll();
                    form.addPhoto(response['fileId'], response['imageData']);
                    this.removeFile(file);
                });
                this.on("error", function(file, response) {
                    console.log("Wystąpił błąd podczas przesyłania pliku:", response);
                });
            }
        });

        //przycisk submit2
        $('#submit2').on('click', function() {
            $('#submit').click();
        });
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
        var counter = 0;
        $('#modal-save').on('click', function() {

            form.photos.forEach(photo => {
                form.photos[counter].count = $('#modal-count').val();
                form.photos[counter].ending = $('#modal-ending').val();
                form.photos[counter].size = $('#modal-size').val();
                counter++;
            });

            form.updateParams();
            $('#photos').html('');

            form.photos.forEach(photo => {
                $('#photos').append(photo.getCard());
            });
        });
    });
</script>
<!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<input type="hidden" value="{{Session::get('success')}}" id="success">
<input type="hidden" value="{{Session::get('fail')}}" id="fail">
<script>
    $(document).ready(function() {
        toastr.options = {
            "positionClass": "toast-top-center", // Wyświetl na środku u góry
            "timeOut": "5000", // Czas trwania (5 sekund)
            "closeButton": true, // Dodanie przycisku zamknięcia
            "progressBar": true // Pokaż pasek postępu
        };
    });
</script>
<!--SUCCESS-->
@if(Session::has('success'))
<script>
    $(document).ready(function() {
        var success = $('#success').val();
        toastr.success(success);
    });
</script>
@endif
<!--DANGER-->
@if(Session::has('fail'))
<script>
    $(document).ready(function() {
        var fail = $('#fail').val();
        toastr.error(fail);
    });
</script>
@endif
@endsection