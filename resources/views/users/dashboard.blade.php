<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Profile Header -->
        <div class="flex flex-col md:flex-row gap-6 mb-8">
            <div class="flex-shrink-0">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile picture"
                    class="h-32 w-32 rounded-full object-cover border-4 border-neutral-800 shadow-lg">
            </div>
            <div class="flex-1">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-neutral-100">{{ auth()->user()->name }}</h1>
                        <p class="text-neutral-400">@ {{ auth()->user()->name }}</p>
                    </div>
                    <button
                        class="mt-4 md:mt-0 bg-amber-300 text-black px-6 py-2 rounded-full transition duration-200 shadow-sm">
                        Edit Profile
                    </button>
                </div>

                <p class="mt-4 text-neutral-300">Digital creator | Photography enthusiast | Sharing moments that matter</p>

                <div class="flex space-x-6 mt-4 text-neutral-100">
                    <div>
                        <span class="font-semibold">1,248</span>
                        <span class="text-neutral-400 ml-1">posts</span>
                    </div>
                    <div>
                        <span class="font-semibold">24.8k</span>
                        <span class="text-neutral-400 ml-1">followers</span>
                    </div>
                    <div>
                        <span class="font-semibold">342</span>
                        <span class="text-neutral-400 ml-1">following</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-neutral-800 p-6 rounded-xl shadow-sm border border-neutral-700">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-blue-900/50 mr-4">
                        <svg class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-neutral-400 text-sm font-medium">Total Posts</h3>
                        <p class="text-2xl font-bold mt-1 text-neutral-100">{{ count($posts) }}</p>
                    </div>
                </div>
            </div>
            <!-- Other stat cards with similar dark mode styling -->
        </div>

        <!-- Content Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Posts -->
            <div class="lg:col-span-2 bg-neutral-800 p-6 rounded-xl shadow-sm border border-neutral-700">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-neutral-100">Recent Posts</h2>
                    <a href="{{ route('myPosts') }}" class="text-blue-400 text-sm hover:underline">View All</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    @if (session('error'))
                        <div class="bg-red-900/50 text-red-300 p-4 rounded-lg">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($posts->count() > 0)
                        @forelse($posts as $post)
                            <div
                                class="bg-neutral-800 rounded-xl shadow-sm border border-neutral-700 overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1">
                                <!-- Post Header -->
                                <div
                                    class="p-4 border-b border-neutral-700 bg-gradient-to-r from-neutral-800 to-neutral-700">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="h-10 w-10 rounded-full bg-amber-300 p-0.5 overflow-hidden">
                                            <img src="https://i.pravatar.cc/150?img={{ $post->id % 70 }}" alt="User"
                                                class="h-full w-full object-cover rounded-full border border-neutral-800">
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-neutral-100">username</h4>
                                            <p class="text-xs text-blue-400 font-medium">
                                                {{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                        <button class="text-neutral-400 hover:text-neutral-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Post Content -->
                                <div class="p-4">
                                    <div class="mb-3">
                                        <span
                                            class="inline-block px-2 py-1 text-xs font-semibold bg-blue-900/50 text-blue-400 rounded-full">#Laravel</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-neutral-100 mb-2">{{ $post->title }}</h3>
                                    <p class="text-neutral-300 mb-4">{{ Str::limit($post->body, 120) }}</p>
                                </div>

                                <!-- Post Actions -->
                                <div class="p-4 border-t border-neutral-700 flex justify-between text-neutral-400">
                                    <button class="flex items-center gap-1 hover:text-pink-400 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <span class="text-sm font-medium">42</span>
                                    </button>
                                    <button class="flex items-center gap-1 hover:text-emerald-400 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                        </svg>
                                        <span class="text-sm font-medium">8</span>
                                    </button>
                                    <button class="flex items-center gap-1 hover:text-blue-400 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                        </svg>
                                        <span class="text-sm font-medium">Share</span>
                                    </button>
                                </div>
                            </div>
                        @empty
                            <div
                                class="md:col-span-2 bg-neutral-800 rounded-xl shadow-sm border border-neutral-700 p-8 text-center">
                                <div
                                    class="mx-auto w-24 h-24 bg-blue-900/50 rounded-full flex items-center justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-neutral-100 mb-2">No posts yet</h3>
                                <p class="text-neutral-400 mb-4">Be the first to share your thoughts with the community!
                                </p>
                                <a href="{{ route('posts.create') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-neutral-100 rounded-lg shadow-md font-medium transition">
                                    Create your first post
                                </a>
                            </div>
                        @endforelse
                    @else
                        <p class="text-neutral-400">You have no posts yet.</p>
                    @endif
                </div>
            </div>

            <!-- Activity & Favorites -->
            <div class="space-y-6">
                <!-- Favorites -->
                <div class="bg-neutral-800 p-6 rounded-xl shadow-sm border border-neutral-700">
                    <h2 class="text-xl font-semibold text-neutral-100 mb-4">Favorites</h2>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-neutral-700 mr-3 overflow-hidden">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                                    class="h-full w-full object-cover">
                            </div>
                            <div>
                                <p class="font-medium text-neutral-100">Sarah Miller</p>
                                <p class="text-xs text-neutral-500">Photographer</p>
                            </div>
                            <button class="ml-auto text-neutral-400 hover:text-red-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-neutral-800 p-6 rounded-xl shadow-sm border border-neutral-700">
                    <h2 class="text-xl font-semibold text-neutral-100 mb-4">Recent Activity</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 h-8 w-8 rounded-full bg-purple-900/50 flex items-center justify-center mr-3">
                                <svg class="h-5 w-5 text-purple-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-neutral-300"><span class="font-medium">Sarah Miller</span> liked
                                    your post</p>
                                <p class="text-xs text-neutral-500 mt-1">15 minutes ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
