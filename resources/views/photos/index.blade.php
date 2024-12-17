<!-- resources/views/photos/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Photo Gallery') }}
        </h2>
    </x-slot>

    <!-- Container -->
    @if ($photos->isEmpty())
        <p>No photos available.</p>
    @else
        @foreach ($photos as $photo)
            <div class="bg-white p-4 rounded-md shadow-md">
                <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->title }}"
                    class="w-full h-64 object-cover rounded-md">
                <h3 class="mt-2 text-lg font-medium">{{ $photo->title }}</h3>
                <p class="mt-1 text-sm text-gray-600">{{ $photo->description }}</p>
            </div>
        @endforeach
    @endif

</x-app-layout>
