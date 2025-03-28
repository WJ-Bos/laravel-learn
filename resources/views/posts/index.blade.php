<x-layout>
    @auth
        <div class="min-h-[calc(100vh-4rem)] ">
            <!-- Vibrant Search Header -->
            <div class=" py-6 px-4 border-b border-neutral-700">
                <div class="relative max-w-2xl mx-auto">
                    <input type="text" placeholder="Search posts, people, or tags..."
                        class="w-full pl-12 pr-4 py-3 bg-neutral-800/80 backdrop-blur-sm rounded-full border border-neutral-700 focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm text-neutral-100 placeholder-neutral-400">
                    <div class="absolute left-4 top-3.5 text-neutral-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Left Sidebar -->
                <div class="lg:col-span-3 space-y-6">
                    <!-- User Profile Card -->
                    <div class="bg-neutral-800 rounded-xl shadow-sm p-5 border border-neutral-700 sticky top-32">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="h-14 w-14 rounded-full bg-amber-300 p-0.5 overflow-hidden">
                                <img src="https://i.pravatar.cc/150?img=5" alt="Profile"
                                    class="h-full w-full object-cover rounded-full border-2 border-neutral-800">
                            </div>
                            <div>
                                <h3 class="font-bold text-neutral-100 text-lg">{{ auth()->user()->name }}</h3>
                                <p class="text-sm text-blue-400 font-medium">@ {{ auth()->user()->name }}</p>
                            </div>
                        </div>
                        <a href="{{ route('posts.create') }}"
                            class="w-full flex items-center justify-center gap-2 px-4 py-3 bg-amber-300 text-black rounded-xl shadow-md transition font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            New Post
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="w-full mt-3 flex items-center justify-center gap-2 px-4 py-2.5 border border-neutral-700 bg-neutral-800 hover:bg-neutral-700 text-neutral-100 rounded-xl transition font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Dashboard
                        </a>
                    </div>

                    <!-- Trending Topics -->
                    <div class="bg-neutral-800 rounded-xl shadow-sm p-5 border border-neutral-700 sticky top-[22rem]">
                        <h3 class="font-bold text-lg text-neutral-100 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            Trending Today
                        </h3>
                        <div class="space-y-3">
                            <a href="#" class="block p-3 hover:bg-neutral-700/50 rounded-xl transition">
                                <div class="flex justify-between items-center">
                                    <span class="font-bold text-blue-400">#LaravelTips</span>
                                    <span class="text-xs bg-blue-900/50 text-blue-400 px-2 py-1 rounded-full">1.2K
                                        posts</span>
                                </div>
                                <p class="text-sm text-neutral-400 mt-1">Latest tips and tricks for Laravel developers</p>
                            </a>
                            <!-- More trending topics... -->
                        </div>
                    </div>
                </div>

                <!-- Main Feed - 2 Column Posts -->
                <div class="lg:col-span-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        @forelse($posts as $post)
                            <div
                                class="bg-neutral-800 rounded-xl shadow-sm border border-neutral-700 overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1">
                                <!-- Post Header -->
                                <div
                                    class="p-4 border-b border-neutral-700 bg-gradient-to-r from-neutral-800 to-neutral-700">
                                    <div class="flex items-center gap-3">
                                        <div class="h-10 w-10 rounded-full bg-amber-300 p-0.5 overflow-hidden">
                                            <img src="https://i.pravatar.cc/150?img={{ $post->id % 70 }}" alt="User"
                                                class="h-full w-full object-cover rounded-full border border-neutral-800">
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-neutral-100">{{ $post->user->name }}</h4>
                                            <p class="text-xs text-amber-300 font-medium">
                                                <span class="text-neutral-400">posted</span>
                                                {{ $post->created_at->diffForHumans() }}
                                            </p>
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
                                        @php
                                            $colorClasses = [
                                                'bg-red-300',
                                                'bg-blue-300',
                                                'bg-green-300',
                                                'bg-purple-300',
                                                'bg-amber-300',
                                                'bg-emerald-300',
                                            ];
                                            $randomColor = $colorClasses[array_rand($colorClasses)];
                                        @endphp

                                        <span
                                            class="inline-block px-2 py-1 text-xs font-semibold rounded-full text-black {{ $randomColor }}">
                                            @if ($post->hashtag)
                                                #{{ $post->hashtag }}
                                            @else
                                                #NoHashTag
                                            @endif
                                        </span>
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
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="lg:col-span-3 space-y-6">
                    <!-- Who to Follow -->
                    <div class="bg-neutral-800 rounded-xl shadow-sm border border-neutral-700 p-5 sticky top-32">
                        <h3 class="font-bold text-lg text-neutral-100 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Who to follow
                        </h3>
                        <div class="space-y-4">
                            <div
                                class="flex items-center justify-between p-2 hover:bg-neutral-700/50 rounded-xl transition">
                                <div class="flex items-center gap-3">
                                    <div class="h-12 w-12 rounded-full bg-amber-300 p-0.5 overflow-hidden">
                                        <img src="https://i.pravatar.cc/150?img=11"
                                            class="h-full w-full object-cover rounded-full border-2 border-neutral-800">
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-neutral-100">Alice Cooper</h4>
                                        <p class="text-xs text-amber-300 font-medium">Laravel Core Team</p>
                                    </div>
                                </div>
                                <button
                                    class="text-sm px-3 py-1 bg-neutral-800 border border-neutral-700 text-neutral-100 hover:bg-neutral-700 rounded-full shadow-sm transition">
                                    Follow
                                </button>
                            </div>
                            <!-- More follow suggestions... -->
                        </div>
                        <a href="#"
                            class="block mt-4 text-center text-sm font-medium text-blue-400 hover:text-blue-300">Show
                            more</a>
                    </div>

                    <!-- Popular Communities -->
                    <div class="bg-neutral-800 rounded-xl shadow-sm border border-neutral-700 p-5 sticky top-[22rem]">
                        <h3 class="font-bold text-lg text-neutral-100 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            Popular Communities
                        </h3>
                        <div class="space-y-3">
                            <a href="#"
                                class="flex items-center justify-between p-3 hover:bg-neutral-700/50 rounded-xl transition">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="h-10 w-10 rounded-full bg-red-500 flex items-center justify-center text-white font-bold">
                                        L
                                    </div>
                                    <span class="font-bold text-neutral-100">Laravel</span>
                                </div>
                                <span class="text-xs bg-amber-900/50 text-amber-400 px-2 py-1 rounded-full">12.5K
                                    members</span>
                            </a>
                            <!-- More communities... -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth

    @guest
        <div class="min-h-screen ">
            <!-- Hero Section -->
            <div class="container mx-auto px-4 py-20 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Join Our Growing Community</h1>
                <p class="text-xl text-white max-w-2xl mx-auto mb-10">
                    Connect with like-minded people and share your thoughts in a positive environment.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('register') }}"
                        class="bg-amber-300 text-black px-8 py-3 rounded-full text-lg font-medium transition duration-200 shadow-md">
                        Get Started
                    </a>
                    <a href="{{ route('login') }}"
                        class="bg-white hover:bg-gray-100 text-gray-800 px-8 py-3 rounded-full text-lg font-medium transition duration-200 shadow-md">
                        Sign In
                    </a>
                </div>
            </div>

            <!-- Features Section -->
            <div class="container mx-auto px-4 py-16">
                <h2 class="text-3xl font-bold text-center text-white mb-12">Why Join Our Community?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 text-center">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Connect with Others</h3>
                        <p class="text-gray-600">Join meaningful conversations and meet people who share your interests.
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 text-center">
                        <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Share Your Thoughts</h3>
                        <p class="text-gray-600">Express yourself freely in a supportive and respectful environment.</p>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 text-center">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Safe Environment</h3>
                        <p class="text-gray-600">We prioritize creating a positive space for everyone in our community.</p>
                    </div>
                </div>
            </div>

            <!-- Preview Section -->
            <div class=" py-16">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center text-white mb-12">See What People Are Sharing</h2>

                    <div class="max-w-2xl mx-auto space-y-6">
                        <!-- Sample Post 1 -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center mb-4">
                                <div class="h-10 w-10 rounded-full bg-gray-300 mr-3"></div>
                                <div>
                                    <p class="font-medium text-gray-800">Community Member</p>
                                    <p class="text-xs text-gray-500">2 days ago</p>
                                </div>
                            </div>
                            <p class="text-gray-700 italic">"This community has been so welcoming! I've already learned so
                                much from the discussions here."</p>
                        </div>

                        <!-- Sample Post 2 -->
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <div class="flex items-center mb-4">
                                <div class="h-10 w-10 rounded-full bg-gray-300 mr-3"></div>
                                <div>
                                    <p class="font-medium text-gray-800">Community Member</p>
                                    <p class="text-xs text-gray-500">1 week ago</p>
                                </div>
                            </div>
                            <p class="text-gray-700 italic">"Finally found a place where I can have thoughtful
                                conversations without all the noise of other platforms."</p>
                        </div>
                    </div>

                    <div class="text-center mt-12">
                        <a href="{{ route('register') }}"
                            class="inline-block bg-amber-300 text-black px-8 py-3 rounded-full text-lg font-medium transition duration-200 shadow-md">
                            Join Now to See More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer CTA -->
            <div class="bg-amber-300/30 py-16 rounded-4xl text-white">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold  mb-6">Ready to Join the Conversation?</h2>
                    <p class="text-xl  max-w-2xl mx-auto mb-10">
                        Sign up now and start connecting with our community in seconds.
                    </p>
                    <a href="{{ route('register') }}"
                        class="inline-block bg-white hover:bg-gray-100 text-blue-600 px-8 py-3 rounded-full text-lg font-medium transition duration-200 shadow-md">
                        Create Your Account
                    </a>
                </div>
            </div>
        </div>
    @endguest
</x-layout>
