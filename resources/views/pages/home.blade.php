<x-layout>
    <x-slot:title>
        LifeExtract Humanitarian Foundation & TalksWithMrDee — Hope, Empowerment & Real Conversations
    </x-slot:title>

    <!-- ========================================== -->
    <!-- 1. DUAL-BRAND HERO SECTION                 -->
    <!-- ========================================== -->
    <section class="relative bg-gradient-to-b from-slate-950 via-slate-900 to-emerald-950 text-white overflow-hidden pt-12 pb-24 lg:pt-20 lg:pb-32">
        <!-- Subtle Background Glow Orbs -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-emerald-600/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-10 w-96 h-96 bg-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Hero Text & Call to Actions (Span 7) -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    
                    <!-- Dual Brand Pill Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/15 text-xs font-semibold text-emerald-300 shadow-inner">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span>Humanitarian Impact • Authentic Conversations</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15] font-serif-heading">
                        Putting <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">People</span> Before Publicity.
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        We combine humanitarian support, youth empowerment, and healthcare for vulnerable communities in Lagos, with raw, honest conversations and professional support through <strong class="text-amber-400 font-semibold">TALKSWITHMRDEE</strong>.
                    </p>

                    <!-- Hero Action Buttons -->
                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('donate') }}" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-bold text-sm shadow-xl hover:shadow-emerald-900/50 transition transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                            <i class="bi bi-heart-fill text-base"></i>
                            <span>Support an Outreach</span>
                        </a>
                        <a href="{{ route('podcast.index') }}" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-slate-800/80 hover:bg-slate-800 text-amber-400 hover:text-amber-300 font-bold text-sm border border-amber-500/30 hover:border-amber-400/60 backdrop-blur-md transition flex items-center justify-center gap-2">
                            <i class="bi bi-mic-fill text-base"></i>
                            <span>Explore Podcast & Stories</span>
                        </a>
                    </div>

                    <!-- Core Values Bar -->
                    <div class="pt-6 border-t border-white/10 flex flex-wrap items-center justify-center lg:justify-start gap-4 text-xs font-medium text-slate-400">
                        <span class="flex items-center gap-1.5"><strong class="text-emerald-400">✓</strong> Authenticity</span>
                        <span class="flex items-center gap-1.5"><strong class="text-emerald-400">✓</strong> Compassion</span>
                        <span class="flex items-center gap-1.5"><strong class="text-emerald-400">✓</strong> Transparency</span>
                        <span class="flex items-center gap-1.5"><strong class="text-emerald-400">✓</strong> Human Connection</span>
                    </div>

                </div>

                <!-- Right Column: Dual Ecosystem Interactive Preview Card (Span 5) -->
                <div class="lg:col-span-5">
                    <div class="relative bg-slate-900/90 rounded-3xl p-6 sm:p-8 border border-white/10 shadow-2xl backdrop-blur-xl space-y-6">
                        
                        <!-- Card Header -->
                        <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                            <div>
                                <span class="text-[10px] font-extrabold uppercase tracking-widest text-emerald-400">Our Two Pillars</span>
                                <h3 class="text-lg font-bold text-white">One Unified Mission</h3>
                            </div>
                            <i class="bi bi-globe-europe-africa text-2xl"></i>
                        </div>

                        <!-- Pillar 1: LifeExtract Foundation -->
                        <div class="p-4 rounded-2xl bg-emerald-950/40 border border-emerald-500/30 space-y-2 hover:bg-emerald-950/60 transition">
                            <div class="flex items-center gap-2 text-emerald-400 font-bold text-sm">
                                <i class="bi bi-people-fill"></i>
                                <h4>LifeExtract Foundation</h4>
                            </div>
                            <p class="text-xs text-slate-300 leading-relaxed">
                                Elderly roadside women grants, youth tech bootcamps, and hospital/maternity bill relief for vulnerable families.
                            </p>
                            <a href="{{ route('programs.index') }}" class="inline-block text-[11px] font-bold text-emerald-400 hover:underline pt-1">
                                View Active Programs &rarr;
                            </a>
                        </div>

                        <!-- Pillar 2: TalksWithMrDee -->
                        <div class="p-4 rounded-2xl bg-purple-950/40 border border-purple-500/30 space-y-2 hover:bg-purple-950/60 transition">
                            <div class="flex items-center gap-2 text-amber-400 font-bold text-sm">
                                <i class="bi bi-mic-fill text-base"></i>
                                <h4>TALKSWITHMRDEE</h4>
                            </div>
                            <p class="text-xs text-slate-300 leading-relaxed">
                                "Talk am as e be!" Real conversations on dating, marriage conflict, and direct access to licensed therapists & legal guidance.
                            </p>
                            <a href="{{ route('podcast.index') }}" class="inline-block text-[11px] font-bold text-amber-400 hover:underline pt-1">
                                Listen to Episodes &rarr;
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 2. LIVE IMPACT SCOREBOARD COUNTER         -->
    <!-- ========================================== -->
    <section class="relative -mt-10 z-20 max-w-6xl mx-auto px-4 sm:px-6">
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xl border border-slate-100 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            
            <div class="space-y-1">
                <span class="text-2xl sm:text-3xl font-extrabold text-emerald-600 font-serif-heading">₦{{ number_format($totalRaised) }}+</span>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Outreach Funds Raised</p>
            </div>

            <div class="space-y-1 border-l border-slate-100">
                <span class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-serif-heading">{{ $programsCount }}+</span>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Active Programmes</p>
            </div>

            <div class="space-y-1 border-l-0 md:border-l border-slate-100">
                <span class="text-2xl sm:text-3xl font-extrabold text-purple-600 font-serif-heading">100%</span>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Direct Community Aid</p>
            </div>

            <div class="space-y-1 border-l border-slate-100">
                <span class="text-2xl sm:text-3xl font-extrabold text-amber-600 font-serif-heading">Lagos</span>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Grassroots Reach</p>
            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. FEATURED HUMANITARIAN PROGRAMMES        -->
    <!-- ========================================== -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div class="space-y-2">
                    <span class="text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full">
                        Humanitarian Outreaches
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-serif-heading">
                        Our Areas of Impact
                    </h2>
                    <p class="text-sm text-slate-600 max-w-xl">
                        Explore our active community initiatives designed to provide dignity, sustainable livelihood, and healthcare to vulnerable people.
                    </p>
                </div>
                <a href="{{ route('programs.index') }}" class="text-xs font-bold text-emerald-700 hover:text-emerald-800 flex items-center gap-1">
                    <span>View All Programmes</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <!-- Dynamic Program Cards Grid (Using our Card LEGO!) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredPrograms as $program)
                    <x-program-card :program="$program" />
                @empty
                    <div class="col-span-3 text-center py-12 bg-white rounded-2xl border border-slate-100">
                        <p class="text-slate-500 text-sm">No featured programs found. Run <code>php artisan db:seed</code> to populate!</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. TALKSWITHMRDEE PODCAST SPOTLIGHT       -->
    <!-- ========================================== -->
    <section class="py-20 bg-slate-950 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 relative z-10">
            
            <!-- Section Header with "Talk Am As E Be!" badge -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-slate-800 pb-8">
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-extrabold uppercase tracking-widest bg-amber-500 text-slate-950 px-3 py-1 rounded-full font-mono">
                            “TALK AM AS E BE!”
                        </span>
                        <span class="text-xs text-slate-400 font-semibold">• TALKSWITHMRDEE Media</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white font-serif-heading">
                        Real Conversations. Real People. Real Support.
                    </h2>
                    <p class="text-sm text-slate-400 max-w-2xl">
                        A safe, respectful platform where we unpack relationships, marriage challenges, personal growth, and connect people to professional therapists and legal guidance.
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('podcast.be-a-guest') }}" class="text-xs font-bold text-amber-400 bg-amber-950/60 border border-amber-500/40 hover:bg-amber-900/60 px-4 py-2.5 rounded-xl transition">
                        Be a Guest / Share Story
                    </a>
                    <a href="{{ route('podcast.index') }}" class="text-xs font-bold text-white bg-purple-600 hover:bg-purple-700 px-5 py-2.5 rounded-xl transition">
                        All Episodes &rarr;
                    </a>
                </div>
            </div>

            <!-- Dynamic Episode Cards Grid (Using our Episode LEGO!) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($latestEpisodes as $episode)
                    <x-episode-card :episode="$episode" />
                @empty
                    <div class="col-span-3 text-center py-12 bg-slate-900 rounded-2xl border border-slate-800">
                        <p class="text-slate-400 text-sm">No podcast episodes found yet.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 5. 4-TIER SUPPORT PATHWAYS (CRUCIAL REQ)  -->
    <!-- ========================================== -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center max-w-2xl mx-auto space-y-3">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-rose-600 bg-rose-50 px-3 py-1 rounded-full border border-rose-200 mb-4">
                    Confidential Assistance
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-serif-heading">
                    How Can We Support You Today?
                </h2>
                <p class="text-sm text-slate-600">
                    TALKSWITHMRDEE is not just about conversation—it is a pathway connecting you to certified professional therapists, marriage counselors, and legal advisors.
                </p>
            </div>

            <!-- 4 Support Pathway Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Pathway 1: Intentional Partner Connection -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-emerald-300 hover:shadow-lg transition space-y-4 flex flex-col">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl font-bold">
                        <i class="bi bi-heart-fill text-base"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900">Looking for a Meaningful Partner</h3>
                    <p class="text-xs text-slate-600 leading-relaxed flex-grow">
                        Intentional, values-aligned matchmaking for individuals seeking serious and purposeful relationships.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-emerald-700 hover:underline pt-2">
                        Get Connected &rarr;
                    </a>
                </div>

                <!-- Pathway 2: Marriage & Relationship Conflict -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-purple-300 hover:shadow-lg transition space-y-4 flex flex-col">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center text-2xl font-bold">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900">Marriage & Conflict Resolution</h3>
                    <p class="text-xs text-slate-600 leading-relaxed flex-grow">
                        Work through communication breakdowns, trust rebuilding, and explore healthy reconciliation with certified therapists.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-purple-700 hover:underline pt-2">
                        Request Counseling &rarr;
                    </a>
                </div>

                <!-- Pathway 3: Leaving Unhealthy/Toxic Relationships -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-rose-300 hover:shadow-lg transition space-y-4 flex flex-col">
                    <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-700 flex items-center justify-center text-2xl font-bold">
                        <i class="bi bi-shield-fill-exclamation"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900">Exiting Unhealthy Relationships</h3>
                    <p class="text-xs text-slate-600 leading-relaxed flex-grow">
                        Safe, non-judgmental professional pathways to help you process trauma and plan responsible, healthy next steps.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-rose-700 hover:underline pt-2">
                        Seek Safe Guidance &rarr;
                    </a>
                </div>

                <!-- Pathway 4: Legal Separation / Divorce Guidance -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-blue-300 hover:shadow-lg transition space-y-4 flex flex-col">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-2xl font-bold">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900">Peaceful Legal Separation</h3>
                    <p class="text-xs text-slate-600 leading-relaxed flex-grow">
                        Access qualified family lawyers for dignified, peaceful legal representation and rights clarity without unnecessary hostility.
                    </p>
                    <a href="{{ route('support.index') }}" class="text-xs font-bold text-blue-700 hover:underline pt-2">
                        Consult Legal Network &rarr;
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================== -->
    <!-- 6. REAL-LIFE TESTIMONIALS / STORIES       -->
    <!-- ========================================== -->
    @if($impactStories->count() > 0)
        <section class="py-20 bg-slate-100 border-t border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
                
                <div class="text-center max-w-2xl mx-auto space-y-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Real Stories</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 font-serif-heading">The Lives We Touch</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($impactStories as $story)
                        <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                            <span class="text-4xl text-emerald-500 font-serif">“</span>
                            <p class="text-slate-700 text-sm italic leading-relaxed">
                                {{ $story->story }}
                            </p>
                            <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">{{ $story->name }}</h4>
                                    <p class="text-xs text-slate-500">{{ $story->title }}</p>
                                </div>
                                <span class="text-xs bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full uppercase">
                                    {{ str_replace('_', ' ', $story->category) }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif

</x-layout>