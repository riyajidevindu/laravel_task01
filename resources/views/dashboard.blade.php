<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Scholarship Receivers -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100 text-center">Scholarship Receivers</h2>
                        <div class="flex items-center justify-center">
                            <div class="flex items-center justify-center h-24 w-24 bg-blue-500 text-white font-bold text-4xl rounded-full shadow-lg">
                                <span>{{ $receiverCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Donors -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-100 text-center">Donors</h2>
                        <div class="flex items-center justify-center">
                            <div class="flex items-center justify-center h-24 w-24 bg-green-500 text-white font-bold text-4xl rounded-full shadow-lg">
                                <span>{{ $donorCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
