<x-layout>
    <div class="flex items-center justify-center min-h-screen p-4 ">
        <form class="w-full max-w-md bg-neutral-800 rounded-xl shadow-lg p-8 space-y-6 border border-neutral-700" method="post" action="{{ route('register') }}">
            <h2 class="text-2xl font-bold text-neutral-100 text-center">Register a new account</h2>
            @csrf

            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-medium text-neutral-300 mb-2">Name</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-neutral-100 placeholder-neutral-400 @error('name') border-red-500 @enderror"
                    placeholder="Your name"
                    value="{{ old('name') }}"
                >
                @error('name')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-neutral-300 mb-2">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-neutral-100 placeholder-neutral-400 @error('email') border-red-500 @enderror"
                    placeholder="your@email.com"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-neutral-300 mb-2">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-neutral-100 placeholder-neutral-400 @error('password') border-red-500 @enderror"
                    placeholder="••••••••"
                >
                @error('password')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Confirmation -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-neutral-300 mb-2">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-neutral-100 placeholder-neutral-400"
                    placeholder="••••••••"
                >
            </div>

            <!-- Register Button -->
            <button
                type="submit"
                class="w-full py-3 px-4 bg-amber-300 hover:bg-amber-400 text-black font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-neutral-800"
            >
                Register
            </button>

            <!-- Login Link -->
            <div class="text-center text-sm text-neutral-400">
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300 hover:underline">Login</a>
            </div>
        </form>
    </div>
</x-layout>
