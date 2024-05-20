<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 py-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-200 text-center">System Overview</h2>
                        <div class="flex flex-col items-center space-y-4">
                            <div class="bg-blue-100 dark:bg-blue-800 p-4 rounded-lg shadow w-full">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Scholarship Receivers</h3>
                                <p class="text-2xl text-blue-700 dark:text-blue-300">{{ $receiverCount }}</p>
                            </div>
                            <div class="bg-green-100 dark:bg-green-800 p-4 rounded-lg shadow w-full">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Donors</h3>
                                <p class="text-2xl text-green-700 dark:text-green-300">{{ $donorCount }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
