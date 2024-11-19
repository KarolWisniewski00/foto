<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Zamówienie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden rounded-lg">
                <a href="{{ route('dashboard') }}" class="mx-4 mt-8 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-300 focus:bg-gray-700 dark:focus:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    <i class="fa-solid fa-chevron-left mr-2"></i>Powrót do zamówień
                </a>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Zamówienie
                </h1>
                <div class="relative overflow-x-auto rounded-lg my-8 mx-4 bg-gray-100 dark:bg-gray-700 p-4">
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
                            <dd class="text-lg font-semibold dark:text-gray-400">{{$order->created_at}}</dd>
                        </div>
                    </dl>
                </div>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Szczegóły
                </h1>
                @foreach($items as $item)
                <div class="relative overflow-x-auto rounded-lg my-8 mx-4 bg-gray-100 dark:bg-gray-700 p-4">
                    <div class="grid grid-cols-2 text-gray-900 dark:text-white w-full">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Nazwa</dt>
                            <dd class="text-lg font-semibold">{{$item->name}}</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Cena całkowita</dt>
                            <dd class="text-lg font-semibold">{{$item->total}} PLN</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Cena za jednostkę</dt>
                            <dd class="text-lg font-semibold">{{$item->price}} PLN</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Data utworzenia</dt>
                            <dd class="text-lg font-semibold dark:text-gray-400">{{$item->created_at}}</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Liczba sztuk</dt>
                            <dd class="text-lg font-semibold">{{$item->count}}</dd>
                        </div>
                    </div>
                </div>
                @endforeach
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Podsumowanie
                </h1>
                <div class="relative overflow-x-auto rounded-lg my-8 mx-4 bg-gray-100 dark:bg-gray-700 p-4">
                    <dl class="grid grid-cols-2 text-gray-900 dark:text-white w-full">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Liczba sztuk</dt>
                            <dd class="text-lg font-semibold">{{$order->total_count}}</dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Cena</dt>
                            <dd class="text-lg font-semibold">{{$order->total_price}} PLN</dd>
                        </div>
                    </dl>
                </div>
                <!--PRZYCISKI-->
                <div class="mt-8 hidden md:flex justify-end items-center space-x-4 mx-4">
                    <!-- Usuń -->
                    <form action="{{ route('order.delete', $order) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to zamówienie?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <i class="fa-solid fa-trash mr-2"></i>Usuń
                        </button>
                    </form>
                </div>
                <div class="mb-8 hidden md:flex justify-start items-center space-x-4 mx-4">
                    <a href="{{route('order.download.zip', $order)}}" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                        <i class="fa-solid fa-file-zipper mr-2"></i>Pobierz zamówienie ZIP
                    </a>
                </div>
                <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                    Zdjęcia
                </h1>
                @foreach($items as $item)
                <div class="mb-8 flex flex-col overflow-x-auto justify-start items-start mx-4 bg-gray-100 dark:bg-gray-700 rounded-lg p-1">
                    <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                        Katalog {{$item->name}}
                    </h1>
                    @foreach($endings as $ending)
                    @php
                    $count=0;
                    @endphp
                    @foreach($photos as $photo)
                    @if($item->name == $photo->format)
                    @if($ending == $photo->ending)
                    @php
                    $count+=1;
                    @endphp
                    @endif
                    @endif
                    @endforeach
                    @if($count != 0)
                    <h1 class="pl-5 mt-8 mb-4 text-2xl font-medium text-gray-800 dark:text-gray-200 mx-4">
                        Podkatalog {{$ending}}
                    </h1>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-300">
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
                            @if($item->name == $photo->format)
                            @if($ending == $photo->ending)
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    <img src="{{asset('photo/'.$photo->file_name)}}" alt="" class="img-fluid" height="48px" width="48px">
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        {{$photo->format}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
                                        {{$photo->ending}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-800 dark:text-gray-50">
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
                            @endif
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>