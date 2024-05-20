<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Donors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <div class="max-w-4xl mx-auto bg-white shadow-md rounded px-8 py-6 mt-8">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Donors Details</h2>
                        <table class="w-full bg-white shadow-md rounded mb-4">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Donor Name</th>
                                    <th class="py-3 px-6 text-left">Donor Country</th>
                                    <th class="py-3 px-6 text-left">Age</th>
                                    <th class="py-3 px-6 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($donors as $key => $donor)
                                <tr>
                                    <td class="border px-6 py-4">{{ $donor->id }}</td>
                                    <td class="border px-6 py-4">{{ $donor->name }}</td>
                                    <td class="border px-6 py-4">{{ $donor->country }}</td>
                                    <td class="border px-6 py-4">{{ $donor->age}}</td>
                                    <td class="border px-6 py-4">
                                        <div class="flex space-x-4">
                                            <a href="{{ route('donor.edit', $donor->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                            <a href="{{ route('donor.delete', $donor->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





</x-app-layout>



