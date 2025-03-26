<x-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Header with Navigation -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-neutral-100">{{ auth()->user()->name }}'s Posts</h1>
                <p class="text-neutral-400 mt-2">Browse all your posts</p>
            </div>
            <div class="mt-4 md:mt-0 flex space-x-3">
                <a href="{{ route('posts') }}"
                   class="px-4 py-2 bg-neutral-700 hover:bg-neutral-600 text-neutral-100 rounded-lg transition duration-200">
                    Home
                </a>
                <a href="{{ route('dashboard') }}"
                   class="px-4 py-2 bg-amber-300 text-black rounded-lg transition duration-200">
                    Dashboard
                </a>
            </div>
        </div>

        <!-- 3-Column Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($posts as $post)
            <div class="bg-neutral-800 p-6 rounded-xl shadow-sm border border-neutral-700 hover:shadow-lg transition-all duration-200 hover:-translate-y-1">
                <h2 class="text-xl font-semibold text-neutral-100 mb-3">{{ $post->title }}</h2>
                <p class="text-neutral-300 mb-4">{{ $post->body }}</p>
                <div class="text-sm text-neutral-500">
                    Posted {{ $post->created_at->diffForHumans() }}
                </div>
                <div class="mt-4">
                    <a class="px-4 py-2 bg-amber-300 text-xs text-black rounded-lg transition duration-200">
                    View Post
                </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-10">
                <p class="text-neutral-400">No posts found in the community yet.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination - Dark Mode Styled -->

    </div>
</x-layout>
