@extends('layouts.foto')

@section('content')
<div class="px-3 md:px-0">
    <div class="px-3 md:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:flex-row md:justify-between gap-3 md:gap-5">
        <div class="flex flex-col justify-center py-3 w-full">
            <h1 class="font-bold md:leading-tight text-zinc-200 text-3xl text-center">FOTO RABSZTYN</h1>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                <input type="email" id="email" class="bg-zinc-800 border border-zinc-800 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <div>
                <label for="phone" class="block my-2 text-sm font-medium text-white">Numer telefonu</label>
                <input type="text" id="phone" class="bg-zinc-800 border border-zinc-800 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <span  class="block mt-2 text-sm font-medium text-white">Format</span>
            <div class="grid grid-cols-2 gap-4 w-full mt-5 px-4 md:px-0">
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            10x15
                        </span>
                    </div>
                </div>
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            13x18
                        </span>
                    </div>
                </div>
            </div>
            <span  class="block mt-2 text-sm font-medium text-white">Wykończenie</span>
            <div class="grid grid-cols-2  gap-4 w-full mt-5 px-4 md:px-0">
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Błysk
                        </span>
                    </div>
                </div>
                <div class=" h-full p-4 flex flex-col justify-between bg-zinc-800 border border-zinc-700 rounded-xl">
                    <div>
                        <span class="font-semibold text-lg text-white">
                            Mat
                        </span>
                    </div>
                </div>
            </div>
            <div id="ban" class="my-3 grid-cols-5 gap-4 w-full border-2 border-red-700 border-dashed rounded-lg cursor-pointer bg-zinc-900">
                <label for="dropzone-file">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <i class="fa-solid fa-ban text-xl text-red-400"></i>
                        <p class="mb-2 text-sm text-red-400"><span class="font-semibold">Uzupełnij Dane Kontaktowe</span> Abyś mógł przesłać zdjęcia</p>
                    </div>
                </label>
            </div>

            <form id="accept" enctype="multipart/form-data" method="POST" action="{{ route('form.store') }}" id="my-form" class="my-3 grid-cols-5 gap-4 dropzone w-full border-2 border-zinc-700 border-dashed rounded-lg cursor-pointer bg-zinc-900" style="display: none;">
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
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
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
            } else {
                // If not valid, show the ban div
                $('#ban').show();
                $('#accept').hide();
            }
        }
    });

    Dropzone.options.myAwesomeDropzone = {
        url: "{{ route('form.store') }}", // Poprawny URL do obsługi uploadu
        maxFiles: 100, // Maksymalna liczba plików
        maxFilesize: 10, // Maksymalny rozmiar pliku (MB)
        acceptedFiles: 'image/*', // Akceptowane typy plików
        dictDefaultMessage: "Przeciągnij i upuść zdjęcia tutaj lub kliknij, aby wybrać",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
</script>

@endsection
