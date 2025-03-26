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

<body class="bg-neutral-900 text-neutral-100 min-h-screen flex flex-col">
    <header class="bg-neutral-800 shadow-lg sticky top-0 z-50 border-b border-neutral-700">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('posts') }}"
                        class="text-white text-xl font-bold hover:text-blue-400 transition duration-200">
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
                        <div class="relative grid place-items-center focus:ring-blue-200" x-data="{ open: false }">
                            <button @click="open = !open" type="button"
                                class="w-10 h-10 rounded-full hover:ring-2 hover:ring-blue-500 transition-all duration-200">
                                <img src="https://picsum.photos/200" class="rounded-full w-full h-full object-cover"
                                    alt="Profile picture">
                            </button>

                            <div class="bg-neutral-800 shadow-xl absolute top-14 right-0 rounded-md w-56 border border-neutral-700 z-50"
                                x-show="open" @click.outside="open = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95">

                                <div class="px-4 py-3 border-b border-neutral-700 bg-neutral-900/50">
                                    <p class="text-sm font-semibold text-white truncate">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-neutral-400 truncate">{{ auth()->user()->email }}</p>
                                </div>

                                <div class="py-1">
                                    <a href="{{ route('posts') }}"
                                        class="flex items-center px-4 py-2.5 text-sm text-neutral-300 hover:bg-neutral-700/50 hover:text-white transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        Home
                                    </a>
                                    <a href="{{ route('dashboard') }}"
                                        class="flex items-center px-4 py-2.5 text-sm text-neutral-300 hover:bg-neutral-700/50 hover:text-white transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        Dashboard
                                    </a>
                                    <a href="{{ route('posts.create') }}"
                                        class="flex items-center px-4 py-2.5 text-sm text-neutral-300 hover:bg-neutral-700/50 hover:text-white transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Create Post
                                    </a>
                                </div>

                                <div class="py-1 border-t border-neutral-700">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="flex items-center w-full px-4 py-2.5 text-sm text-neutral-300 hover:bg-neutral-700/50 hover:text-red-400 transition-colors duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            Sign out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <main class="flex-1 w-full bg-gradient-to-br from-neutral-950 to-neutral-800">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
