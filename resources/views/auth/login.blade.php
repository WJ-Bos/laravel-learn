<x-layout>
    <div class="flex items-center justify-center min-h-screen py-12 ">
        <form class="w-full max-w-md bg-neutral-800 rounded-xl shadow-lg p-8 space-y-6 border border-neutral-700" method="post"
            action="{{ route('login') }}">
            @csrf
            <h2 class="text-2xl font-bold text-neutral-100 text-center">Welcome back</h2>

            @error('failed')
                <p class="text-sm text-red-400 font-medium mt-1 p-2 bg-red-900/50 rounded-lg">{{ $message }}</p>
            @enderror

            <div>
                <label for="email" class="block text-sm font-medium text-neutral-300 mb-2">Email</label>
                <input type="text" id="email" name="email"
                    value="{{ old('email') }}"
                    class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-neutral-100 placeholder-neutral-400"
                    placeholder="your@email.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-neutral-300 mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition text-neutral-100 placeholder-neutral-400"
                    placeholder="••••••••">
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember"
                    class="w-4 h-4 text-blue-600 bg-neutral-700 border-neutral-600 rounded focus:ring-blue-500 focus:ring-offset-neutral-800">
                <label for="remember" class="ml-2 text-sm text-neutral-300">Remember me</label>
            </div>

            <button
                type="submit"
                class="w-full py-3 px-4 bg-amber-300 hover:bg-amber-400 text-black font-medium rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-neutral-800">
                Login
            </button>

            <div class="text-center text-sm text-neutral-400">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-400 hover:text-blue-300 hover:underline">Sign up</a>
            </div>
        </form>
    </div>
</x-layout>
