<x-layout>
    <x-slot:title>
        News & Events — Lifextract Humanitarian Foundation
    </x-slot:title>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[36px] p-8 sm:p-14 text-center space-y-4 shadow-xl">
            <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/10 px-4 py-1.5 rounded-full">
                / Media & Updates /
            </span>
            <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
                Latest News & Upcoming Events
            </h1>
            <p class="text-slate-300 text-sm max-w-2xl mx-auto">
                Stay updated on our grassroots impact across Lagos. Discover our upcoming outreaches, read our latest community stories, and find out how you can get involved.
            </p>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-12 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center">
                    <i class="bi bi-calendar-event-fill text-sm"></i>
                </div>
                <h2 class="text-2xl font-extrabold text-[#181A20]">Upcoming Events</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($events as $event)
                    <div class="bg-[#FBFBFC] rounded-2xl border border-slate-200 overflow-hidden flex flex-col group hover:shadow-md transition">
                        @if($event->featured_image)
                            <div class="aspect-video bg-slate-200 overflow-hidden">
                                <img src="{{ asset('storage/' . $event->featured_image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                        @endif
                        <div class="p-6 flex flex-col flex-grow space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="bg-white border border-slate-200 rounded-xl p-2 text-center min-w-[3.5rem] shadow-sm">
                                    <span class="block text-xs font-bold text-slate-400 uppercase">{{ \Carbon\Carbon::parse($event->event_date)->format('M') }}</span>
                                    <span class="block text-xl font-black text-[#181A20] leading-none">{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[#181A20] leading-tight group-hover:text-amber-600 transition">
                                        <a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a>
                                    </h3>
                                    <p class="text-xs text-slate-500 mt-1 flex items-center gap-1.5">
                                        <i class="bi bi-geo-alt-fill text-slate-400"></i> {{ $event->location }}
                                    </p>
                                </div>
                            </div>
                            <p class="text-xs text-slate-600 line-clamp-2">{{ $event->description }}</p>
                            <div class="pt-4 mt-auto">
                                <a href="{{ route('events.show', $event->slug) }}" class="text-xs font-bold text-[#181A20] hover:text-amber-600 inline-flex items-center gap-1">
                                    View Details <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-8 text-center text-slate-500 text-sm bg-slate-50 rounded-2xl border border-slate-200 border-dashed">
                        No upcoming events scheduled at the moment. Check back soon!
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="py-16 bg-[#FBFBFC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                    <i class="bi bi-newspaper text-sm"></i>
                </div>
                <h2 class="text-2xl font-extrabold text-[#181A20]">Latest News & Stories</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @forelse($news as $article)
                    <article class="group space-y-4">
                        <a href="{{ route('news.show', $article->slug) }}" class="block aspect-[4/3] rounded-2xl overflow-hidden bg-slate-200 border border-slate-200/80 shadow-sm relative">
                            @if($article->featured_image)
                                <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-400"><i class="bi bi-image text-3xl"></i></div>
                            @endif
                        </a>
                        <div class="space-y-2 px-1">
                            <time class="text-[11px] font-bold uppercase tracking-wider text-slate-400">
                                {{ \Carbon\Carbon::parse($article->published_at)->format('F j, Y') }}
                            </time>
                            <h3 class="text-lg font-bold text-[#181A20] leading-snug group-hover:text-amber-600 transition">
                                <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                            </h3>
                            <p class="text-xs text-slate-500 line-clamp-2 leading-relaxed">
                                {{ $article->excerpt ?? strip_tags($article->content) }}
                            </p>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-8 text-center text-slate-500 text-sm">
                        No news articles have been published yet.
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>