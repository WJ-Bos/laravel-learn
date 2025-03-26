<x-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-neutral-100">Create New Post</h1>
                <p class="text-neutral-400 mt-2">Share your thoughts with the community</p>
            </div>
        </div>

        <div class="max-w-2xl mx-auto bg-neutral-800 rounded-xl shadow-sm border border-neutral-700 p-6">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-neutral-300 mb-2">Post Title</label>
                    <input type="text" id="title" name="title"
                        class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-300 focus:border-transparent transition text-neutral-100 placeholder-neutral-400"
                        placeholder="Enter a title for your post" maxlength="100" required value="{{ old('title') }}">
                    @error('title')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="body" class="block text-sm font-medium text-neutral-300 mb-2">Post Content</label>
                    <textarea id="body" name="body" rows="8"
                        class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-300 focus:border-transparent transition text-neutral-100 placeholder-neutral-400"
                        placeholder="Write your post content here..." required value="{{ old('body') }}"></textarea>
                    @error('body')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="hashtag" class="block text-sm font-medium text-neutral-300 mb-2">Post Hastag (Do not
                        add a #)</label>
                    <input type="hashtag" id="hashtag" name="hashtag"
                        class="w-full px-4 py-3 bg-neutral-700 border border-neutral-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-300 focus:border-transparent transition text-neutral-100 placeholder-neutral-400"
                        placeholder="WeLoveAll" maxlength="20" value="{{ old('hashtag') }}">
                    @error('hashtag')
                        <p class="mt-1 text-sm text-red-400">
                            @if ($message === 'The hashtag must not start with a #.')
                                ⚠️ {{ $message }}
                            @else
                                {{ $message }}
                            @endif
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('posts') }}"
                        class="px-4 py-2 border border-neutral-600 rounded-lg text-neutral-300 hover:bg-neutral-700 transition duration-200 text-center">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-2 bg-amber-300 text-black  rounded-lg transition duration-200 shadow-sm">
                        Publish Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
