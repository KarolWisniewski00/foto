<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Wszystko') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Wszystkie zdjęcia
                </h1>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Zajęte miejsce {{$folderSizeMB}} MB
                </h1>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mx-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Zdjęcie
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Usuwanie
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($photos as $photo)
                            @php
                            // Zamiana pełnej ścieżki na względną względem katalogu "public"
                            $relativePath = str_replace(public_path(), '', $photo);
                            @endphp
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    <img src="{{ asset($relativePath) }}" alt="" class="img-fluid" height="48px" width="48px">
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{route('photo.delete', $relativePath)}}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zdjęcie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>