<x-layout>
    <x-slot:title>
        Lifextract Humanitarian Foundation & TalksWithMrDee — Hope, Empowerment & Authentic Conversations
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
                        Lifextract is a grassroots humanitarian foundation committed to supporting elderly roadside women, youth tech empowerment, free healthcare, and honest conversations through <strong class="text-[#F3C63F]">TALKSWITHMRDEE</strong>.
                    </p>

                    <!-- Carenest Action Button with Yellow Arrow -->
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="{{ route('donate') }}" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-3.5 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Donate Now</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>

                        <a href="{{ route('podcast.index') }}" class="inline-flex items-center justify-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-5 py-3.5 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition text-center">
                            <i class="bi bi-mic text-amber-400"></i>
                            <span>Explore Podcast</span>
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

                <!-- Right Column: Hero Image with Floating Testimonial Card (Exact Carenest Feature) -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-slate-800 aspect-[4/3] sm:aspect-[4/3]">
                        <img src="{{ asset('images/lifextract-hero-outreach.jpg') }}" alt="Lifextract Humanitarian Outreach in Lagos" class="w-full h-full object-cover">
                        
                        <!-- Floating Testimonial Pill (from Carenest) -->
                        <div class="absolute bottom-3 left-3 right-3 sm:bottom-4 sm:left-4 sm:right-auto sm:max-w-xs bg-[#181A20]/90 backdrop-blur-md border border-white/15 p-3 sm:p-3.5 rounded-2xl shadow-xl text-left flex items-start gap-3">
                            <img src="{{ asset('images/talkswithmrdee-emblem.jpg') }}" alt="Mr Dee" class="w-9 h-9 rounded-full object-cover border border-[#F3C63F] shrink-0">
                            <div>
                                <p class="text-[11px] text-slate-200 leading-tight">
                                    “Putting people before publicity. Giving every voice dignity.”
                                </p>
                                <span class="text-[9px] font-bold text-[#F3C63F] uppercase tracking-wider block mt-1">TalksWithMrDee • Lagos</span>
                            </div>
                        </div>
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
            <span class="flex items-center gap-1.5"><i class="bi bi-star-fill text-[10px]"></i> TALKSWITHMRDEE</span>
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
                        We track verified results, publish transparent reports, and share raw beneficiary stories on TALKSWITHMRDEE.
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
                        <span class="text-[#181A20] border-b-2 border-[#181A20] pb-3 -mb-3.5">Our Mission</span>
                        <span class="text-slate-400">Our Vision</span>
                        <span class="text-slate-400">Core Values</span>
                    </div>

                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
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
                            <p class="text-[11px] text-slate-500">Elderly care, youth skills, health aid, and podcasting.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
    <!-- 6. TALKSWITHMRDEE PODCAST SPOTLIGHT (Carenest Dark Hub)   -->
    <!-- ========================================================= -->
    <section class="py-24 bg-[#181A20] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14">
            
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8 border-b border-white/10 pb-10">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6">
                    <img src="{{ asset('images/talkswithmrdee-emblem.jpg') }}" alt="TalksWithMrDee Gold Emblem" class="w-16 h-16 sm:w-24 sm:h-24 rounded-2xl object-cover border-2 border-[#F3C63F] shadow-2xl shrink-0">
                    <div class="space-y-1.5">
                        <span class="text-[11px] sm:text-xs font-black text-[#F3C63F] uppercase tracking-widest font-mono block break-words">LISTEN • COMMENT • SHARE — “TALK AM AS E BE!”</span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
                            TALKSWITHMRDEE Media Hub
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-400 max-w-xl">
                            Real conversations on relationships, marriage challenges, and life advice—with direct referral access to licensed therapists and family lawyers based in Ikeja, Lagos.
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-2.5 sm:gap-3 w-full sm:w-auto">
                    <a href="https://www.youtube.com/@TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs font-bold text-white bg-red-600 hover:bg-red-700 px-4 py-2.5 rounded-full transition shadow">
                        <i class="bi bi-youtube"></i>
                        <span>YouTube</span>
                    </a>
                    <a href="{{ route('podcast.be-a-guest') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-white bg-white/10 hover:bg-white/20 border border-white/20 px-4 py-2.5 rounded-full transition">
                        <span>Be a Guest</span>
                        <i class="bi bi-arrow-up-right text-[10px]"></i>
                    </a>
                    <a href="{{ route('podcast.index') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-5 py-2.5 rounded-full transition shadow">
                        <span>All Episodes</span>
                        <i class="bi bi-arrow-up-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Podcast Episode Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestEpisodes as $episode)
                    <x-episode-card :episode="$episode" />
                @empty
                    <div class="col-span-3 text-center py-12 bg-white/5 rounded-3xl border border-white/10">
                        <p class="text-slate-400 text-xs">No podcast episodes found yet.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 7. CONFIDENTIAL SUPPORT & REFERRAL PATHWAYS              -->
    <!-- ========================================================= -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center max-w-xl mx-auto space-y-2">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Support /</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight">
                    Professional Life & Relationship Pathways
                </h2>
                <p class="text-xs text-slate-500">
                    Connecting individuals and couples to qualified therapists, marriage counselors, and legal professionals.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 hover:border-slate-400 transition space-y-3 flex flex-col">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-lg">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h3 class="text-sm font-bold text-[#181A20]">Intentional Partner Connection</h3>
                    <p class="text-xs text-slate-500 leading-relaxed flex-grow">
                        Values-aligned matchmaking for individuals seeking serious and purposeful relationships.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-[#181A20] hover:underline pt-2 flex items-center gap-1">
                        <span>Get Connected</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 hover:border-slate-400 transition space-y-3 flex flex-col">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-lg">
                        <i class="bi bi-chat-heart"></i>
                    </div>
                    <h3 class="text-sm font-bold text-[#181A20]">Marriage & Conflict Counseling</h3>
                    <p class="text-xs text-slate-500 leading-relaxed flex-grow">
                        Work through communication breakdowns and explore healthy reconciliation with certified therapists.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-[#181A20] hover:underline pt-2 flex items-center gap-1">
                        <span>Request Counseling</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 hover:border-slate-400 transition space-y-3 flex flex-col">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center text-lg">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="text-sm font-bold text-[#181A20]">Exiting Unhealthy Relationships</h3>
                    <p class="text-xs text-slate-500 leading-relaxed flex-grow">
                        Safe, non-judgmental professional pathways to process trauma and plan responsible next steps.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-[#181A20] hover:underline pt-2 flex items-center gap-1">
                        <span>Seek Safe Guidance</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 hover:border-slate-400 transition space-y-3 flex flex-col">
                    <div class="w-10 h-10 rounded-xl bg-slate-200 text-slate-800 flex items-center justify-center text-lg">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h3 class="text-sm font-bold text-[#181A20]">Peaceful Legal Separation</h3>
                    <p class="text-xs text-slate-500 leading-relaxed flex-grow">
                        Access qualified family lawyers for dignified, peaceful legal representation without hostility.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-[#181A20] hover:underline pt-2 flex items-center gap-1">
                        <span>Consult Lawyers</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 8. WHAT SUPPORTERS SAY (Carenest Testimonial Grid)       -->
    <!-- ========================================================= -->
    <section class="py-20 bg-[#FBFBFC] border-t border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Left: Rating Card (Exact Carenest Feature) -->
                <div class="lg:col-span-4 bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-3">
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Community Trust /</span>
                    <div class="flex items-center gap-2">
                        <span class="text-4xl font-black text-[#181A20]">4.9</span>
                        <span class="text-amber-500 text-sm flex gap-0.5">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Supporting this charity has been a meaningful experience. Knowing that my contribution provides healthcare and education for youth and the elderly gives me confidence that our support creates lasting impact.
                    </p>
                    <div class="pt-2 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center font-bold text-xs">DA</div>
                        <div>
                            <span class="text-xs font-bold text-[#181A20] block">David Adeleke</span>
                            <span class="text-[10px] text-slate-400">Community Donor</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Testimonials from Database -->
                <div class="lg:col-span-8 space-y-4">
                    <div class="space-y-1">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Testimonials /</span>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-[#181A20] tracking-tight">
                            What Beneficiaries & Partners Say
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($impactStories->take(2) as $story)
                            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-3">
                                <p class="text-xs text-slate-600 leading-relaxed italic">
                                    “{{ $story->story }}”
                                </p>
                                <div class="pt-2 border-t border-slate-100 flex justify-between items-center text-[11px]">
                                    <span class="font-bold text-[#181A20]">{{ $story->name }}</span>
                                    <span class="text-slate-400">{{ $story->title }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 9. FREQUENTLY ASKED QUESTIONS (Carenest Accordion)        -->
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
                        <span>Are relationship and therapy requests strictly confidential?</span>
                        <span class="transition group-open:rotate-45 text-slate-400 text-sm"><i class="bi bi-plus-lg"></i></span>
                    </summary>
                    <p class="text-xs text-slate-600 mt-3 leading-relaxed">
                        Yes. All counseling, matchmaking, and legal support referrals through TALKSWITHMRDEE are handled with strict privacy safeguards and connected with verified licensed practitioners.
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