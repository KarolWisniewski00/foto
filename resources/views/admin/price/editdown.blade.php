<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cennik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('price') }}" class="mx-4 mt-8 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-300 focus:bg-gray-700 dark:focus:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    <i class="fa-solid fa-chevron-left mr-2"></i>Powrót do cennika
                </a>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Edytuj element podrzędny
                </h1>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                    <!-- Formularz -->
                    <form action="{{ route('price.update.down', $setting) }}" method="POST" class="space-y-6 px-4">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="start" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Ilość odbitek start
                            </label>
                            <input
                                type="text"
                                name="start"
                                id="start"
                                value="{{ old('start', $setting->copies_start) }}"
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-gray-200"
                                required>
                        </div>
                        <div>
                            <label for="end" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Ilość odbitek koniec
                            </label>
                            <input
                                type="text"
                                name="end"
                                id="end"
                                value="{{ old('end', $setting->copies_end) }}"
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-gray-200"
                                required>
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Cena
                            </label>
                            <input
                                type="text"
                                name="price"
                                id="price"
                                value="{{ old('price', $setting->price) }}"
                                class="mt-1 block w-full rounded-lg border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-gray-200"
                                required
                                placeholder="Wpisz nazwę">
                        </div>

                        <div>
                            <button
                                type="submit"
                                class="mb-6 py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-emerald-500 rounded-lg border border-emerald-700 hover:bg-emerald-600 focus:z-10 focus:ring-4 focus:ring-emerald-700">
                                Zapisz
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>