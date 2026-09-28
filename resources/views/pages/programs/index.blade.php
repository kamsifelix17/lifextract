<x-layout>
    <x-slot:title>Our Programs & Humanitarian Outreaches — Lifextract Foundation</x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Carenest Dark Rounded Card)              -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                
                <!-- Left: Title & Mission -->
                <div class="lg:col-span-8 space-y-6 text-left">
                    <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                        / Active Humanitarian Outreaches /
                    </span>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                        Direct Aid That Reaches Grassroots Lives
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl font-normal">
                        Lifextract Humanitarian Foundation conducts targeted, verified interventions across Lagos communities — supporting vulnerable elderly women traders, providing youth skills bootcamps, and delivering free community medical checkups.
                    </p>
                    
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="#browse-programs" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-7 py-4 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Explore Active Programs</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-down"></i>
                            </span>
                        </a>

                        <a href="{{ route('support.index') }}" class="inline-flex items-center justify-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition text-center">
                            <i class="bi bi-heart-half text-[#F3C63F]"></i>
                            <span>Nominate / Request Aid</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual Badge / Stats Pillar -->
                <div class="lg:col-span-4 flex justify-center lg:justify-end">
                    <div class="relative p-6 sm:p-8 rounded-3xl bg-white/5 border border-white/10 shadow-2xl backdrop-blur-md max-w-xs w-full text-center space-y-4">
                        <div class="w-14 h-14 mx-auto rounded-2xl bg-[#F3C63F]/10 border border-[#F3C63F]/30 flex items-center justify-center text-[#F3C63F] text-2xl">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">100% Direct</span>
                            <span class="text-xs text-slate-400 mt-1 block">Every contribution goes straight to verified beneficiaries on the ground.</span>
                        </div>
                        <div class="pt-2 border-t border-white/10">
                            <span class="text-[11px] font-bold text-[#F3C63F] uppercase tracking-wider block">
                                <i class="bi bi-geo-alt-fill mr-1"></i> Lagos, Nigeria
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Bar -->
            <div class="mt-12 pt-8 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Verified</span>
                    <span class="text-xs font-medium text-slate-400">Ground Beneficiaries</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-[#F3C63F] block tracking-tight">Zero</span>
                    <span class="text-xs font-medium text-slate-400">Middleman Bureaucracy</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Multi-Sector</span>
                    <span class="text-xs font-medium text-slate-400">Elderly, Youth & Health</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Documented</span>
                    <span class="text-xs font-medium text-slate-400">On TalksWithMrDee</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. FILTER TABS & PROGRAMS GRID                            -->
    <!-- ========================================================= -->
    <section id="browse-programs" class="py-12 bg-slate-50 min-h-screen scroll-mt-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Category Filter Bar (Carenest Pills with Bootstrap Icons) -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-200/80 pb-6">
                <div>
                    <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">Filter by Outreach Sector</span>
                    <h2 class="text-xl sm:text-2xl font-extrabold text-[#181A20] tracking-tight">Browse Active Programs</h2>
                </div>

                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ route('programs.index') }}#browse-programs" class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full text-xs font-bold transition-all duration-200 {{ !request('category') ? 'bg-[#181A20] text-[#F3C63F] shadow-md border border-[#181A20]' : 'bg-white text-slate-700 border border-slate-200 hover:border-[#F3C63F] hover:text-[#181A20]' }}">
                        <i class="bi bi-grid-fill"></i>
                        <span>All Programs</span>
                    </a>
                    
                    @php
                        $icons = [
                            'elderly' => 'bi-heart-pulse-fill',
                            'youth' => 'bi-lightning-charge-fill',
                            'health' => 'bi-shield-plus',
                            'scholarship' => 'bi-mortarboard-fill',
                            'community' => 'bi-people-fill',
                        ];
                    @endphp

                    @foreach($categories as $cat)
                        <a href="{{ route('programs.index', ['category' => $cat]) }}#browse-programs" class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full text-xs font-bold transition-all duration-200 capitalize {{ request('category') === $cat ? 'bg-[#181A20] text-[#F3C63F] shadow-md border border-[#181A20]' : 'bg-white text-slate-700 border border-slate-200 hover:border-[#F3C63F] hover:text-[#181A20]' }}">
                            <i class="bi {{ $icons[$cat] ?? 'bi-tag-fill' }}"></i>
                            <span>{{ str_replace('_', ' ', $cat) }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Programs Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($programs as $program)
                    <x-program-card :program="$program" />
                @empty
                    <div class="col-span-full text-center py-16 bg-white rounded-3xl border border-slate-200/80 shadow-sm p-8 space-y-4 max-w-xl mx-auto">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-slate-100 flex items-center justify-center text-slate-400 text-3xl">
                            <i class="bi bi-inbox"></i>
                        </div>
                        <h3 class="text-lg font-extrabold text-[#181A20] tracking-tight">No Programs Found in this Category</h3>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed font-normal">
                            We are actively preparing new grassroots interventions. Select another category or view all active programs.
                        </p>
                        <div class="pt-2">
                            <a href="{{ route('programs.index') }}#browse-programs" class="inline-flex items-center gap-2 text-xs font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-3 rounded-full transition">
                                <i class="bi bi-arrow-clockwise"></i>
                                <span>Reset Filter</span>
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination Links -->
            @if($programs->hasPages())
                <div class="pt-6 flex justify-center">
                    {{ $programs->withQueryString()->links() }}
                </div>
            @endif

            <!-- ========================================================= -->
            <!-- 3. TRUST & CASE NOMINATION BANNER (Carenest Style)         -->
            <!-- ========================================================= -->
            <div class="mt-16 bg-[#181A20] text-white rounded-3xl sm:rounded-[36px] p-8 sm:p-12 relative overflow-hidden shadow-xl border border-white/10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    
                    <div class="lg:col-span-8 space-y-4">
                        <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-wider bg-white/5 px-3.5 py-1.5 rounded-full border border-white/10">
                            / Grassroots Verification /
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                            Know a Family or Community in Urgent Need?
                        </h3>
                        <p class="text-sm sm:text-base text-slate-300 max-w-2xl leading-relaxed font-normal">
                            We don't work from behind desks. Our team visits grassroots locations, conducts personal assessments, and provides transparent aid that restores human dignity. You can nominate a genuine case or request confidential support.
                        </p>
                    </div>

                    <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3 justify-center">
                        <a href="{{ route('support.index') }}" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-4 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Request / Nominate Support</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>

                        <a href="{{ route('volunteer.create') }}" class="inline-flex items-center justify-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition text-center">
                            <i class="bi bi-people-fill text-[#F3C63F]"></i>
                            <span>Join as a Field Volunteer</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>
</x-layout>