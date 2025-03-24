<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200 text-slate-900">
    <header class="bg-slate-800 shadow-lg sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-white text-xl font-bold hover:text-slate-200 transition duration-200">
                        Hot Take🔥
                    </a>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-4">
                    @guest
                    <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-slate-700 hover:text-white transition duration-200">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="px-3 py-2 rounded-md text-sm font-medium bg-blue-600 text-white hover:bg-blue-700 transition duration-200">
                        Register
                    </a>
                    @endguest

                     @auth
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-white hover:bg-slate-700 transition duration-200">
                        Log Out
                    </a>
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
