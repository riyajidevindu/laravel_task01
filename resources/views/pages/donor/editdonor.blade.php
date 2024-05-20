<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Update Donor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 py-6">
                        <h2 class="text-xl font-semibold mb-4  text-gray-800">Donor Update Form</h2>
                        <form action="{{ route('donor.update') }}" method="post" enctype="multipart/form">
                            @csrf

                            <div class="mb-4">
                                <input type="hidden" name="id" value="{{ $donor->id }}">
                            </div>

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Donor's Name:</label>
                                <input type="text" value="{{ $donor->name }}" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter donor's name">
                            </div>
                            <div class="mb-4">
                                <label for="country" class="block text-gray-700 text-sm font-bold mb-2">Donor's Country:</label>
                                <input type="text" value="{{ $donor->country }}" id="country" name="country" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter donor's country">
                            </div>
                            <div class="mb-4">
                                <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Donor's Age:</label>
                                <input type="number" value="{{ $donor->age }}" id="age" name="age" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter donor's age">
                            </div>

                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
