<x-layout>
    <x-slot:title>Episode #{{ $episode->episode_number }}: {{ $episode->title }} — TALKSWITHMRDEE</x-slot:title>

    <article class="py-12 bg-slate-950 text-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-400">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <span>&rsaquo;</span>
                <a href="{{ route('podcast.index') }}" class="hover:underline">Podcast</a>
                <span>&rsaquo;</span>
                <span class="text-amber-400 font-semibold truncate">Episode #{{ $episode->episode_number }}</span>
            </nav>

            <!-- Video Player & Episode Overview Section -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- Main Player & Show Notes (Span 8) -->
                <div class="lg:col-span-8 space-y-8">
                    
                    <!-- Embedded Responsive YouTube Player -->
                    @if($episode->youtube_id)
                        <div class="relative w-full rounded-3xl overflow-hidden shadow-2xl border border-slate-800 bg-black aspect-video">
                            <iframe 
                                class="absolute top-0 left-0 w-full h-full"
                                src="https://www.youtube-nocookie.com/embed/{{ $episode->youtube_id }}?rel=0" 
                                title="{{ $episode->title }}" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    @else
                        <!-- Audio-only Banner -->
                        <div class="h-64 rounded-3xl bg-gradient-to-br from-purple-900 to-slate-900 border border-slate-800 flex items-center justify-center p-6 text-center">
                            <div class="space-y-2">
                                <span class="text-5xl">🎧</span>
                                <h3 class="text-xl font-bold text-white">Audio Podcast Edition</h3>
                            </div>
                        </div>
                    @endif

                    <!-- Title & Guest Details -->
                    <div class="bg-slate-900 rounded-3xl p-6 sm:p-8 border border-slate-800 space-y-6">
                        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-800 pb-4">
                            <span class="text-xs font-extrabold uppercase tracking-wider px-3 py-1 rounded-full bg-purple-900/60 text-purple-300 border border-purple-500/40">
                                Episode #{{ $episode->episode_number }}
                            </span>
                            <span class="text-xs text-slate-400">
                                Released on {{ \Carbon\Carbon::parse($episode->air_date)->format('F d, Y') }}
                            </span>
                        </div>

                        <h1 class="text-2xl sm:text-3xl font-extrabold font-serif-heading text-white leading-tight">
                            {{ $episode->title }}
                        </h1>

                        @if($episode->guest_name)
                            <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800 flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-xl">
                                    👤
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-white">{{ $episode->guest_name }}</h4>
                                    <p class="text-xs text-amber-400">{{ $episode->guest_role }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- Show Notes & Description -->
                        <div class="space-y-3 pt-2 text-sm text-slate-300 leading-relaxed">
                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">What We Discussed:</h3>
                            <p class="whitespace-pre-line">
                                {{ $episode->description }}
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Right Sidebar: Need Support / Be A Guest (Span 4) -->
                <div class="lg:col-span-4 space-y-6">
                    
                    <!-- Support Card -->
                    <div class="bg-gradient-to-br from-purple-950 to-slate-900 p-6 sm:p-8 rounded-3xl border border-purple-800/40 shadow-xl space-y-4">
                        <div class="flex items-center gap-2 text-amber-400 font-bold text-sm">
                            <span>🤝</span>
                            <h4>Facing a Similar Challenge?</h4>
                        </div>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            TALKSWITHMRDEE can connect you with certified couples therapists, counselors, and legal professionals.
                        </p>
                        <a href="{{ route('support.index') }}" class="block w-full text-center py-3 rounded-xl bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold text-xs transition">
                            Get Confidential Support &rarr;
                        </a>
                    </div>

                    <!-- Be A Guest Card -->
                    <div class="bg-slate-900 p-6 sm:p-8 rounded-3xl border border-slate-800 space-y-4">
                        <h4 class="font-bold text-white text-sm">Have a Story to Share?</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            Are you a relationship professional, therapist, or someone with an inspiring story of overcoming struggle?
                        </p>
                        <a href="{{ route('podcast.be-a-guest') }}" class="block w-full text-center py-3 rounded-xl border border-slate-700 text-slate-300 hover:text-white hover:bg-slate-800 font-semibold text-xs transition">
                            Apply to Be on the Show
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </article>
</x-layout>