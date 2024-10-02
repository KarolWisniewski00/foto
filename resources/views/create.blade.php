@extends('layouts.foto')

@section('content')
@csrf
<div class="px-3 md:px-0">
    <div class="px-3 md:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:flex-row md:justify-between gap-3 md:gap-5">
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
                <div>
                    <input name="format2" type="radio" id="format" value="10x15" checked class="hidden peer">
                    <label for="format" class=" h-full p-4 border-2 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                        <div>
                            <span class="font-semibold text-lg text-white">
                                10x15
                            </span>
                        </div>
                    </label>
                </div>
                <div>
                    <input name="format2" type="radio" id="format2" value="13x18" class="hidden peer">
                    <label for="format2" class=" h-full p-4 border-2 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl cursor-pointer peer-checked:border-yellow-500 peer-checked:bg-zinc-900 hover:bg-zinc-900">
                        <div>
                            <span class="font-semibold text-lg text-white">
                                13x18
                            </span>
                        </div>
                    </label>
                </div>
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