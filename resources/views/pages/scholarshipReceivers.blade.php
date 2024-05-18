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


    <!-- Modal -->
    <div id="updateModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white dark:bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100" id="modal-headline">Update Value</h3>
                            <div class="mt-2" id="receiverEditContent">
                                <form action="{{ route('addReceiver.store') }}" method="post" enctype="multipart/form">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="receiver_name" class="block text-gray-700 text-sm font-bold mb-2">Receiver Name:</label>
                                        <input type="text" id="receiver_name" name="reciever_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter receiver's name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="donor_name" class="block text-gray-700 text-sm font-bold mb-2">Donor Name:</label>
                                        <input type="text" id="donor_name" name="donor_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter donor's name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="monthly_payment" class="block text-gray-700 text-sm font-bold mb-2">Monthly Payment:</label>
                                        <select id="monthly_payment" name="monthly_payment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="100">$100</option>
                                            <option value="200">$200</option>
                                            <option value="300">$300</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <input type="checkbox" id="current_scholarship" name="still_recieving" class="form-checkbox text-blue-500 h-5 w-5">
                                        <label for="current_scholarship" class="ml-2 text-gray-700">Currently receiving scholarship</label>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="updateValue()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Update
                    </button>
                    <button onclick="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 dark:border-gray-600 shadow-sm px-4 py-2 bg-white dark:bg-gray-800 text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

<!-- JavaScript to control modal -->
@push('js')
<script>
    function openModal(reciver_id) {
        event.preventDefault(); // Prevent default anchor tag behavior
        document.getElementById('updateModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('updateModal').classList.add('hidden');
    }

    function updateValue() {
        // Add your update logic here
        closeModal(); // Close modal after updating
    }
</script>
@endpush


</x-app-layout>



