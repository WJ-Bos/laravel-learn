<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-3">Your Posts</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">All your shared thoughts in one place</p>
        </div>

        <!-- Stats Cards Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Total Posts Card -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-blue-100 mr-4">
                        <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm font-medium">Total Posts</h3>
                        <p class="text-2xl font-bold mt-1">{{ $posts->count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Most Liked Post Card -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-green-100 mr-4">
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm font-medium">Most Likes</h3>
                        <p class="text-2xl font-bold mt-1">{{ $mostLiked->likes_count ?? 0 }}</p>
                        <p class="text-xs text-gray-500 truncate">"{{ $mostLiked->title ?? 'No posts yet' }}"</p>
                    </div>
                </div>
            </div>

            <!-- Engagement Card -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-center">
                    <div class="p-3 rounded-lg bg-purple-100 mr-4">
                        <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm font-medium">Total Comments</h3>
                        <p class="text-2xl font-bold mt-1">{{ $totalComments }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $post->title }}</h3>
                    <span class="text-xs px-2 py-1 rounded-full {{ $post->visibility === 'public' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                        {{ ucfirst($post->visibility) }}
                    </span>
                </div>

                <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->body }}</p>

                <div class="flex items-center justify-between text-sm text-gray-500">
                    <span>{{ $post->created_at->format('M d, Y') }}</span>
                    <div class="flex space-x-3">
                        <span class="flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            {{ $post->likes_count }}
                        </span>
                        <span class="flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                            {{ $post->comments_count }}
                        </span>
                    </div>
                </div>

                <div class="mt-4 flex space-x-2">
                    <a href="{{ route('posts.edit', $post) }}" class="text-sm text-blue-600 hover:text-blue-800">Edit</a>
                    <span class="text-gray-300">|</span>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm text-red-600 hover:text-red-800">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($posts->hasPages())
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</x-layout>
