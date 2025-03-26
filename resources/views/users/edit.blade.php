<x-layout>
    <div class="min-h-screen bg-neutral-900 text-gray-100">
        <!-- Dashboard Header -->
        <header class="bg-neutral-800 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-amber-300">Edit Profile</h1>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}"
                        class="text-sm bg-neutral-700 hover:bg-neutral-600 px-4 py-2 rounded-md transition-colors duration-200">
                        Back to Dashboard
                    </a>

                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-neutral-800 rounded-xl shadow-md overflow-hidden">
                <div class="p-6 sm:p-8">
                    <form method="POST" action="{{ route() }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="space-y-6">
                            <!-- Profile Picture Section -->
                            <div class="flex flex-col sm:flex-row items-center gap-6">
                                <div class="flex-shrink-0">
                                    <img id="profile-preview"
                                        class="h-32 w-32 rounded-full object-cover border-2 border-neutral-700"
                                        src="{{ auth()->user()->profile_picture ?? 'https://picsum.photos/200' }}"
                                        alt="Current profile picture">
                                    <input type="file" id="profile_picture" name="profile_picture" class="hidden"
                                        accept="image/*">
                                </div>
                            </div>
                            <!-- Name Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-neutral-300 mb-1">First
                                        Name</label>
                                    <input type="text" id="name" name="name"
                                        value="{{ old('name', auth()->user()->name) }}"
                                        class="w-full bg-neutral-700 border border-neutral-600 rounded-md px-4 py-2 text-white focus:ring-2 focus:ring-amber-300 focus:border-transparent transition duration-200">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="surname" class="block text-sm font-medium text-neutral-300 mb-1">Last
                                        Name</label>
                                    <input type="text" id="surname" name="surname"
                                        value="{{ old('surname', auth()->user()->surname) }}"
                                        class="w-full bg-neutral-700 border border-neutral-600 rounded-md px-4 py-2 text-white focus:ring-2 focus:ring-amber-300 focus:border-transparent transition duration-200">
                                    @error('surname')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Username -->
                            <div>
                                <label for="username"
                                    class="block text-sm font-medium text-neutral-300 mb-1">Username</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md bg-neutral-700 border border-r-0 border-neutral-600 text-neutral-300">@</span>
                                    <input type="text" id="username" name="username"
                                        value="{{ old('username', auth()->user()->username) }}"
                                        class="flex-1 bg-neutral-700 border border-neutral-600 rounded-r-md px-4 py-2 text-white focus:ring-2 focus:ring-amber-300 focus:border-transparent transition duration-200">
                                </div>
                                @error('username')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- About Section -->
                            <div>
                                <label for="about"
                                    class="block text-sm font-medium text-neutral-300 mb-1">About</label>
                                <textarea id="about" name="about" rows="4"
                                    class="w-full bg-neutral-700 border border-neutral-600 rounded-md px-4 py-2 text-white focus:ring-2 focus:ring-amber-300 focus:border-transparent transition duration-200">{{ old('about', auth()->user()->about) }}</textarea>
                                @error('about')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Form Actions -->
                            <div class="flex flex-col sm:flex-row justify-end gap-3 pt-4 border-t border-neutral-700">
                                <a href="{{ route('dashboard') }}"
                                    class="px-6 py-2 border border-neutral-600 rounded-md text-center text-neutral-300 hover:bg-neutral-700 transition-colors duration-200">
                                    Cancel
                                </a>
                                <button type="submit"
                                    class="px-6 py-2 bg-amber-300 hover:bg-amber-400 text-neutral-900 font-medium rounded-md transition-colors duration-200">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</x-layout>
