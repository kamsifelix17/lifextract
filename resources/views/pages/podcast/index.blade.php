<x-layout>
    <x-slot:title>TALKSWITHMRDEE Podcast — Real Conversations, Relationships & Healing</x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Carenest Dark Rounded Card)              -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-8 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl border border-white/10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Left: Title & Mission -->
                <div class="lg:col-span-8 space-y-6 text-left">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                            / Media & Storytelling Platform /
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs font-black text-[#F3C63F] font-mono tracking-wider bg-black/40 px-3 py-1 rounded-full border border-[#F3C63F]/30">
                            <i class="bi bi-mic-fill"></i> LISTEN • COMMENT • SHARE — “TALK AM AS E BE!”
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                        Honest Conversations on Life, Love & Healing
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl font-normal">
                        Hosted by Mr. Dee under the Lifextract umbrella in Ikeja, Lagos, <strong>TALKSWITHMRDEE</strong> strips away pretense to examine raw relationship dilemmas, emotional trauma, family dynamics, and mental wellness with licensed counselors and everyday survivors.
                    </p>
                    
                    <div class="pt-3 flex flex-wrap items-center gap-4">
                        <a href="#episodes-feed" class="inline-flex items-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-7 py-4 rounded-full shadow-lg transition-all duration-200 group">
                            <span>Explore Episodes</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-down"></i>
                            </span>
                        </a>

                        <a href="{{ route('podcast.be-a-guest') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition">
                            <i class="bi bi-megaphone-fill text-[#F3C63F]"></i>
                            <span>Pitch to Be a Guest</span>
                        </a>
                    </div>

                    <!-- Official Broadcast Social Handles -->
                    <div class="pt-2 flex items-center gap-3 text-xs text-slate-400">
                        <span class="text-slate-400 font-semibold">Stream & Follow:</span>
                        <a href="https://www.youtube.com/@TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-red-600 hover:text-white flex items-center justify-center transition" title="YouTube Channel">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com/talks_with_mrdee?stkn=bGtlMGdkMWJjcGh6" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-pink-600 hover:text-white flex items-center justify-center transition" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@talkswithmrdee?_r=1&_t=ZN-9A3kfMF36Zi" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-black hover:text-white flex items-center justify-center transition" title="TikTok">
                            <i class="bi bi-tiktok"></i>
                        </a>
                        <a href="https://x.com/TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center transition" title="X (Twitter)">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual Emblem Showcase -->
                <div class="lg:col-span-4 flex justify-center lg:justify-end">
                    <div class="relative p-3 rounded-3xl bg-white/5 border border-white/10 shadow-2xl backdrop-blur-md">
                        <img src="{{ asset('images/talkswithmrdee-emblem.jpg') }}" alt="TalksWithMrDee Gold Emblem" class="w-48 h-48 sm:w-56 sm:h-56 rounded-2xl object-cover border border-[#F3C63F]/40 shadow-inner">
                        <div class="absolute -bottom-3 -right-3 bg-[#F3C63F] text-[#181A20] font-black text-[10px] uppercase px-3 py-1.5 rounded-full shadow-lg">
                            ★ Official Podcast
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Bar -->
            <div class="mt-12 pt-8 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Weekly</span>
                    <span class="text-xs font-medium text-slate-400">New Releases</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-[#F3C63F] block tracking-tight">Verified</span>
                    <span class="text-xs font-medium text-slate-400">Therapists & Experts</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">100% Raw</span>
                    <span class="text-xs font-medium text-slate-400">No Scripts, Real Truth</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Multi-Platform</span>
                    <span class="text-xs font-medium text-slate-400">YouTube & Audio</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. EPISODES FEED & SEARCH                                 -->
    <!-- ========================================================= -->
    <section id="episodes-feed" class="py-12 bg-slate-50 min-h-screen scroll-mt-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <!-- Search & Feed Header -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6 border-b border-slate-200/80 pb-6">
                <div>
                    <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">Browse Broadcasts</span>
                    <h2 class="text-xl sm:text-2xl font-extrabold text-[#181A20] tracking-tight">Recent Podcast Episodes</h2>
                </div>

                <!-- Sleek Search Form -->
                <form action="{{ route('podcast.index') }}#episodes-feed" method="GET" class="w-full sm:w-auto flex items-center gap-2">
                    <div class="relative w-full sm:w-72">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search topics, guests..." class="w-full pl-10 pr-4 py-2.5 rounded-full bg-white border border-slate-200 text-xs text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] shadow-sm">
                    </div>
                    <button type="submit" class="px-5 py-2.5 rounded-full bg-[#181A20] hover:bg-black text-white font-bold text-xs transition flex-shrink-0">
                        Search
                    </button>
                    @if(request('search'))
                        <a href="{{ route('podcast.index') }}#episodes-feed" class="p-2.5 rounded-full bg-slate-200 hover:bg-slate-300 text-slate-700 text-xs transition" title="Clear Search">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    @endif
                </form>
            </div>

            <!-- Episode Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($episodes as $episode)
                    <x-episode-card :episode="$episode" />
                @empty
                    <div class="col-span-full text-center py-16 bg-white rounded-3xl border border-slate-200/80 shadow-sm p-8 space-y-4 max-w-xl mx-auto">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-slate-100 flex items-center justify-center text-slate-400 text-3xl">
                            <i class="bi bi-mic-mute"></i>
                        </div>
                        <h3 class="text-lg font-extrabold text-[#181A20] tracking-tight">No Podcast Episodes Found</h3>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed font-normal">
                            We couldn't find any episodes matching your search query. Try another keyword or browse all episodes.
                        </p>
                        <div class="pt-2">
                            <a href="{{ route('podcast.index') }}#episodes-feed" class="inline-flex items-center gap-2 text-xs font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-3 rounded-full transition">
                                <i class="bi bi-arrow-clockwise"></i>
                                <span>Reset Search</span>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Links -->
            @if($episodes->hasPages())
                <div class="pt-6 flex justify-center">
                    {{ $episodes->withQueryString()->links() }}
                </div>
            @endif

            <!-- ========================================================= -->
            <!-- 3. NEED COUNSELING & GUEST PITCH BANNER (Carenest Style)   -->
            <!-- ========================================================= -->
            <div class="mt-16 bg-[#181A20] text-white rounded-3xl sm:rounded-[36px] p-8 sm:p-12 relative overflow-hidden shadow-xl border border-white/10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <div class="lg:col-span-8 space-y-4">
                        <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-wider bg-white/5 px-3.5 py-1.5 rounded-full border border-white/10">
                            / Confidential Emotional Support /
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                            Facing Relationship Struggles or Heavy Life Pressures?
                        </h3>
                        <p class="text-sm sm:text-base text-slate-300 max-w-2xl leading-relaxed font-normal">
                            You don't have to carry emotional trauma alone. TALKSWITHMRDEE partners with certified family therapists, relationship counselors, and legal advisors to provide discreet, judgment-free support.
                        </p>
                        <div class="pt-1 flex flex-wrap items-center gap-5 text-xs text-slate-400">
                            <span class="flex items-center gap-1.5"><i class="bi bi-envelope-fill text-[#F3C63F]"></i> talkswithmrdee@gmail.com</span>
                            <span class="flex items-center gap-1.5"><i class="bi bi-telephone-fill text-emerald-400"></i> +234 907 942 4733</span>
                            <span class="flex items-center gap-1.5"><i class="bi bi-geo-alt-fill text-rose-400"></i> Ikeja, Lagos</span>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                        <a href="{{ route('support.index') }}" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-4 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Get Confidential Support</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>

                        <a href="{{ route('podcast.be-a-guest') }}" class="inline-flex items-center justify-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition text-center">
                            <i class="bi bi-mic-fill text-[#F3C63F]"></i>
                            <span>Pitch to Be on the Show</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
</x-layout>