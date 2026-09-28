<x-layout>
    <x-slot:title>Episode #{{ $episode->episode_number }}: {{ $episode->title }} — TALKSWITHMRDEE</x-slot:title>

    <article class="py-10 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                <a href="{{ route('home') }}" class="hover:text-[#181A20] transition">Home</a>
                <i class="bi bi-chevron-right text-[10px] text-slate-400"></i>
                <a href="{{ route('podcast.index') }}" class="hover:text-[#181A20] transition">Podcast</a>
                <i class="bi bi-chevron-right text-[10px] text-slate-400"></i>
                <span class="text-[#181A20] font-bold truncate max-w-xs sm:max-w-md">Episode #{{ $episode->episode_number }}</span>
            </nav>

            <!-- Video Player & Episode Overview Section -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- Main Player & Show Notes (Span 8) -->
                <div class="lg:col-span-8 space-y-8">
                    
                    <!-- Embedded Responsive YouTube Player -->
                    @if($episode->youtube_id)
                        <div class="relative w-full rounded-3xl sm:rounded-[36px] overflow-hidden shadow-2xl border border-slate-200/80 bg-black aspect-video">
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
                        <div class="h-64 sm:h-80 rounded-3xl sm:rounded-[36px] bg-[#181A20] border border-white/10 flex items-center justify-center p-6 text-center text-white relative overflow-hidden">
                            <div class="space-y-3 relative z-10">
                                <div class="w-16 h-16 mx-auto rounded-3xl bg-white/5 border border-white/10 flex items-center justify-center text-[#F3C63F] text-3xl shadow-xl">
                                    <i class="bi bi-headphones"></i>
                                </div>
                                <h3 class="text-xl sm:text-2xl font-extrabold tracking-tight">Audio Broadcast Edition</h3>
                                <p class="text-xs text-slate-400">Stream available on audio channels.</p>
                            </div>
                        </div>
                    @endif

                    <!-- Title & Guest Details Card -->
                    <div class="bg-white rounded-3xl sm:rounded-[36px] p-6 sm:p-10 border border-slate-200/80 shadow-sm space-y-6">
                        
                        <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-100 pb-4">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-black uppercase tracking-wider px-3.5 py-1.5 rounded-full bg-[#181A20] text-[#F3C63F] border border-white/10 shadow-sm">
                                    Episode #{{ $episode->episode_number }}
                                </span>
                                <span class="text-xs font-semibold text-[#181A20] font-mono">
                                    “TALK AM AS E BE!”
                                </span>
                            </div>

                            <span class="text-xs text-slate-500 font-medium flex items-center gap-1.5">
                                <i class="bi bi-calendar3 text-[#F3C63F]"></i>
                                {{ \Carbon\Carbon::parse($episode->air_date)->format('F d, Y') }}
                            </span>
                        </div>

                        <h1 class="text-2xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight leading-tight">
                            {{ $episode->title }}
                        </h1>

                        <!-- Guest Profile Highlight -->
                        @if($episode->guest_name)
                            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xl flex-shrink-0 shadow">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div>
                                    <span class="text-[11px] font-extrabold text-[#F3C63F] uppercase tracking-wider block">Featured Guest Speaker</span>
                                    <h4 class="text-sm font-extrabold text-[#181A20]">{{ $episode->guest_name }}</h4>
                                    <p class="text-xs text-slate-500">{{ $episode->guest_role }}</p>
                                </div>
                            </div>
                        @endif

                        <!-- Show Notes & Synopsis -->
                        <div class="space-y-4 pt-2 text-slate-700 leading-relaxed border-t border-slate-100">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-[#181A20] flex items-center gap-1.5">
                                <i class="bi bi-journal-text text-amber-600"></i> Episode Synopsis & Key Discussions
                            </span>
                            <div class="whitespace-pre-line text-sm sm:text-base text-slate-600 space-y-3 font-normal">
                                {{ $episode->description }}
                            </div>
                        </div>

                        <!-- Conversation Principles -->
                        <div class="pt-6 border-t border-slate-100 space-y-3">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Episode Standards:</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-slate-600">
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-emerald-500"></i>
                                    <span>Uncensored, honest dialogue</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-emerald-500"></i>
                                    <span>Practical psychological insights</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-emerald-500"></i>
                                    <span>Safe, non-judgmental space</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-emerald-500"></i>
                                    <span>Direct referral pathways available</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Right Sidebar: Need Support / Be A Guest (Span 4) -->
                <div class="lg:col-span-4 space-y-6">
                    
                    <!-- Support Card (Carenest Sticky Sidebar) -->
                    <div class="bg-[#181A20] text-white p-6 sm:p-8 rounded-3xl sm:rounded-[36px] border border-white/10 shadow-xl space-y-5 sticky top-28">
                        
                        <div class="border-b border-white/10 pb-4">
                            <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">Direct Assistance</span>
                            <h3 class="text-xl font-extrabold text-white tracking-tight">Facing Similar Realities?</h3>
                        </div>

                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-normal">
                            If this episode resonated with what you are personally experiencing, TALKSWITHMRDEE can connect you with certified couples therapists, counselors, and legal mediators.
                        </p>

                        <div class="space-y-3 pt-2">
                            <a href="{{ route('support.index') }}" class="inline-flex items-center justify-between w-full text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] py-3.5 px-6 rounded-full shadow-lg transition-all duration-200 group text-center">
                                <span>Get Confidential Support</span>
                                <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>
                            </a>

                            <a href="{{ route('podcast.be-a-guest') }}" class="inline-flex items-center justify-center gap-2 w-full text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] bg-white/5 hover:bg-white/10 border border-white/15 py-3 px-6 rounded-full transition text-center">
                                <i class="bi bi-megaphone text-[#F3C63F]"></i>
                                <span>Apply to Be a Guest</span>
                            </a>
                        </div>

                        <!-- Share Episode on Socials -->
                        <div class="pt-4 border-t border-white/10 text-center space-y-3">
                            <span class="text-[11px] font-bold text-slate-400 block uppercase tracking-wider">Share This Episode</span>
                            <div class="flex items-center justify-center gap-2">
                                <a href="https://wa.me/?text={{ urlencode('Watch Episode #' . $episode->episode_number . ' on TALKSWITHMRDEE: ' . $episode->title . ' ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 hover:bg-emerald-600 hover:text-white text-emerald-400 flex items-center justify-center text-base transition" title="Share on WhatsApp">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode('Episode #' . $episode->episode_number . ': ' . $episode->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 hover:bg-black hover:text-white text-slate-300 flex items-center justify-center text-base transition" title="Share on X">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 hover:bg-blue-600 hover:text-white text-blue-400 flex items-center justify-center text-base transition" title="Share on Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <button type="button" onclick="navigator.clipboard.writeText(window.location.href); alert('Episode link copied!');" class="w-10 h-10 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] text-slate-300 flex items-center justify-center text-base transition" title="Copy Link">
                                    <i class="bi bi-link-45deg"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Official Channel Handles -->
                        <div class="pt-3 border-t border-white/10 text-center space-y-2">
                            <span class="text-[10px] text-slate-400 block font-medium">Follow TALKSWITHMRDEE:</span>
                            <div class="flex items-center justify-center gap-2">
                                <a href="https://www.youtube.com/@TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-red-600 hover:text-white flex items-center justify-center text-xs transition" title="YouTube Channel">
                                    <i class="bi bi-youtube"></i>
                                </a>
                                <a href="https://www.instagram.com/talks_with_mrdee?stkn=bGtlMGdkMWJjcGh6" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-pink-600 hover:text-white flex items-center justify-center text-xs transition" title="Instagram">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="https://www.tiktok.com/@talkswithmrdee?_r=1&_t=ZN-9A3kfMF36Zi" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-black hover:text-white flex items-center justify-center text-xs transition" title="TikTok">
                                    <i class="bi bi-tiktok"></i>
                                </a>
                                <a href="https://x.com/TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center text-xs transition" title="X (Twitter)">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- ========================================================= -->
            <!-- Related Episodes Section                                  -->
            <!-- ========================================================= -->
            @if(isset($relatedEpisodes) && $relatedEpisodes->count() > 0)
                <div class="pt-16 border-t border-slate-200/80 space-y-8">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                        <div>
                            <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">
                                / More Conversations /
                            </span>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#181A20] tracking-tight">
                                Explore More Broadcasts
                            </h2>
                        </div>
                        <a href="{{ route('podcast.index') }}#episodes-feed" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181A20] hover:text-amber-600 transition">
                            <span>Browse All Episodes</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($relatedEpisodes as $relEp)
                            <x-episode-card :episode="$relEp" />
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </article>
</x-layout>