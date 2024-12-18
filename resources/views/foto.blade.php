<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Foto') }}
        </h2>
    </x-slot>

    <!-- Container -->
    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- Profile Section -->
            <div>
                <h3 class="text-lg font-medium leading-6">Form Upload Foto</h3>
                <p class="mt-1 text-sm text-gray-600">
                    This information will be displayed publicly, so be careful what you share.
                </p>
            </div>

            <!-- Form Section -->
            <div class="md:col-span-2 bg-white shadow rounded-lg p-6">
                <form action="{{ route('datafoto.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf
                    <!-- Title Input -->
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <input id="title" name="title" type="text" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <!-- Description Textarea -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="3" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            placeholder="Description of the image"></textarea>
                        <p class="mt-2 text-sm text-gray-500">Description of the image</p>
                    </div>

                    <!-- Upload Image -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Upload Image</label>
                        <div
                            class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 22l10 10m0 0l10-10m-10 10V4" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="image" type="file" class="sr-only" required>
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Preview Image -->
                    <div id="image-preview" class="mt-4">
                        <!-- Image preview will appear here -->
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end gap-4">
                        <button type="button"
                            class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                            Cancel
                        </button>
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Save
                        </button>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </div>



    <!-- JavaScript for Image Preview -->
    <script>
        // Image preview logic
        document.getElementById('file-upload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const imagePreview = document.getElementById('image-preview');
                imagePreview.innerHTML =
                    `<img src="${e.target.result}" class="w-64 h-64 object-cover rounded-md" />`;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>

</x-app-layout>
