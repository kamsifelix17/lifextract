<x-layout>
    <x-slot:title>Photo & Video Gallery — Lifextract Humanitarian Foundation</x-slot:title>

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12 bg-white">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl border border-white/10">
            <div class="max-w-3xl space-y-4">
                <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                    / Visual Storytelling /
                </span>
                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight">Our Media Gallery</h1>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    Visual proof of direct ground impact. Explore photographs and moments captured from our community food drives, medical screenings, youth bootcamps, and podcast sessions.
                </p>
            </div>
        </div>
    </section>

    <!-- GALLERY CONTAINER -->
    <section class="py-12 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Category Filter Pills -->
            <div class="flex flex-wrap items-center justify-center gap-2">
                @php
                    $activeCat = request('category', 'all');
                    $categories = [
                        'all' => 'All Media',
                        'foundation' => 'Foundation Outreaches',
                        'health' => 'Health Screenings',
                        'youth' => 'Youth Bootcamps',
                        'podcast' => 'TalksWithMrDee Studio'
                    ];
                @endphp

                @foreach($categories as $key => $label)
                <a href="{{ route('gallery.index', ['category' => $key]) }}" class="px-5 py-2.5 rounded-full text-xs font-bold transition {{ $activeCat === $key ? 'bg-[#181A20] text-[#F3C63F] shadow-md' : 'bg-white text-slate-700 border border-slate-200 hover:border-[#F3C63F]' }}">
                    {{ $label }}
                </a>
                @endforeach
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse($images as $img)
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-md transition group flex flex-col">
                    <div class="aspect-square bg-slate-100 overflow-hidden relative">
                        <img src="{{ Storage::url($img->image_path) }}" alt="{{ $img->title ?? 'Outreach Photo' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-3 left-3">
                            <span class="text-[9px] font-black uppercase tracking-wider px-2.5 py-1 rounded-full bg-[#181A20]/80 text-[#F3C63F] backdrop-blur-sm">
                                {{ $img->category }}
                            </span>
                        </div>
                    </div>
                    @if($img->caption || $img->title)
                    <div class="p-4 space-y-1">
                        @if($img->title)<h4 class="text-xs font-bold text-[#181A20] truncate">{{ $img->title }}</h4>@endif
                        @if($img->caption)<p class="text-[11px] text-slate-500 line-clamp-2">{{ $img->caption }}</p>@endif
                    </div>
                    @endif
                </div>
                @empty
                <div class="col-span-full bg-white p-16 rounded-3xl border border-slate-200 text-center space-y-3">
                    <div class="w-14 h-14 rounded-full bg-slate-100 flex items-center justify-center mx-auto text-slate-400 text-2xl">
                        <i class="bi bi-images"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#181A20]">No Gallery Images Uploaded</h3>
                    <p class="text-xs text-slate-500">Media uploaded via the admin panel will automatically appear in this gallery grid.</p>
                </div>
                @endforelse
            </div>

            @if($images->hasPages())
            <div class="pt-6 flex justify-center">
                {{ $images->withQueryString()->links() }}
            </div>
            @endif

        </div>
    </section>
</x-layout>