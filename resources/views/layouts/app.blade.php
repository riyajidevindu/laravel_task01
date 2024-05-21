<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Scholarship_Management') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex">
        <!-- Vertical Navigation -->
        <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 fixed top-16 left-0 h-full w-64 z-12">
            <div class="flex flex-col h-full">
                <!-- Navigation Links -->
                <div class="flex-grow mt-10 space-y-6">
                    <p class="text-gray-300 uppercase tracking-wide text-xl text-center font-bold">Dash Board</p>
                    <!-- Home Link -->
                    <div class="px-4">
                        <p class="text-gray-300 uppercase tracking-wide text-m font-bold">Home</p>
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="block w-full  py-2 text-center text-gray-600 dark:text-gray-200 bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 rounded">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>


                    <!-- Receivers Links -->
                    <div class="px-4">
                        <p class="text-gray-300 uppercase tracking-wide text-m font-bold">Receivers</p>
                        <x-nav-link :href="route('scholarshipRecieverList')" :active="request()->routeIs('scholarshipRecieverList')" class="block w-full py-2 text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300">
                            List View
                        </x-nav-link>
                        <x-nav-link :href="route('addReceiver')" :active="request()->routeIs('addReceiver')" class="block w-full py-2 text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300">
                            Add Receiver
                        </x-nav-link>
                    </div>

                    <!-- Donors Links -->
                    <div class="px-4">
                        <p  class="text-gray-300 uppercase tracking-wide text-m font-bold">Donors</p>
                        <x-nav-link :href="route('donor.list')" :active="request()->routeIs('donor.list')" class="block w-full py-2 text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300">
                            Donor List
                        </x-nav-link>
                        <x-nav-link :href="route('donor.addpage')" :active="request()->routeIs('donor.addpage')" class="block w-full py-2 text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-gray-300">
                            Add Donor
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="flex-grow pl-64 pt-24">
            <!-- Top Bar -->
            <div class="fixed top-0 right-0 w-full z-10 flex justify-between items-center bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 px-4 py-4 sm:px-6 lg:px-8">
                <!-- Logo and Title -->
                <div class="flex items-center">
                    <svg class="h-8 w-8 text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9.293 4.293a1 1 0 011.414 0L12 5.586l2.293-2.293a1 1 0 111.414 1.414L13.414 7l2.293 2.293a1 1 0 01-1.414 1.414L12 8.414l-2.293 2.293a1 1 0 01-1.414-1.414L10.586 7 8.293 4.707a1 1 0 010-1.414z"></path>
                    </svg>
                    <h1 class="ml-2 text-2xl font-semibold text-gray-900 dark:text-gray-200">Scholarship Foundation</h1>
                </div>
                <!-- Settings Dropdown -->
                <div class="flex items-center px-4 sm:px-6 lg:px-8">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
