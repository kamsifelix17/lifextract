<x-layout>
    <x-slot:title>
        {{ $event->title }} — Lifextract Events
    </x-slot:title>

    <!-- Event Header -->
    <section class="pt-16 pb-10 bg-[#FBFBFC]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <a href="{{ route('news.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-400 hover:text-[#181A20] transition group">
                <i class="bi bi-arrow-left group-hover:-translate-x-1 transition-transform"></i> 
                Back to News & Events
            </a>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#181A20] tracking-tight leading-tight max-w-4xl">
                {{ $event->title }}
            </h1>
        </div>
    </section>

    <!-- Event Body Split Layout -->
    <section class="pb-24 bg-[#FBFBFC]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- Main Content (Left, Span 8) -->
                <div class="lg:col-span-8 space-y-8">
                    @if($event->featured_image)
                    <div class="rounded-3xl overflow-hidden shadow-sm aspect-video bg-slate-100 border border-slate-200/80">
                        <img src="{{ asset('storage/' . $event->featured_image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                    </div>
                    @endif
                    
                    <div class="text-slate-600 leading-relaxed text-sm sm:text-base space-y-4">
                        <h3 class="text-xl font-extrabold text-[#181A20]">About This Event</h3>
                        <!-- Using nl2br to respect paragraph breaks typed into the standard Textarea -->
                        <p>{!! nl2br(e($event->description)) !!}</p>
                    </div>
                </div>
                
                <!-- Sidebar Details Card (Right, Span 4) -->
                <div class="lg:col-span-4 relative">
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm space-y-6 sticky top-28">
                        <h3 class="text-lg font-extrabold text-[#181A20]">Event Details</h3>
                        
                        <div class="space-y-5">
                            <!-- Date & Time -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center shrink-0 shadow-sm">
                                    <i class="bi bi-calendar-event text-sm"></i>
                                </div>
                                <div>
                                    <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">Date & Time</span>
                                    <span class="block text-sm font-bold text-[#181A20]">
                                        {{ \Carbon\Carbon::parse($event->event_date)->format('l, F j, Y') }}<br>
                                        {{ \Carbon\Carbon::parse($event->event_date)->format('g:i A') }}
                                    </span>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center shrink-0 shadow-sm">
                                    <i class="bi bi-geo-alt text-sm"></i>
                                </div>
                                <div>
                                    <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-0.5">Location</span>
                                    <span class="block text-sm font-bold text-[#181A20]">{{ $event->location }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="border-slate-100">
                        
                        <!-- Actions -->
                        <div class="space-y-3">
                            <a href="{{ route('volunteer') }}" class="flex items-center justify-center gap-2 w-full text-xs font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] py-3.5 px-4 rounded-xl shadow-sm transition">
                                Volunteer for Event
                            </a>
                            <a href="{{ route('contact') }}" class="flex items-center justify-center gap-2 w-full text-xs font-bold text-slate-600 bg-white border border-slate-200 hover:border-slate-300 hover:text-[#181A20] py-3.5 px-4 rounded-xl transition">
                                Ask a Question
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>