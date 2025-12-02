<x-app-layout>
    <!-- Hero Section -->
    <section class="py-20 md:py-32">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-8">
                {{ __('Building digital products with') }} <span class="text-primary">{{ __('purpose') }}</span>.
            </h1>
            <p class="text-xl text-slate-400 leading-relaxed mb-10">
                {{ __('I am Pedro Bruning, an Artificial Intelligence Engineer and Co-Founder based in Curitiba, Brazil. I specialize in building scalable back-end systems and integrating AI solutions to solve real-world problems.') }}
            </p>
            <div class="flex gap-4">
                <a href="{{ route('projects.index') }}" class="px-6 py-3 bg-primary hover:bg-primary-hover text-white font-semibold rounded-lg transition-colors">
                    {{ __('View Work') }}
                </a>
                <a href="{{ route('about') }}" class="px-6 py-3 bg-slate-800 hover:bg-slate-700 text-white font-semibold rounded-lg transition-colors">
                    {{ __('About Me') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-20 border-t border-slate-800">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-bold mb-2">{{ __('Featured Projects') }}</h2>
                <p class="text-slate-400">{{ __('Some of my recent work.') }}</p>
            </div>
            <a href="{{ route('projects.index') }}" class="text-primary hover:text-primary-hover font-medium flex items-center gap-1">
                {{ __('View all') }}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $projects = \App\Models\Project::where('is_active', true)
                    ->orderBy('sort_order')
                    ->take(3)
                    ->get();
            @endphp

            @foreach($projects as $project)
                <a href="{{ $project->url ?? '#' }}" target="_blank" class="group block bg-slate-800/50 rounded-xl overflow-hidden border border-slate-800 hover:border-primary/50 transition-all hover:-translate-y-1">
                    <div class="aspect-video bg-slate-900 relative overflow-hidden">
                        @if($project->thumbnail)
                            <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-primary transition-colors">{{ $project->title }}</h3>
                        <p class="text-slate-400 text-sm line-clamp-2">{{ $project->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</x-app-layout>
