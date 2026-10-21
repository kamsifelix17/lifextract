<x-layout>
    <x-slot:title>News, Events & Field Reports — Lifextract Foundation</x-slot:title>

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12 bg-white">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl border border-white/10">
            <div class="max-w-3xl space-y-4">
                <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                    / Field Announcements & Media /
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">News, Outreach & Events</h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    Stay up to date with our ongoing field operations, quarterly medical outreaches, community updates, and organizational milestones across Lagos State.
                </p>
            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS RIBBON -->
    @if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
    <section class="py-10 bg-amber-50/60 border-y border-amber-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <div class="flex items-center gap-2 text-[#181A20]">
                <i class="bi bi-calendar-event-fill text-[#F3C63F] text-xl"></i>
                <h2 class="text-lg font-black uppercase tracking-wider">Upcoming Outreaches & Events</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($upcomingEvents as $event)
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm flex flex-col sm:flex-row gap-5 items-start">
                    <div class="bg-[#181A20] text-white p-4 rounded-xl text-center min-w-[90px] w-full sm:w-auto shrink-0">
                        <span class="block text-2xl font-black text-[#F3C63F]">{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</span>
                        <span class="block text-xs font-bold uppercase">{{ \Carbon\Carbon::parse($event->event_date)->format('M Y') }}</span>
                    </div>
                    <div class="space-y-2">
                        <span class="text-[10px] font-bold text-slate-400 uppercase flex items-center gap-1">
                            <i class="bi bi-geo-alt-fill text-[#F3C63F]"></i> {{ $event->location }}
                        </span>
                        <h3 class="text-base font-bold text-[#181A20] leading-snug">{{ $event->title }}</h3>
                        <p class="text-xs text-slate-600 line-clamp-2">{{ $event->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- LATEST NEWS & FIELD REPORTS -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            <div class="border-b border-slate-200 pb-4">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#181A20] tracking-tight">Latest News & Press Releases</h2>
                <p class="text-xs text-slate-500 mt-1">Verified stories from our field officers and humanitarian partners.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($newsList as $article)
                <article class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden flex flex-col hover:shadow-md transition">
                    @if($article->featured_image)
                    <img src="{{ Storage::url($article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    @else
                    <div class="w-full h-48 bg-slate-800 flex items-center justify-center text-slate-500 text-3xl">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    @endif
                    <div class="p-6 space-y-3 flex-grow flex flex-col justify-between">
                        <div class="space-y-2">
                            <span class="text-[10px] font-bold text-slate-400 uppercase block">
                                {{ \Carbon\Carbon::parse($article->published_at)->format('M d, Y') }}
                            </span>
                            <h3 class="text-base font-bold text-[#181A20] leading-snug">{{ $article->title }}</h3>
                            <p class="text-xs text-slate-600 line-clamp-3 leading-relaxed">{{ $article->excerpt ?? Str::limit($article->content, 120) }}</p>
                        </div>
                    </div>
                </article>
                @empty
                <div class="col-span-full bg-white p-12 rounded-3xl border border-slate-200 text-center space-y-3">
                    <div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center mx-auto text-slate-400 text-xl">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#181A20]">No Published Articles Yet</h3>
                    <p class="text-xs text-slate-500">Field news and project reports will appear here as they are published.</p>
                </div>
                @endforelse
            </div>

            @if($newsList->hasPages())
            <div class="pt-6 flex justify-center">
                {{ $newsList->links() }}
            </div>
            @endif
        </div>
    </section>
</x-layout>