<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Wszystko') }}
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
                                    Zamówienie
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
                                    <a href="{{route('order.show', $photo->order)}}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200"><i class="fa-solid fa-eye"></i></a>
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
                    <div class="px-4 py-2">
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>