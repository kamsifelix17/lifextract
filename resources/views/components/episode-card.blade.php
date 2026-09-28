@props(['episode'])

<div class="bg-[#181A20] text-white rounded-3xl overflow-hidden border border-white/10 hover:border-[#F3C63F]/60 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col group hover:-translate-y-1">
    
    <!-- Video / Graphic Thumbnail Container -->
    <div class="relative h-56 bg-slate-950 overflow-hidden flex items-center justify-center">
        @if($episode->youtube_id)
            <img src="https://img.youtube.com/vi/{{ $episode->youtube_id }}/hqdefault.jpg" alt="{{ $episode->title }}" class="w-full h-full object-cover opacity-85 group-hover:opacity-100 group-hover:scale-105 transition duration-500">
        @else
            <div class="w-full h-full bg-gradient-to-br from-[#1C2029] via-[#12151B] to-[#0A0C10] flex items-center justify-center p-4">
                <i class="bi bi-mic text-[#F3C63F] text-4xl"></i>
            </div>
        @endif

        <!-- Play Button Overlay with Bootstrap Icon -->
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:bg-black/20 transition">
            <div class="w-12 h-12 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center font-bold text-lg shadow-xl group-hover:scale-110 transition pl-0.5">
                <i class="bi bi-play-fill text-2xl"></i>
            </div>
        </div>

        <!-- Episode Number Badge -->
        <div class="absolute top-4 left-4">
            <span class="text-[10px] font-black uppercase tracking-wider bg-[#181A20]/90 text-[#F3C63F] px-3.5 py-1.5 rounded-full backdrop-blur-md border border-white/10 shadow-md">
                Episode #{{ $episode->episode_number }}
            </span>
        </div>
    </div>

    <!-- Episode Details -->
    <div class="p-6 sm:p-7 flex flex-col flex-grow space-y-3.5">
        @if($episode->guest_name)
            <div class="flex items-center gap-1.5 text-xs text-[#F3C63F] font-semibold">
                <i class="bi bi-person-fill"></i>
                <span class="truncate">Guest: {{ $episode->guest_name }} ({{ $episode->guest_role }})</span>
            </div>
        @endif

        <h3 class="text-base sm:text-lg font-extrabold text-white group-hover:text-[#F3C63F] transition tracking-tight leading-snug line-clamp-2">
            <a href="{{ route('podcast.show', $episode->slug) }}">
                {{ $episode->title }}
            </a>
        </h3>

        <p class="text-slate-400 text-xs sm:text-sm leading-relaxed line-clamp-2 flex-grow font-normal">
            {{ $episode->description }}
        </p>

        <!-- Air Date and Carenest Action Button -->
        <div class="pt-4 border-t border-white/10 flex justify-between items-center text-xs">
            <span class="text-slate-400 flex items-center gap-1.5 font-medium">
                <i class="bi bi-calendar3 text-[#F3C63F]"></i> 
                {{ \Carbon\Carbon::parse($episode->air_date)->format('M d, Y') }}
            </span>
            <a href="{{ route('podcast.show', $episode->slug) }}" class="inline-flex items-center gap-1.5 text-[#F3C63F] font-bold hover:text-white transition group/link">
                <span>Watch Episode</span>
                <span class="w-5 h-5 rounded-full bg-white/10 group-hover/link:bg-[#F3C63F] group-hover/link:text-[#181A20] text-[#F3C63F] flex items-center justify-center text-[10px] transition-colors">
                    <i class="bi bi-arrow-up-right"></i>
                </span>
            </a>
        </div>
    </div>

</div>