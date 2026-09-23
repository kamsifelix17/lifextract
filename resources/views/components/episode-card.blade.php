@props(['episode'])

<div class="bg-gradient-to-b from-slate-900 to-slate-950 text-white rounded-2xl overflow-hidden border border-slate-800 shadow-md hover:shadow-purple-950/50 hover:border-purple-600/50 transition-all duration-300 flex flex-col group">
    
    <!-- Video / Graphic Thumbnail Container -->
    <div class="relative h-48 bg-slate-800 overflow-hidden flex items-center justify-center">
        @if($episode->youtube_id)
            <img src="https://img.youtube.com/vi/{{ $episode->youtube_id }}/hqdefault.jpg" alt="{{ $episode->title }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-500">
        @else
            <div class="w-full h-full bg-gradient-to-br from-purple-900 via-indigo-950 to-slate-950 flex items-center justify-center p-4">
                <span class="text-purple-300 text-4xl">🎙️</span>
            </div>
        @endif

        <!-- Play Button Overlay -->
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center group-hover:bg-black/20 transition">
            <div class="w-12 h-12 rounded-full bg-amber-500 text-slate-950 flex items-center justify-center font-bold text-xl shadow-lg group-hover:scale-110 transition">
                ▶
            </div>
        </div>

        <!-- Episode Number Badge -->
        <div class="absolute top-3 left-3">
            <span class="text-[10px] font-extrabold uppercase tracking-wider bg-purple-600/90 text-white px-3 py-1 rounded-full backdrop-blur-sm border border-purple-400/30">
                Episode #{{ $episode->episode_number }}
            </span>
        </div>
    </div>

    <!-- Episode Details -->
    <div class="p-5 flex flex-col flex-grow space-y-3">
        @if($episode->guest_name)
            <div class="flex items-center gap-2 text-xs text-amber-400 font-semibold">
                <span>👤</span>
                <span>Guest: {{ $episode->guest_name }} ({{ $episode->guest_role }})</span>
            </div>
        @endif

        <h3 class="text-base font-bold text-white group-hover:text-amber-400 transition leading-snug line-clamp-2">
            <a href="{{ route('podcast.show', $episode->slug) }}">
                {{ $episode->title }}
            </a>
        </h3>

        <p class="text-slate-400 text-xs leading-relaxed line-clamp-2 flex-grow">
            {{ $episode->description }}
        </p>

        <!-- Air Date and Link -->
        <div class="pt-3 border-t border-slate-800 flex justify-between items-center text-xs">
            <span class="text-slate-500">{{ \Carbon\Carbon::parse($episode->air_date)->format('M d, Y') }}</span>
            <a href="{{ route('podcast.show', $episode->slug) }}" class="text-amber-400 font-bold hover:underline flex items-center gap-1">
                Listen & Watch &rarr;
            </a>
        </div>
    </div>

</div>