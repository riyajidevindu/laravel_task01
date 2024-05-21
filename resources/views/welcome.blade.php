<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scholarship Management</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>


    </head>
    <body class="font-sans antialiased dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">

                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-2 ml-10">
                        <!-- About Section -->
                        <div class="relative bg-cover bg-center h-screen" style="background-image: url('images/background.jpg');">
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center justify-center">
                                <div class="text-center">
                                    <h2 class="text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl mb-4">
                                        Welcome to the Scholarship Foundation
                                    </h2>
                                    <p class="mt-4 max-w-2xl text-lg text-gray-200 lg:mx-auto">
                                        Empowering the future leaders of tomorrow, one scholarship at a time.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Section -->
                        <div class="bg-gray-900 py-12">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="lg:text-center">
                                    <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase mb-2">Testimonials</h2>
                                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-100 sm:text-4xl">
                                        Hear from Our Scholars
                                    </p>
                                </div>
                                <div class="mt-10 flex flex-wrap -mx-4 justify-center">
                                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                                        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                                            <p class="text-gray-500 text-base mb-4">"The scholarship has given me wings to fly and pursue my dreams without financial worries."</p>
                                            <div class="flex items-center">
                                                <div class="w-12 h-12 rounded-full bg-gray-200"></div>
                                                <div class="ml-4">
                                                    <p class="text-gray-100 font-semibold">John Doe</p>
                                                    <p class="text-gray-600 text-sm">Computer Science Major</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                                        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                                            <p class="text-gray-500 text-base mb-4">"Thanks to the foundation, I can pursue my passion for engineering without any hindrances. The support and mentorship are priceless."</p>
                                            <div class="flex items-center">
                                                <div class="w-12 h-12 rounded-full bg-gray-800"></div>
                                                <div class="ml-4">
                                                    <p class="text-gray-100 font-semibold">Jane Smith</p>
                                                    <p class="text-gray-600 text-sm">Engineering Major</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                                        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                                            <p class="text-gray-500 text-base mb-4">"The Scholarship Foundation has not only supported me financially but has also guided me towards a brighter future. I am forever grateful."</p>
                                            <div class="flex items-center">
                                                <div class="w-12 h-12 rounded-full bg-gray-800"></div>
                                                <div class="ml-4">
                                                    <p class="text-gray-100 font-semibold">Samuel Green</p>
                                                    <p class="text-gray-600 text-sm">Business Administration Major</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="bg-gray-900 text-white py-12 px-12 ml-10 mt-10 text-center">
                        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <div>
                                    <h3 class="text-lg font-semibold mb-4">About Us</h3>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>

                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>

                                </div>
                            </div>
                            <div class="mt-8 border-t text-center border-gray-700 pt-8">
                                <p class="text-gray-400 text-sm">&copy; 2024 Scholarship Foundation. All rights reserved.</p>
                                <p class="text-gray-400 text-sm mt-2">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
                            </div>
                        </div>
                    </footer>


                </div>
            </div>
        </div>
    </body>
</html>
