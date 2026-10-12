<x-layout>
    <x-slot:title>
        Lifextract Humanitarian Foundation — Hope, Empowerment & Community Impact
    </x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Exact Carenest Dribbble Layout)          -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[36px] p-6 sm:p-12 lg:p-16 relative overflow-hidden">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Column: Copy & CTAs (Span 7) -->
                <div class="lg:col-span-7 space-y-6 text-left">
                    
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.14]">
                        Charity That Helps Vulnerable People
                    </h1>

                    <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-xl">
                        Lifextract is a grassroots humanitarian foundation committed to supporting elderly roadside women, youth tech empowerment, and free healthcare.
                    </p>

                    <!-- Carenest Action Button with Yellow Arrow -->
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="{{ route('donate') }}" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-3.5 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Donate Now</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>

                    <!-- Hero Social Proof (Exact Carenest Feature) -->
                    <div class="pt-6 border-t border-white/10 flex items-center gap-3 text-xs text-slate-300">
                        <div class="flex -space-x-2 overflow-hidden shrink-0">
                            <div class="w-8 h-8 rounded-full ring-2 ring-[#181A20] bg-[#F3C63F] text-[#181A20] flex items-center justify-center shadow-sm">
                                <i class="bi bi-heart-fill leading-none text-[11px]"></i>
                            </div>
                            <div class="w-8 h-8 rounded-full ring-2 ring-[#181A20] bg-emerald-500 text-white flex items-center justify-center shadow-sm">
                                <i class="bi bi-shield-check leading-none text-[12px]"></i>
                            </div>
                            <div class="w-8 h-8 rounded-full ring-2 ring-[#181A20] bg-purple-500 text-white flex items-center justify-center shadow-sm">
                                <i class="bi bi-people-fill leading-none text-[12px]"></i>
                            </div>
                        </div>
                        <span class="font-semibold text-slate-200">Over 2,500+ people supported across Lagos communities</span>
                    </div>

                </div>

                <!-- Right Column: Hero Image -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-slate-800 aspect-[4/3] sm:aspect-[4/3]">
                        <img src="{{ asset('images/lifextract-hero-outreach.jpg') }}" alt="Lifextract Humanitarian Outreach in Lagos" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. YELLOW PARTNER & VALUE RIBBON (Exact Carenest Feature) -->
    <!-- ========================================================= -->
    <section class="bg-[#F3C63F] text-[#181A20] font-black text-xs uppercase tracking-wider py-4 overflow-hidden border-y border-amber-500/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 flex flex-wrap items-center justify-center sm:justify-between gap-y-3 gap-x-6">
            <span class="flex items-center gap-2">// LIFEXTRACT FOUNDATION</span>
            <span class="flex items-center gap-2">// HUMANITARIAN SERVICE</span>
            <span class="flex items-center gap-1.5"><i class="bi bi-star-fill text-[10px]"></i> YOUTH EMPOWERMENT</span>
            <span class="flex items-center gap-2">// ELDERLY CARE</span>
            <span class="flex items-center gap-1.5"><i class="bi bi-star-fill text-[10px]"></i> HEALTH OUTREACH</span>
            <span class="flex items-center gap-1.5"><i class="bi bi-geo-alt-fill text-[11px]"></i> LAGOS, NIGERIA</span>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 3. HOW YOUR SUPPORT CREATES CHANGE (Carenest Process)     -->
    <!-- ========================================================= -->
    <section class="py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center max-w-xl mx-auto space-y-2">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Work Process /</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight">
                    How Your Support Creates Change For Communities
                </h2>
            </div>

            <!-- 4 Numbered Steps -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 pt-4">
                
                <div class="space-y-3">
                    <span class="text-4xl font-black text-[#181A20] block font-mono">01</span>
                    <h3 class="text-base font-bold text-[#181A20]">Identify People In Need</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        We visit underserved local communities to identify elderly women roadside traders, struggling youth, and vulnerable families.
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="text-4xl font-black text-[#181A20] block font-mono">02</span>
                    <h3 class="text-base font-bold text-[#181A20]">Plan Focused Programs</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        We design targeted medical outreaches, micro-grants for roadside grandmothers, and digital skill acquisition bootcamps.
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="text-4xl font-black text-[#181A20] block font-mono">03</span>
                    <h3 class="text-base font-bold text-[#181A20]">Deliver Care and Support</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Support is delivered directly on the ground by verified volunteers and health professionals, protecting people's dignity.
                    </p>
                </div>

                <div class="space-y-3">
                    <span class="text-4xl font-black text-[#181A20] block font-mono">04</span>
                    <h3 class="text-base font-bold text-[#181A20]">Measure Impact & Updates</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        We track verified results, publish transparent reports, and share authentic beneficiary stories.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 4. ABOUT OUR CARESTYLE ORGANIZATION & BIG STATS          -->
    <!-- ========================================================= -->
    <section class="py-20 bg-[#FBFBFC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left: Info & Mission Tabs (Span 6) -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="space-y-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ About Us /</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight">
                            About Our Lifextract Humanitarian Organization
                        </h2>
                    </div>

                    <!-- Mini Tabs -->
                    <div class="flex items-center gap-6 border-b border-slate-200 pb-3 text-xs font-bold">
                        <button type="button" onclick="switchAboutTab('mission')" id="tab-mission" class="text-[#181A20] border-b-2 border-[#181A20] pb-3 -mb-3.5 focus:outline-none cursor-pointer">Our Mission</button>
                        <button type="button" onclick="switchAboutTab('vision')" id="tab-vision" class="text-slate-400 hover:text-slate-600 pb-3 -mb-3.5 focus:outline-none cursor-pointer">Our Vision</button>
                        <button type="button" onclick="switchAboutTab('values')" id="tab-values" class="text-slate-400 hover:text-slate-600 pb-3 -mb-3.5 focus:outline-none cursor-pointer">Core Values</button>
                    </div>

                    <p id="about-statement" class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        We are a non-profit organization dedicated to supporting individuals and families in need through care, education, and community-based programs. Our work focuses on creating sustainable pathways where people can thrive with confidence and dignity.
                    </p>

                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-[#181A20] hover:bg-black px-5 py-3 rounded-full shadow transition-all group">
                        <span>Learn More</span>
                        <span class="w-5 h-5 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center text-[10px] font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                            <i class="bi bi-arrow-up-right"></i>
                        </span>
                    </a>
                </div>

                <!-- Right: Clean Photo Showcase + Big Metric Stat Cards (Span 6) -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="rounded-3xl overflow-hidden shadow-lg aspect-video bg-slate-200">
                        <img src="{{ asset('images/lifextract-community-outreach.jpg') }}" alt="Lifextract Community Outreach in Lagos" class="w-full h-full object-cover">
                    </div>

                    <!-- Clean Stat Cards (Exact Carenest Component) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                        <div class="bg-white p-5 sm:p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-1">
                            <span class="text-3xl sm:text-4xl font-black text-[#181A20] block">2,500+</span>
                            <span class="text-xs font-bold text-[#181A20]">People Reached</span>
                            <p class="text-[11px] text-slate-500">Directly supported across outreach programs in Lagos.</p>
                        </div>
                        <div class="bg-white p-5 sm:p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-1">
                            <span class="text-3xl sm:text-4xl font-black text-[#181A20] block">{{ $programsCount }}+</span>
                            <span class="text-xs font-bold text-[#181A20]">Active Programs</span>
                            <p class="text-[11px] text-slate-500">Elderly care, youth skills, and health aid.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            function switchAboutTab(tabName) {
                const statements = {
                    mission: "We are a non-profit organization dedicated to supporting individuals and families in need through care, education, and community-based programs. Our work focuses on creating sustainable pathways where people can thrive with confidence and dignity.",
                    vision: "To build a sustainable humanitarian ecosystem combining grassroots impact with authentic support—where every vulnerable person finds opportunity and dignity.",
                    values: "Rooted in authenticity, compassion, professionalism, and transparency, we put people before publicity—fostering verifiable community impact."
                };

                const tabs = ['mission', 'vision', 'values'];
                const statementEl = document.getElementById('about-statement');
                if (statementEl && statements[tabName]) {
                    statementEl.textContent = statements[tabName];
                }

                tabs.forEach(tab => {
                    const btn = document.getElementById('tab-' + tab);
                    if (!btn) return;
                    if (tab === tabName) {
                        btn.className = "text-[#181A20] border-b-2 border-[#181A20] pb-3 -mb-3.5 focus:outline-none cursor-pointer";
                    } else {
                        btn.className = "text-slate-400 hover:text-slate-600 pb-3 -mb-3.5 focus:outline-none cursor-pointer";
                    }
                });
            }
        </script>
    </section>

    <!-- ========================================================= -->
    <!-- 5. PROGRAMS THAT SUPPORT AND PROTECT (Carenest Layout)    -->
    <!-- ========================================================= -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                <div class="space-y-2">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Programs /</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight">
                        Programs That Support And Protect Vulnerable People
                    </h2>
                </div>
                <a href="{{ route('programs.index') }}#browse-programs" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-[#181A20] hover:bg-black px-5 py-2.5 rounded-full transition w-fit shrink-0 group">
                    <span>All Programs</span>
                    <span class="w-4 h-4 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center text-[9px] font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                        <i class="bi bi-arrow-up-right"></i>
                    </span>
                </a>
            </div>

            <!-- Numbered Programs Rows (Responsive Native Card for Mobile, Clean Row for Desktop) -->
            <div class="space-y-6">
                @forelse($featuredPrograms as $index => $prog)
                    @php
                        $num = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                        $defaultImages = [
                            'elderly' => 'images/program-elderly-traders.jpg',
                            'youth' => 'images/program-youth-tech.jpg',
                            'health' => 'images/program-health-outreach.jpg',
                            'scholarship' => 'images/program-youth-tech.jpg',
                            'community' => 'images/program-elderly-traders.jpg',
                        ];
                        $imgSrc = $defaultImages[$prog->category] ?? ($prog->image_path ? asset($prog->image_path) : asset('images/lifextract-community-outreach.jpg'));
                    @endphp
                    <div class="p-4 sm:p-6 md:p-8 rounded-3xl bg-white md:bg-[#FBFBFC] border border-slate-200/90 shadow-sm hover:shadow-md transition-all duration-300 group">
                        <!-- Desktop Layout (md: and up) -->
                        <div class="hidden md:flex items-center justify-between gap-6">
                            <div class="flex items-center gap-6">
                                <span class="text-3xl lg:text-4xl font-black text-[#181A20] font-mono shrink-0">{{ $num }}</span>
                                <a href="{{ route('programs.show', $prog->slug) }}" class="w-20 h-20 rounded-2xl bg-slate-100 overflow-hidden shrink-0 shadow-sm border border-slate-200 group-hover:scale-105 transition-transform">
                                    <img src="{{ asset($imgSrc) }}" alt="{{ $prog->title }}" class="w-full h-full object-cover">
                                </a>
                                <div class="space-y-1">
                                    <h3 class="text-base lg:text-lg font-bold text-[#181A20] group-hover:text-amber-600 transition">
                                        <a href="{{ route('programs.show', $prog->slug) }}">
                                            {{ $prog->title }}
                                        </a>
                                    </h3>
                                    <p class="text-xs text-slate-500 max-w-xl line-clamp-2 leading-relaxed">{{ $prog->summary }}</p>
                                </div>
                            </div>
                            <a href="{{ route('programs.show', $prog->slug) }}" class="inline-flex items-center gap-2 text-xs font-bold text-[#181A20] bg-white border border-slate-200 hover:bg-[#181A20] hover:text-white px-5 py-3 rounded-full transition-all shrink-0 group/btn shadow-sm">
                                <span>View Program</span>
                                <span class="w-5 h-5 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center text-[10px] font-black group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5 transition-transform">
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>
                            </a>
                        </div>

                        <!-- Mobile Native Card Layout (< md) -->
                        <div class="md:hidden space-y-3.5">
                            <!-- Top Media Banner with Number & Category Overlay -->
                            <a href="{{ route('programs.show', $prog->slug) }}" class="relative block h-44 w-full rounded-2xl overflow-hidden bg-slate-100 shadow-sm">
                                <img src="{{ asset($imgSrc) }}" alt="{{ $prog->title }}" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#181A20]/85 via-black/20 to-black/30"></div>
                                
                                <div class="absolute top-3 left-3 flex items-center gap-2">
                                    <span class="w-7 h-7 rounded-full bg-[#181A20]/90 backdrop-blur-md text-[#F3C63F] font-mono font-black text-xs flex items-center justify-center shadow">
                                        {{ $num }}
                                    </span>
                                    <span class="text-[10px] font-extrabold uppercase tracking-wider px-2.5 py-1 rounded-full bg-white/90 backdrop-blur-md text-[#181A20] shadow-sm">
                                        {{ ucfirst(str_replace('_', ' ', $prog->category)) }}
                                    </span>
                                </div>
                                
                                <div class="absolute bottom-3 left-3 right-3">
                                    <h3 class="text-base font-bold text-white leading-snug drop-shadow">
                                        {{ $prog->title }}
                                    </h3>
                                </div>
                            </a>

                            <!-- Description -->
                            <p class="text-xs text-slate-600 leading-relaxed px-0.5">
                                {{ $prog->summary }}
                            </p>

                            <!-- Cohesive Mobile Action Button -->
                            <a href="{{ route('programs.show', $prog->slug) }}" class="flex items-center justify-center gap-2 w-full text-xs font-bold text-white bg-[#181A20] hover:bg-black py-3 px-4 rounded-xl shadow-sm transition">
                                <span>View Program Details</span>
                                <span class="w-4 h-4 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center text-[9px] font-black">
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-xs text-slate-500 py-6 text-center">No active programs available.</p>
                @endforelse
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 6. WHAT SUPPORTERS SAY (Testimonials & Community Trust)  -->
    <!-- ========================================================= -->
    <section class="py-14 sm:py-20 bg-[#FBFBFC] border-t border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 sm:space-y-10">
            
            <!-- Section Header -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3 sm:gap-4">
                <div class="space-y-2">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Testimonials /</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#181A20] tracking-tight leading-tight">
                        What Beneficiaries & Partners Say
                    </h2>
                </div>
                <a href="{{ route('impact') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181A20] hover:text-[#eab92d] transition group self-start sm:self-auto">
                    <span>View All Impact Stories</span>
                    <i class="bi bi-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <!-- Balanced Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 {{ $impactStories->count() > 1 ? 'lg:grid-cols-3' : '' }} gap-5 sm:gap-6 items-stretch">
                
                <!-- Community Trust Card (Donor Voice) -->
                <div class="bg-white p-6 sm:p-8 rounded-2xl sm:rounded-3xl border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4 sm:space-y-5 hover:border-slate-300 transition">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-1.5 px-2.5 sm:px-3 py-1 rounded-full bg-amber-50 border border-amber-200/60 text-[10px] sm:text-[11px] font-bold text-[#181A20] uppercase tracking-wider">
                                <i class="bi bi-shield-check text-amber-500"></i>
                                Community Trust
                            </span>
                            <i class="bi bi-quote text-xl sm:text-2xl text-slate-300"></i>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                            “Supporting this charity has been a meaningful experience. Knowing that my contribution provides healthcare and education for youth and the elderly gives me confidence that our support creates lasting impact.”
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center gap-3">
                        <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center font-bold text-xs shrink-0 shadow-sm">
                            DA
                        </div>
                        <div>
                            <span class="text-xs font-bold text-[#181A20] block">David Adeleke</span>
                            <span class="text-[10px] sm:text-[11px] text-slate-400">Community Donor</span>
                        </div>
                    </div>
                </div>

                <!-- Beneficiary Impact Stories -->
                @foreach($impactStories->take(2) as $story)
                    <div class="bg-white p-6 sm:p-8 rounded-2xl sm:rounded-3xl border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4 sm:space-y-5 hover:border-slate-300 transition">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center gap-1.5 px-2.5 sm:px-3 py-1 rounded-full bg-emerald-50 border border-emerald-200/60 text-[10px] sm:text-[11px] font-bold text-emerald-800 uppercase tracking-wider">
                                    <i class="bi bi-heart-fill text-emerald-500"></i>
                                    Beneficiary Story
                                </span>
                                <i class="bi bi-quote text-xl sm:text-2xl text-slate-300"></i>
                            </div>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                                “{{ $story->story }}”
                            </p>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center gap-3">
                            <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-xs shrink-0 shadow-sm">
                                <i class="bi bi-person-fill text-sm"></i>
                            </div>
                            <div>
                                <span class="text-xs font-bold text-[#181A20] block">{{ $story->name }}</span>
                                <span class="text-[10px] sm:text-[11px] text-slate-400">{{ $story->title }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 7. FREQUENTLY ASKED QUESTIONS (Carenest Accordion)        -->
    <!-- ========================================================= -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <div class="text-center space-y-2">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ FAQ /</span>
                <h2 class="text-3xl font-extrabold text-[#181A20] tracking-tight">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="space-y-3">
                <details class="group bg-[#FBFBFC] rounded-2xl border border-slate-200/80 p-5 cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-sm text-[#181A20] list-none">
                        <span>How does Lifextract utilize donation funds?</span>
                        <span class="transition group-open:rotate-45 text-slate-400 text-sm"><i class="bi bi-plus-lg"></i></span>
                    </summary>
                    <p class="text-xs text-slate-600 mt-3 leading-relaxed">
                        100% of outreach donations go directly into funding elderly food packs, medical testing kits, medications, and digital skills bootcamp access for grassroots beneficiaries.
                    </p>
                </details>

                <details class="group bg-[#FBFBFC] rounded-2xl border border-slate-200/80 p-5 cursor-pointer">
                    <summary class="flex justify-between items-center font-bold text-sm text-[#181A20] list-none">
                        <span>How can I volunteer or partner with the foundation?</span>
                        <span class="transition group-open:rotate-45 text-slate-400 text-sm"><i class="bi bi-plus-lg"></i></span>
                    </summary>
                    <p class="text-xs text-slate-600 mt-3 leading-relaxed">
                        You can fill our simple Volunteer or Partner application on the website. We welcome doctors, nurses, digital mentors, and corporate sponsors!
                    </p>
                </details>
            </div>

        </div>
    </section>

</x-layout>