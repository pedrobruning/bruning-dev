<x-app-layout>
    <article class="max-w-3xl mx-auto">
        <header class="mb-12 text-center">
            <div class="text-slate-500 mb-4">
                <time datetime="{{ $post->published_at->format('Y-m-d') }}">{{ $post->published_at->format('M d, Y') }}</time>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight mb-8">{{ $post->title }}</h1>
            
            @if($post->image)
                <div class="aspect-video rounded-2xl overflow-hidden bg-slate-800 mb-8">
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
            @endif
        </header>

        <div class="prose prose-invert prose-lg max-w-none">
            {!! $post->content !!}
        </div>
    </article>
</x-app-layout>
