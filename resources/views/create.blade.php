@extends('layouts.foto')

@section('content')
<div class="px-3 md:px-0">
    <div class="px-3 md:px-0 bg-zinc-900 rounded-lg max-w-4xl mx-auto sm:px-4 lg:px-8 md:mt-5 flex flex-col md:flex-row md:justify-between gap-3 md:gap-5">
        <div class="flex flex-col justify-center py-3 w-full">
        <h1 class="font-bold md:leading-tight text-zinc-200 text-3xl text-center">FOTO RABSZTYN</h1>
            <div class="">
                <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                <input type="email" id="email" class="bg-zinc-800 border border-zinc-800 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <div class="">
                <label for="phone" class="block mb-2 text-sm font-medium text-white">Numer telefonu</label>
                <input type="text" id="phone" class="bg-zinc-800 border border-zinc-800 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5" required />
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ route('form.store') }}" id="my-form" class="my-3 grid-cols-5 gap-4 dropzone w-full border-2 border-zinc-700 border-dashed rounded-lg cursor-pointer bg-zinc-900" disabled>
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

            <div class="flex flex-col justify-end items-end">
                <button id="submit-btn" type="submit" class="inline-flex items-center px-10 py-3 bg-green-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-800 focus:bg-green-800 active:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150" disabled>
                    <i class="fa-solid fa-check mr-2"></i>Zapisz
                </button>
            </div>
        </div>
    </div>
</div>
<script>
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