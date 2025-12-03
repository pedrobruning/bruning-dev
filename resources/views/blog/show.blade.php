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

        <div class="prose prose-lg prose-invert max-w-none prose-headings:text-slate-50 prose-p:text-slate-300 prose-a:text-primary prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-code:text-slate-50 prose-pre:bg-slate-800">
            <x-markdown>
                {!! $post->content !!}
            </x-markdown>
        </div>
    </article>
</x-app-layout>
