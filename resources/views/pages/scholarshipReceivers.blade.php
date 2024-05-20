<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Scholarship Receivers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <div class="max-w-4xl mx-auto bg-white shadow-md rounded px-8 py-6 mt-8">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Scholarship Receivers Details</h2>
                        <table class="w-full bg-white shadow-md rounded mb-4">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Recipient Name</th>
                                    <th class="py-3 px-6 text-left">Donor Name</th>
                                    <th class="py-3 px-6 text-left">Monthly Payment</th>
                                    <th class="py-3 px-6 text-left">Currently Receiving Scholarship</th>
                                    <th class="py-3 px-6 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($recivers as $key => $reciver)
                                <tr>
                                    <td class="border px-6 py-4">{{ $reciver->id+1000 }}</td>
                                    <td class="border px-6 py-4">{{ $reciver->reciever_name }}</td>
                                    <td class="border px-6 py-4">{{ $reciver->donor_name }}</td>
                                    <td class="border px-6 py-4">{{ $reciver->monthly_payment }}</td>
                                    <td class="border px-6 py-4">{{ $reciver->still_recieving ? 'Yes' : 'No' }}</td>
                                    <td class="border px-6 py-4">
                                        <div class="flex space-x-4">
                                            <a href="{{ route('scholarshipReciever.edit', $reciver->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</a>
                                            <a href="{{ route('scholarshipReciever.delete', $reciver->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</a>
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



