<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200 text-slate-900">
    <header class="bg-slate-800 shadow-lg sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}"
                        class="text-white text-xl font-bold hover:text-slate-200 transition duration-200">
                        Type Shi🔥
                    </a>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-4">
                    @guest
                        <a href="{{ route('login') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-slate-700 hover:text-white transition duration-200">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="px-3 py-2 rounded-md text-sm font-medium bg-blue-600 text-white hover:bg-blue-700 transition duration-200">
                            Register
                        </a>
                    @endguest

                    @auth
                        <div class=" relative grid place-items-center focus:ring-blue-200" x-data="{ open: false }">
                            <button @click="open = !open" type="button" class="w-10 h-10  rounded-full" x>
                                <img src="https://picsum.photos/200" class="rounded-full" alt="">
                            </button>

                            <div class="bg-white shadow-lg absolute top-12 right-0 rounded-lg overflow-hidden w-48 border border-gray-100 z-50"
                                x-show="open" @click.outside="open = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95">

                                <div class="px-4 py-3 border-b border-gray-100">
                                    <p class="text-sm font-medium text-gray-900 truncate">{{auth()->user()->name}}</p>
                                    <p class="text-xs text-gray-500 truncate">{{auth()->user()->email}}</p>
                                </div>

                                <a href="{{ route('home') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-150">
                                    Home
                                </a>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-150">
                                    Dashboard
                                </a>

                                    <form class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-150"
                                    method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    <button type="submit">
                                          Sign out
                                    </button>
                                    </form>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8 px-4 mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>
</body>

</html>
