<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Add Receiver') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 py-6">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Scholarship Application Form</h2>
                        <form action="{{ route('addReceiver.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="receiver_name" class="block text-gray-700 text-sm font-bold mb-2">Receiver Name:</label>
                                <input type="text" id="receiver_name" name="reciever_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter receiver's name">
                            </div>
                            <div class="mb-4">
                                <label for="donor_id" class="block text-gray-700 text-sm font-bold mb-2">Donor Name:</label>
                                <select id="donor_id" name="donor_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach($donors as $donor)
                                        <option value="{{ $donor->id }}">{{ $donor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="monthly_payment" class="block text-gray-700 text-sm font-bold mb-2">Monthly Payment:</label>
                                <select id="monthly_payment" name="monthly_payment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="100">$100</option>
                                    <option value="200">$200</option>
                                    <option value="300">$300</option>
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
    </div>
</x-app-layout>
