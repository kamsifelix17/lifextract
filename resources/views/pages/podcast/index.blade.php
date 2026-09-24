<x-layout>
    <x-slot:title>TALKSWITHMRDEE Podcast — Real Conversations, Relationships & Healing</x-slot:title>

    <!-- Header Hero Banner -->
    <section class="bg-gradient-to-b from-slate-950 via-purple-950 to-slate-950 text-white py-16 lg:py-20 text-center relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 space-y-4 relative z-10">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/20 border border-amber-400/40 text-xs font-mono font-bold text-amber-400">
                <i class="bi bi-mic-fill"></i>
                <span>“TALK AM AS E BE!”</span>
            </div>
            <h1 class="text-4xl sm:text-5xl font-extrabold font-serif-heading">
                TALKSWITHMRDEE Podcast
            </h1>
            <p class="text-sm sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Raw, honest, and transformative conversations exploring dating, marriage conflict, personal growth, and emotional healing with certified experts.
            </p>
            
            <!-- Pitch to be a guest button -->
            <div class="pt-2">
                <a href="{{ route('podcast.be-a-guest') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-950 bg-amber-400 hover:bg-amber-300 px-6 py-3 rounded-xl transition shadow-lg">
                    <i class="bi bi-star-fill [yellow-400]"></i>
                    <span>Apply to Be a Guest / Share Your Story</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Search Bar & Episodes Grid -->
    <section class="py-16 bg-slate-900 text-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <!-- Search Filter Bar -->
            <div class="max-w-md mx-auto">
                <form action="{{ route('podcast.index') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search topics, guest therapists..." class="flex-grow px-4 py-2.5 rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-400 text-xs focus:outline-none focus:border-amber-400">
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-purple-600 hover:bg-purple-700 font-bold text-xs text-white transition">
                        Search
                    </button>
                </form>
            </div>

            <!-- Episode Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($episodes as $episode)
                    <x-episode-card :episode="$episode" />
                @empty
                    <div class="col-span-3 text-center py-16 bg-slate-800/60 rounded-3xl border border-slate-700 space-y-3">
                        <i class="bi bi-exclamation-circle text-4xl text-amber-400"></i>
                        <h3 class="text-base font-bold text-white">No podcast episodes found</h3>
                        <p class="text-xs text-slate-400">Try another search term or check back soon!</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Links -->
            <div class="pt-6">
                {{ $episodes->withQueryString()->links() }}
            </div>

        </div>
    </section>
</x-layout>