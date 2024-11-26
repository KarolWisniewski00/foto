<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cennik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Cennik
                </h1>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Zajęte miejsce {{$folderSizeMB}} MB
                </h1>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mx-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nazwa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ilość szt start
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ilość szt koniec
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Cena
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edycja
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Usuwanie
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    10x15
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        0
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        50
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        0.80
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        51
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        100
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        0.75
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        101
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        150
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        0.70
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!---->
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">
                                15x21
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        0
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        20
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        1.20
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        21
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        50
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        1.10
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">

                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        51
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        100
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        0.90
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-500 rounded-lg border border-blue-700 hover:bg-blue-600 focus:z-10 focus:ring-4 focus:ring-blue-700">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>