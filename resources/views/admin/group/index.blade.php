<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Zamówienia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8 mx-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Numer zamówienia
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Numer telefonu
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Liczba sztuk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Cena
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Podgląd
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Usuwanie
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{$order->id}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-50">
                                        {{$order->email}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-50">
                                        {{$order->phone}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-50">
                                        {{$order->total_count}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-50">
                                        {{$order->total_price}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('order.show', $order)}}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200"><i class="fa-solid fa-eye"></i></a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zdjęcie?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-4 py-2">
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>