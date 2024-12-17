<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Container -->
    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- Display all photos -->
            @foreach ($photos as $photo)
                <div class="bg-white p-4 rounded-md shadow-md">
                    <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $photo->title }}"
                        class="w-full h-64 object-cover rounded-md">
                    <h3 class="mt-2 text-lg font-medium">{{ $photo->title }}</h3>
                    <p class="mt-1 text-sm text-gray-600">{{ $photo->description }}</p>

                    <!-- Edit and Delete Buttons -->
                    <div class="mt-4 flex space-x-4">
                        <a href="{{ route('photos.edit', $photo->id) }}"
                            class="text-blue-500 hover:text-blue-700">Edit</a>

                        <form action="{{ route('photos.destroy', $photo->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this photo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
