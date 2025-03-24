<x-layout>
    <div class="  flex items-center justify-center p-4">
        <form class="w-full max-w-md bg-white rounded-xl shadow-md p-8 space-y-6" method="post" action="{{ route('register') }}">
            <h2 class="text-2xl font-bold text-gray-800 text-center">Register a new account</h2>
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('name') ring-1 ring-red-500 @enderror"
                    placeholder="Your name"
                    value="{{ old('name') }}"
                
                >
                @error('name')
                    <p class="text-xs text-red-500 font-light mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('email') ring-1 ring-red-500 @enderror"
                    placeholder="your@email.com"
                    value="{{ old('email') }}"

                >
                @error('email')
                    <p class="text-xs text-red-500 font-light mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition @error('password') ring-1 ring-red-500 @enderror"
                    placeholder="••••••••"

                >
                @error('password')
                    <p class="text-xs text-red-500 font-light mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                    placeholder="••••••••"

                >
            </div>

            <button
                class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Register
            </button>
        </form>
    </div>
</x-layout>
