<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Zamówienie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <a href="{{ route('dashboard') }}" class="mx-4 mt-8 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-300 focus:bg-gray-700 dark:focus:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    <i class="fa-solid fa-chevron-left mr-2"></i>Powrót do zamówień
                </a>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-200 mx-4">
                    Zamówienie
                </h1>
                <div class="relative overflow-x-auto sm:rounded-lg my-8 mx-4 dark:bg-blue-900 p-4">
                    <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-400 w-full">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email</dt>
                            <dd class="text-lg font-semibold">{{$order->email}}</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Numer telefonu</dt>
                            <dd class="text-lg font-semibold">{{$order->phone}}</dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Imię i nazwisko</dt>
                            <dd class="text-lg font-semibold">{{$order->name}}</dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Data utworzenia</dt>
                            <dd class="text-lg font-semibold">{{$order->created_at}}</dd>
                        </div>
                    </dl>
                </div>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-200 mx-4">
                    Podsumowanie
                </h1>
                <div class="relative overflow-x-auto sm:rounded-lg my-8 mx-4 dark:bg-green-900 p-4">
                    <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-400 w-full">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Liczba sztuk</dt>
                            <dd class="text-lg font-semibold">{{$order->total_count}}</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Cena</dt>
                            <dd class="text-lg font-semibold">{{$order->total_price}}</dd>
                        </div>
                    </dl>
                </div>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-200 mx-4">
                    Szczegóły
                </h1>
                @foreach($items as $item)
                <div class="relative overflow-x-auto sm:rounded-lg my-8 mx-4 dark:bg-lime-800 p-4">
                    <dl class="text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-400 w-full">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nazwa</dt>
                            <dd class="text-lg font-semibold">{{$item->name}}</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Cena za jednostkę</dt>
                            <dd class="text-lg font-semibold">{{$item->price}}</dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Cena całkowita</dt>
                            <dd class="text-lg font-semibold">{{$item->total}}</dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Data utworzenia</dt>
                            <dd class="text-lg font-semibold">{{$item->created_at}}</dd>
                        </div>
                    </dl>
                </div>
                @endforeach
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-200 mx-4">
                    Zdjęcia
                </h1>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Zdjęcie
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Format
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Wykończenie
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ilość odbitek
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pobieranie
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Usuwanie
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($photos as $photo)
                        <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <img src="{{asset('photo/'.$photo->file_name)}}" alt="" class="img-fluid" height="48px" width="48px">
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-50">
                                    {{$photo->format}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-50">
                                    {{$photo->ending}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-50">
                                    {{$photo->count}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('photo.download', $photo)}}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{route('photo.delete', $photo)}}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zdjęcie?');">
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