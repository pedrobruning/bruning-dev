<x-app-layout>
    <div class="mb-12">
        <h1 class="text-4xl font-bold mb-4">{{ __('Blog') }}</h1>
        <p class="text-slate-400 text-lg max-w-2xl">
            {{ __('Thoughts, tutorials, and insights on software development and technology.') }}
        </p>
    </div>

    <div class="grid grid-cols-1 gap-8 max-w-3xl">
        @php
            $posts = \App\Models\Post::where('is_active', true)
                ->whereNotNull('published_at')
                ->orderByDesc('published_at')
                ->get();
        @endphp

        @foreach($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group block">
                <article class="flex flex-col md:flex-row gap-6 items-start">
                    @if($post->image)
                        <div class="w-full md:w-48 aspect-video md:aspect-square bg-slate-800 rounded-lg overflow-hidden shrink-0">
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    @endif
                    
                    <div class="flex-1">
                        <div class="flex items-center gap-3 text-sm text-slate-500 mb-2">
                            <time datetime="{{ $post->published_at->format('Y-m-d') }}">{{ $post->published_at->format('M d, Y') }}</time>
                        </div>
                        <h2 class="text-2xl font-bold mb-3 group-hover:text-primary transition-colors">{{ $post->title }}</h2>
                        <p class="text-slate-400 leading-relaxed line-clamp-3">{{ $post->excerpt }}</p>
                        <span class="inline-block mt-4 text-primary font-medium group-hover:translate-x-1 transition-transform">{{ __('Read more') }} &rarr;</span>
                    </div>
                </article>
            </a>
        @endforeach
    </div>
</x-app-layout>
