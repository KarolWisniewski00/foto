@extends('layouts.foto')

@section('content')
@csrf
<div class="px-3 lg:px-0">
    <div class="px-3 lg:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:flex-row md:justify-between gap-3 md:gap-5">
        <div class="flex flex-col justify-center py-3 w-full">
            <h1 class="font-bold md:leading-tight text-zinc-200 text-3xl text-center my-2">FOTO RABSZTYN</h1>
            <div>
                <label for="email" class="block my-2 text-sm font-medium text-white">Email</label>
                <input type="email" id="email" class="my-2 bg-zinc-800 border border-zinc-800 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <div>
                <label for="phone" class="block my-2 text-sm font-medium text-white">Numer telefonu</label>
                <input type="text" id="phone" class=" my-2 bg-zinc-800 border border-zinc-800 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <span class="block my-2 text-sm font-medium text-white">Format</span>
            <div class="grid grid-cols-2 gap-4 w-full my-2">
                <div class="hs-dropdown relative inline-flex w-full">
                    <button id="hs-dropdown-default" type="button" class="min-h-24 sm:min-h-fit hs-dropdown-toggle w-full text-center md:text-start py-3 px-4 inline-flex items-center gap-x-2 text-sm font-bold rounded-lg border border-transparent text-black bg-yellow-500 hover:bg-yellow-400 focus:outline-none focus:bg-yellow-400 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <i class="fa-solid fa-arrow-right mr-2"></i>Kliknij aby wybrać format
                    </button>
                    <div id="hs-dropdown-menu" class="hs-dropdown-menu transition-opacity duration-300 opacity-0 invisible absolute left-0 min-w-full bg-white shadow-md rounded-lg mt-24 sm:mt-16 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-default">
                        <div class="p-1 space-y-0.5">
                            <a class="format-option flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#" data-value="10x15">
                                10x15
                            </a>
                            <a class="format-option flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#" data-value="13x18">
                                13x18
                            </a>
                        </div>
                    </div>
                </div>
                <div class="h-full p-4 border-2 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                    <span class="font-semibold text-lg text-white">
                        Wybrano format: <span id="selected-format">Brak</span>
                    </span>
                </div>

                <script>
                    document.getElementById('hs-dropdown-default').addEventListener('click', function() {
                        const dropdownMenu = document.getElementById('hs-dropdown-menu');
                        if (dropdownMenu.classList.contains('invisible')) {
                            dropdownMenu.classList.remove('invisible', 'opacity-0');
                            dropdownMenu.classList.add('visible', 'opacity-100');
                        } else {
                            dropdownMenu.classList.remove('visible', 'opacity-100');
                            dropdownMenu.classList.add('invisible', 'opacity-0');
                        }
                    });

                    // Zamknij dropdown po kliknięciu poza nim
                    document.addEventListener('click', function(e) {
                        const button = document.getElementById('hs-dropdown-default');
                        const dropdownMenu = document.getElementById('hs-dropdown-menu');
                        if (!button.contains(e.target) && !dropdownMenu.contains(e.target)) {
                            dropdownMenu.classList.remove('visible', 'opacity-100');
                            dropdownMenu.classList.add('invisible', 'opacity-0');
                        }
                    });

                    // Obsługa wyboru opcji
                    document.querySelectorAll('.format-option').forEach(option => {
                        option.addEventListener('click', function(e) {
                            e.preventDefault(); // Zapobiega przeładowaniu strony

                            const selectedFormat = this.getAttribute('data-value');
                            document.getElementById('selected-format').textContent = selectedFormat;

                            // Zamykanie menu po wyborze
                            const dropdownMenu = document.getElementById('hs-dropdown-menu');
                            dropdownMenu.classList.remove('visible', 'opacity-100');
                            dropdownMenu.classList.add('invisible', 'opacity-0');
                        });
                    });
                </script>



            </div>
            <span class="block my-2 text-sm font-medium text-white">Wykończenie</span>
            <div class="grid grid-cols-2  gap-4 w-full my-2">
                <div>
                    <input name="ending2" type="radio" id="ending" value="flash" checked class="hidden peer">
                    <label for="ending" class=" h-full p-4 border-2 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                        <div>
                            <span class="font-semibold text-lg text-white">
                                Błysk
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input name="ending2" type="radio" id="ending2" value="mat" class="hidden peer">
                    <label for="ending2" class=" h-full p-4 border-2 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                        <div>
                            <span class="font-semibold text-lg text-white">
                                Mat
                            </span>
                        </div>
                    </label>
                </div>
            </div>
            <!--
            <div class="my-2 bg-blue-900 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-info-label">
                <span id="hs-solid-color-info-label" class="font-bold">Jak to działa?</span> Wszystko to co wyżej aktualnie uzupełnione zapisuje się przy przesłanym zdjęciu, a informacje wyżej można zmienić w czasie rzeczywistym. Jak pokaże się animacja na zdjęciu wtedy operacja przesyłania się kończy
            </div>
            -->
            <div id="ban" class="my-3 grid-cols-5 gap-4 w-full border-2 border-red-700 border-dashed rounded-lg cursor-pointer bg-zinc-900">
                <label for="dropzone-file">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <i class="fa-solid fa-ban text-xl text-red-700"></i>
                        <p class="mb-2 text-sm text-red-700 text-center"><span class="font-semibold">Uzupełnij Dane Kontaktowe</span> Abyś mógł przesłać zdjęcia</p>
                    </div>
                </label>
            </div>

            <form id="accept" enctype="multipart/form-data" method="POST" action="{{ route('form.store') }}" id="my-form" class="my-3 grid-cols-5 gap-4 dropzone w-full border-2 border-zinc-700 border-dashed rounded-lg cursor-pointer bg-zinc-900" style="display: none;">
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
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let csrf = $('input[name="_token"]');

        $('#phone').on('input', function() {
            // Validate the form fields when user types
            validateForm();
        });

        $('#email').on('input', function() {
            // Validate the form fields when user types
            validateForm();
        });

        function validateForm() {
            const email = $('#email').val();
            const phone = $('#phone').val();
            const phonePattern = /^\d{9}$/; // Regular expression for 9 digits
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email pattern

            if (emailPattern.test(email) && phonePattern.test(phone)) {
                // If both email and phone are valid
                $('#ban').hide();
                $('#accept').show();
                $('#emailform').val(email);
                $('#phoneform').val(phone);
            } else {
                // If not valid, show the ban div
                $('#ban').show();
                $('#accept').hide();
            }
        }

        Dropzone.options.myAwesomeDropzone = {
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
                    console.log("Plik przesłany pomyślnie:", response);
                });
                this.on("error", function(file, response) {
                    console.log("Wystąpił błąd podczas przesyłania pliku:", response);
                });
            }
        };
    });
</script>

@endsection