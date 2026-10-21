<x-layout>
    <x-slot:title>
        {{ $article->title }} — Lifextract News
    </x-slot:title>

    <!-- Article Header -->
    <section class="pt-16 pb-8 bg-[#FBFBFC]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 text-center">
            <a href="{{ route('news.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-400 hover:text-[#181A20] transition group">
                <i class="bi bi-arrow-left group-hover:-translate-x-1 transition-transform"></i> 
                Back to News & Events
            </a>
            
            <h1 class="text-3xl sm:text-5xl font-extrabold text-[#181A20] tracking-tight leading-[1.15]">
                {{ $article->title }}
            </h1>
            
            <p class="text-xs text-slate-500 font-bold uppercase tracking-widest flex items-center justify-center gap-2">
                <i class="bi bi-calendar3 text-[#F3C63F]"></i>
                {{ \Carbon\Carbon::parse($article->published_at)->format('F j, Y') }}
            </p>
        </div>
    </section>

    <!-- Featured Image -->
    @if($article->featured_image)
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <div class="rounded-3xl sm:rounded-[40px] overflow-hidden shadow-lg aspect-[16/9] bg-slate-100 border border-slate-200/60">
            <img src="{{ asset('storage/' . $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
        </div>
    </section>
    @endif

    <!-- Article Content -->
    <section class="pb-24 bg-[#FBFBFC]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- 
                Using {!! !!} to safely render the HTML tags created by Filament's Rich Editor. 
                We wrap it in a custom class to ensure lists and headings format correctly even without standard Tailwind plugins.
            -->
            <div class="text-slate-600 leading-loose text-sm sm:text-base space-y-6 [&>h2]:text-2xl [&>h2]:font-bold [&>h2]:text-[#181A20] [&>h3]:text-xl [&>h3]:font-bold [&>h3]:text-[#181A20] [&>ul]:list-disc [&>ul]:pl-5 [&>ol]:list-decimal [&>ol]:pl-5 [&>a]:text-amber-600 [&>a]:underline">
                {!! $article->content !!}
            </div>
            
            <!-- Share/End Marker -->
            <div class="mt-12 pt-8 border-t border-slate-200 flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ End of Article /</span>
                <a href="{{ route('donate') }}" class="text-xs font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-2.5 rounded-full transition-all shadow-sm">
                    Support Our Work
                </a>
            </div>
        </div>
    </section>
</x-layout>