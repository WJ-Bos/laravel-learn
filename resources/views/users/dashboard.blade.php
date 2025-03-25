<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Profile Header -->
        <div class="flex flex-col md:flex-row gap-6 mb-8">
            <div class="flex-shrink-0">
                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                     alt="Profile picture"
                     class="h-32 w-32 rounded-full object-cover border-4 border-white shadow-lg">
            </div>
            <div class="flex-1">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-800">Alex Johnson</h1>
                        <p class="text-gray-600">@alexjohnson</p>
                    </div>
                    <button class="mt-4 md:mt-0 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full transition duration-200 shadow-sm">
                        Edit Profile
                    </button>
                </div>

                <p class="mt-4 text-gray-700">Digital creator | Photography enthusiast | Sharing moments that matter</p>

                <div class="flex space-x-6 mt-4">
                    <div>
                        <span class="font-semibold">1,248</span>
                        <span class="text-gray-600 ml-1">posts</span>
                    </div>
                    <div>
                        <span class="font-semibold">24.8k</span>
                        <span class="text-gray-600 ml-1">followers</span>
                    </div>
                    <div>
                        <span class="font-semibold">342</span>
                        <span class="text-gray-600 ml-1">following</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-blue-100 mr-4">
                        <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm font-medium">Total Posts</h3>
                        <p class="text-2xl font-bold mt-1">1,248</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-red-100 mr-4">
                        <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm font-medium">Total Likes</h3>
                        <p class="text-2xl font-bold mt-1">24.8k</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-yellow-100 mr-4">
                        <svg class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm font-medium">Saved Posts</h3>
                        <p class="text-2xl font-bold mt-1">187</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-green-100 mr-4">
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm font-medium">Comments</h3>
                        <p class="text-2xl font-bold mt-1">3,421</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Posts -->
            <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-800">Recent Posts</h2>
                    <a href="#" class="text-blue-600 text-sm hover:underline">View All</a>
                </div>

                <div class="space-y-4">
                    <div class="p-4 hover:bg-gray-50 rounded-lg transition duration-150 border border-gray-100">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded-full mr-2">Photo</span>
                            <span class="text-gray-500 text-sm">2 hours ago</span>
                            <button class="ml-auto text-gray-400 hover:text-red-500">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <p class="font-medium text-gray-900 mb-2">Sunset at the beach</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center mr-4">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                248
                            </span>
                            <span class="flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                32
                            </span>
                        </div>
                    </div>

                    <div class="p-4 hover:bg-gray-50 rounded-lg transition duration-150 border border-gray-100">
                        <div class="flex items-center mb-3">
                            <span class="bg-purple-600 text-white text-xs px-2 py-1 rounded-full mr-2">Thought</span>
                            <span class="text-gray-500 text-sm">Yesterday</span>
                            <button class="ml-auto text-red-500">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <p class="font-medium text-gray-900 mb-2">Why I started creating content</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span class="flex items-center mr-4">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                512
                            </span>
                            <span class="flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                                84
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity & Favorites -->
            <div class="space-y-6">
                <!-- Favorites -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Favorites</h2>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-gray-200 mr-3 overflow-hidden">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="h-full w-full object-cover">
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Sarah Miller</p>
                                <p class="text-xs text-gray-500">Photographer</p>
                            </div>
                            <button class="ml-auto text-gray-400 hover:text-red-500">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-gray-200 mr-3 overflow-hidden">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User" class="h-full w-full object-cover">
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Mike Chen</p>
                                <p class="text-xs text-gray-500">Travel Blogger</p>
                            </div>
                            <button class="ml-auto text-red-500">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center mr-3">
                                <svg class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-800"><span class="font-medium">Sarah Miller</span> liked your post</p>
                                <p class="text-xs text-gray-500 mt-1">15 minutes ago</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-800"><span class="font-medium">Mike Chen</span> commented: "Great shot!"</p>
                                <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
