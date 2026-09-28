<x-layout>
    <x-slot:title>About Us — Lifextract Humanitarian Foundation & TalksWithMrDee</x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Carenest Dark Rounded Card)              -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-14">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-20 relative overflow-hidden shadow-2xl">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left: Text Content with generous breathing room -->
                <div class="lg:col-span-8 space-y-6 sm:space-y-7 text-left">
                    <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                        / About Our Organization /
                    </span>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.14]">
                        Putting People Before Publicity
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl font-normal">
                        Lifextract Humanitarian Foundation is dedicated to transforming grassroots communities across Lagos, Nigeria. We bridge essential physical aid with emotional clarity through our multimedia storytelling platform, <strong class="text-[#F3C63F] font-semibold">TALKSWITHMRDEE</strong>.
                    </p>
                    
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="{{ route('donate') }}" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-7 py-4 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Support Our Work</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>

                        <a href="{{ route('programs.index') }}#browse-programs" class="inline-flex items-center justify-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition text-center">
                            <span>Our Active Programs</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual Badge Showcase -->
                <div class="lg:col-span-4 flex justify-center lg:justify-end">
                    <div class="relative p-3 rounded-3xl bg-white/5 border border-white/10 shadow-2xl backdrop-blur-md">
                        <img src="{{ asset('images/talkswithmrdee-emblem.jpg') }}" alt="TalksWithMrDee" class="w-40 h-40 sm:w-56 sm:h-56 rounded-2xl object-cover border border-[#F3C63F]/40 shadow-inner">
                        <div class="absolute -bottom-3 -right-3 bg-[#F3C63F] text-[#181A20] font-black text-[10px] uppercase px-3 py-1.5 rounded-full shadow-lg">
                            ★ Ikeja, Lagos
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Bar with Generous Margin & Spacing -->
            <div class="mt-12 sm:mt-16 pt-8 sm:pt-10 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 text-left">
                <div class="space-y-1">
                    <span class="text-2xl sm:text-4xl font-black text-white block tracking-tight">2,500+</span>
                    <span class="text-xs font-medium text-slate-400">Direct Beneficiaries</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-4xl font-black text-white block tracking-tight">100%</span>
                    <span class="text-xs font-medium text-slate-400">Grassroots Focused</span>
                </div>
                <div class="space-y-1">
                    <span class="text-3xl sm:text-4xl font-black text-[#F3C63F] block tracking-tight">Weekly</span>
                    <span class="text-xs font-medium text-slate-400">Podcast Episodes</span>
                </div>
                <div class="space-y-1">
                    <span class="text-3xl sm:text-4xl font-black text-white block tracking-tight">Ikeja</span>
                    <span class="text-xs font-medium text-slate-400">Lagos Headquarters</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. MISSION, VISION & PHILOSOPHY (Carenest 3-Card Grid)    -->
    <!-- ========================================================= -->
    <section class="py-16 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center max-w-xl mx-auto space-y-2">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Our Foundation /</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight">
                    What Drives Our Every Move
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1: Mission -->
                <div class="p-8 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 shadow-sm space-y-4 hover:border-slate-400 transition flex flex-col">
                    <div class="w-12 h-12 rounded-2xl bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xl shadow">
                        <i class="bi bi-compass"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#181A20]">Our Mission</h3>
                    <p class="text-xs text-slate-600 leading-relaxed flex-grow">
                        To provide practical, transparent, and dignified humanitarian assistance to vulnerable elderly women, equip underprivileged youth with marketable digital skills, and offer emergency medical and maternity bill relief.
                    </p>
                </div>

                <!-- Card 2: Vision -->
                <div class="p-8 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 shadow-sm space-y-4 hover:border-slate-400 transition flex flex-col">
                    <div class="w-12 h-12 rounded-2xl bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xl shadow">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#181A20]">Our Vision</h3>
                    <p class="text-xs text-slate-600 leading-relaxed flex-grow">
                        To build a sustainable digital ecosystem combining grassroots impact with authentic storytelling and emotional guidance—where every vulnerable person finds opportunity, support, and dignity.
                    </p>
                </div>

                <!-- Card 3: Philosophy -->
                <div class="p-8 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 shadow-sm space-y-4 hover:border-slate-400 transition flex flex-col">
                    <div class="w-12 h-12 rounded-2xl bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xl shadow">
                        <i class="bi bi-heart"></i>
                    </div>
                    <h3 class="text-lg font-bold text-[#181A20]">Our Philosophy</h3>
                    <p class="text-xs text-slate-600 leading-relaxed flex-grow">
                        <strong class="text-[#181A20]">“People Before Publicity.”</strong> We believe genuine humanitarian work respects beneficiary privacy and safeguards human dignity, while maintaining absolute financial accountability.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 3. CORE VALUES SECTION                                    -->
    <!-- ========================================================= -->
    <section class="py-16 bg-[#FBFBFC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center max-w-xl mx-auto space-y-2">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Core Values /</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight">
                    The Principles We Live By
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                
                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 text-center group hover:border-[#181A20] transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-slate-100 group-hover:bg-[#181A20] group-hover:text-[#F3C63F] text-[#181A20] flex items-center justify-center text-xl transition">
                        <i class="bi bi-patch-check"></i>
                    </div>
                    <h4 class="font-bold text-[#181A20] text-sm">Authenticity</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Real lives, unfiltered truths, and honest motives in everything we do.</p>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 text-center group hover:border-[#181A20] transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-slate-100 group-hover:bg-[#181A20] group-hover:text-[#F3C63F] text-[#181A20] flex items-center justify-center text-xl transition">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4 class="font-bold text-[#181A20] text-sm">Compassion</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Listening to pain and meeting vulnerable people at their exact point of need.</p>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 text-center group hover:border-[#181A20] transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-slate-100 group-hover:bg-[#181A20] group-hover:text-[#F3C63F] text-[#181A20] flex items-center justify-center text-xl transition">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="font-bold text-[#181A20] text-sm">Professionalism</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Certified nurses, licensed therapists, and verified legal representation.</p>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 text-center group hover:border-[#181A20] transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-slate-100 group-hover:bg-[#181A20] group-hover:text-[#F3C63F] text-[#181A20] flex items-center justify-center text-xl transition">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="font-bold text-[#181A20] text-sm">Transparency</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Full reporting and verified proof of direct aid for every donor and sponsor.</p>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-3 text-center group hover:border-[#181A20] transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-slate-100 group-hover:bg-[#181A20] group-hover:text-[#F3C63F] text-[#181A20] flex items-center justify-center text-xl transition">
                        <i class="bi bi-people"></i>
                    </div>
                    <h4 class="font-bold text-[#181A20] text-sm">Human Connection</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Bridging communities, donors, volunteers, and listeners into one family.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 4. THE TWO WINGS: FOUNDATION & PODCAST                   -->
    <!-- ========================================================= -->
    <section class="py-20 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left: Why TalksWithMrDee Exists (Span 6) -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="space-y-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ Media & Community /</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-[#181A20] tracking-tight">
                            Why TALKSWITHMRDEE Exists: <br>
                            <span class="text-amber-600">“TALK AM AS E BE!”</span>
                        </h2>
                    </div>

                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Humanitarian aid solves physical hunger and medical emergencies, but human beings also need emotional clarity, healthy relationships, and truthful conversations.
                    </p>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Through TALKSWITHMRDEE, we unpack real-life challenges—dating, marriage, conflict, and personal growth—while connecting people to licensed therapists and peaceful family legal advisors.
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('podcast.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-[#181A20] hover:bg-black px-6 py-3.5 rounded-full shadow transition group">
                            <i class="bi bi-mic text-[#F3C63F]"></i>
                            <span>Explore Podcast Hub</span>
                            <span class="w-5 h-5 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center text-[10px] font-black group-hover:translate-x-0.5 transition-transform">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Right: High-Contrast Ecosystem Card with Real 3D Emblem (Span 6) -->
                <div class="lg:col-span-6">
                    <div class="bg-[#181A20] text-white p-8 sm:p-10 rounded-3xl sm:rounded-[36px] border border-white/10 shadow-2xl space-y-8">
                        <div class="flex items-center gap-4 border-b border-white/10 pb-6">
                            <img src="{{ asset('images/talkswithmrdee-emblem.jpg') }}" alt="TalksWithMrDee" class="w-16 h-16 rounded-2xl object-cover border-2 border-[#F3C63F] shadow-lg flex-shrink-0">
                            <div>
                                <h3 class="text-lg font-bold text-white">One Unified Ecosystem</h3>
                                <p class="text-xs text-slate-400">Two wings uplifting vulnerable people</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-white/10 text-[#F3C63F] flex items-center justify-center text-lg flex-shrink-0">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-white">LIFEXTRACT FOUNDATION</h4>
                                    <p class="text-xs text-slate-400 leading-relaxed">
                                        Grassroots direct aid: food packs for roadside grandmothers, youth tech bootcamps, and emergency maternity bill relief.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-white/10 text-[#F3C63F] flex items-center justify-center text-lg flex-shrink-0">
                                    <i class="bi bi-chat-quote"></i>
                                </div>
                                <div class="space-y-1">
                                    <h4 class="text-sm font-bold text-white">TALKSWITHMRDEE</h4>
                                    <p class="text-xs text-slate-400 leading-relaxed">
                                        The storytelling platform: raw conversations, intentional relationship connection, and certified professional therapy referrals.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>