<x-layout>
    @auth
        <div class="container mx-auto px-4 py-8">
            <!-- Page Header (unchanged) -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Community Feed</h1>
                    <p class="text-gray-600 mt-2">Latest thoughts from people you follow</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('posts.create') }}">
                       <div class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition duration-200 shadow-sm flex items-center">
                        <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        New Post
                        </div>
                    </a>
                </div>

            </div>
            <!-- Mobile View (hidden on desktop) -->
            <div class="block lg:hidden overflow-y-auto" style="height: calc(100vh - 180px)">

                <div class="space-y-6 pb-6">
                    <!-- Post Card 1 -->
                    @foreach ($posts as $post)
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-4">
                                    <img src="https://picsum.photos/200" alt="User"
                                        class="h-full w-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-medium text-gray-900">Username</p>
                                            <p class="text-xs text-gray-500">{{$post->created_at->diffForHumans()}}</p>
                                        </div>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold p-2 underline">{{$post->title}}</h3>
                                    </div>
                                    <div class="mt-3 text-gray-800">
                                        <p>{{Str::words($post->body,40)}}</p>
                                    </div>
                                    <div class="mt-4 flex items-center space-x-4 text-gray-500 text-sm">
                                        <!-- Like, Comment, Favorite buttons... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Desktop View -->
            <div class="hidden lg:grid lg:grid-cols-3 gap-6 h-[calc(100vh-180px)]">
                <div class="lg:col-span-2 overflow-y-auto pr-2">
                    <div class="space-y-6">
                        @foreach ($posts as $post)
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-4">
                                    <img src="https://picsum.photos/200" alt="User"
                                        class="h-full w-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="font-medium text-gray-900">Username</h3>
                                            <p class="text-xs text-gray-500">{{$post->created_at->diffForHumans()}}</p>
                                        </div>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold p-2 underline">{{$post->title}}</h3>
                                    </div>
                                    <div class="mt-3 text-gray-800">
                                        <p>{{Str::words($post->body,40)}}</p>
                                    </div>
                                    <div class="mt-4 flex items-center space-x-4 text-gray-500 text-sm">
                                        <!-- Like, Comment, Favorite buttons... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- Sidebar (hidden on mobile) -->
                <div class="hidden lg:block space-y-6 sticky top-28 h-fit">
                    <!-- Who to Follow -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Who to Follow</h2>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-200 overflow-hidden mr-3">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User"
                                        class="h-full w-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">David Kim</p>
                                    <p class="text-xs text-gray-500 truncate">Product Designer</p>
                                </div>
                                <button
                                    class="ml-4 bg-white border border-gray-300 text-gray-700 px-3 py-1 rounded-full text-sm font-medium hover:bg-gray-50 transition duration-150">
                                    Follow
                                </button>
                            </div>
                            <!-- More follow suggestions... -->
                        </div>
                    </div>

                    <!-- Trending Topics -->
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Trending Topics</h2>
                        <div class="space-y-3">
                            <a href="#" class="block hover:bg-gray-50 p-2 rounded-lg transition duration-150">
                                <p class="text-sm font-medium text-gray-900">#Productivity</p>
                                <p class="text-xs text-gray-500">1,245 posts today</p>
                            </a>
                            <!-- More trending topics... -->
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
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Join Our Growing Community</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-10">
                    Connect with like-minded people and share your thoughts in a positive environment.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('register') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full text-lg font-medium transition duration-200 shadow-md">
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
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Join Our Community?</h2>
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
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">See What People Are Sharing</h2>

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
                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full text-lg font-medium transition duration-200 shadow-md">
                            Join Now to See More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer CTA -->
            <div class="bg-blue-600 py-16 rounded-4xl">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold text-white mb-6">Ready to Join the Conversation?</h2>
                    <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-10">
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
