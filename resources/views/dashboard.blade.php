<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <!-- Judul Dashboard -->
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <!-- Button Tambah Foto -->
            <a href="{{ url('/datafoto') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah Foto
            </a>
        </div>
    </x-slot>


    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        @include('photos.index', ['photos' => $photos])
    </div>
</x-app-layout>
