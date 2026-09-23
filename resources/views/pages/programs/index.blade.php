<x-layout>
    <x-slot:title>Our Work & Humanitarian Programmes — LifeExtract</x-slot:title>

    <!-- Header Banner -->
    <section class="bg-gradient-to-b from-slate-950 to-emerald-950 text-white py-16 text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-4">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 bg-emerald-900/60 border border-emerald-500/30 px-4 py-1.5 rounded-full">
                Humanitarian Outreaches
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold font-serif-heading">
                Our Areas of Impact
            </h1>
            <p class="text-sm sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Direct, dignified assistance empowering grassroots families in Lagos and across Nigeria.
            </p>
        </div>
    </section>

    <!-- Filter Tabs & Programs Grid -->
    <section class="py-16 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <!-- Category Filter Pills -->
            <div class="flex flex-wrap items-center justify-center gap-2">
                <a href="{{ route('programs.index') }}" class="px-5 py-2 rounded-full text-xs font-bold transition {{ !request('category') ? 'bg-emerald-700 text-white shadow-md' : 'bg-white text-slate-700 border border-slate-200 hover:border-emerald-400' }}">
                    All Programmes
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('programs.index', ['category' => $cat]) }}" class="px-5 py-2 rounded-full text-xs font-bold transition capitalize {{ request('category') === $cat ? 'bg-emerald-700 text-white shadow-md' : 'bg-white text-slate-700 border border-slate-200 hover:border-emerald-400' }}">
                        {{ str_replace('_', ' ', $cat) }}
                    </a>
                @endforeach
            </div>

            <!-- Programs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($programs as $program)
                    <x-program-card :program="$program" />
                @empty
                    <div class="col-span-3 text-center py-16 bg-white rounded-3xl border border-slate-200 space-y-3">
                        <span class="text-4xl">🕊️</span>
                        <h3 class="text-base font-bold text-slate-800">No programs in this category yet</h3>
                        <p class="text-xs text-slate-500">Check back soon or explore other categories above.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Links -->
            <div class="pt-6">
                {{ $programs->withQueryString()->links() }}
            </div>

        </div>
    </section>
</x-layout>