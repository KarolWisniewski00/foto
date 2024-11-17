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
                <div class="dark:text-white">
                    '10x15': [{<br>
                    start: 0,<br>
                    end: 50,<br>
                    price: 0.80<br>
                    },<br>
                    {<br>
                    start: 51,<br>
                    end: 100,<br>
                    price: 0.75<br>
                    },<br>
                    {<br>
                    start: 101,<br>
                    end: 150,<br>
                    price: 0.70<br>
                    },<br>
                    ],<br>
                    '13x18': [{<br>
                    start: 0,<br>
                    end: 20,<br>
                    price: 1.20<br>
                    },<br>
                    {<br>
                    start: 21,<br>
                    end: 50,<br>
                    price: 1.10<br>
                    },<br>
                    {<br>
                    start: 51,<br>
                    end: 100,<br>
                    price: 0.90<br>
                    },<br>
                    ],<br>
                </div>
            </div>
        </div>
</x-app-layout>