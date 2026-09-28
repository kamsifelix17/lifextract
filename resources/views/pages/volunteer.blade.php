<x-layout>
    <x-slot:title>Volunteer With Us — Lifextract Humanitarian Foundation</x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Carenest Dark Rounded Card)              -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl border border-white/10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                
                <!-- Left: Title & Mission -->
                <div class="lg:col-span-8 space-y-6 text-left">
                    <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                        / Join Our Field Operations /
                    </span>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                        Volunteer Your Time, Skills & Compassion
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl font-normal">
                        Our humanitarian work happens directly in grassroots neighborhoods across Lagos. Whether you are a healthcare professional, software trainer, student, or community organizer — your direct involvement brings dignity and real relief to vulnerable lives.
                    </p>
                    
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="#volunteer-form" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-7 py-4 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Apply to Volunteer</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-down"></i>
                            </span>
                        </a>

                        <a href="{{ route('programs.index') }}#browse-programs" class="inline-flex items-center justify-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition text-center">
                            <i class="bi bi-heart-half text-[#F3C63F]"></i>
                            <span>View Active Programs</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual Badge / Operations Pillar -->
                <div class="lg:col-span-4 flex justify-center lg:justify-end">
                    <div class="relative p-6 sm:p-8 rounded-3xl bg-white/5 border border-white/10 shadow-2xl backdrop-blur-md max-w-xs w-full text-center space-y-4">
                        <div class="w-14 h-14 mx-auto rounded-2xl bg-[#F3C63F]/10 border border-[#F3C63F]/30 flex items-center justify-center text-[#F3C63F] text-2xl">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Field Crew</span>
                            <span class="text-xs text-slate-400 mt-1 block">Join a passionate team of doctors, trainers, and grassroots advocates.</span>
                        </div>
                        <div class="pt-2 border-t border-white/10">
                            <span class="text-[11px] font-bold text-[#F3C63F] uppercase tracking-wider block">
                                <i class="bi bi-geo-alt-fill mr-1"></i> Ikeja, Lagos State
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Bar -->
            <div class="mt-12 pt-8 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Direct</span>
                    <span class="text-xs font-medium text-slate-400">Ground Outreaches</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-[#F3C63F] block tracking-tight">Multi-Role</span>
                    <span class="text-xs font-medium text-slate-400">Health, Tech & Relief</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Flexible</span>
                    <span class="text-xs font-medium text-slate-400">Weekend & Field Dates</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Documented</span>
                    <span class="text-xs font-medium text-slate-400">Impact Experience</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. VOLUNTEER PILLARS (Carenest 4-Card Grid)               -->
    <!-- ========================================================= -->
    <section class="py-16 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="max-w-2xl space-y-2">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">/ How You Can Make A Difference /</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#181A20] tracking-tight">
                    Where Our Volunteers Serve
                </h2>
                <p class="text-xs sm:text-sm text-slate-600">
                    Match your personal skills, career background, and passions with our ongoing humanitarian programs in Lagos.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Pillar 1: Medical -->
                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 space-y-3">
                    <span class="w-10 h-10 rounded-2xl bg-[#181A20] text-rose-400 flex items-center justify-center font-bold text-lg">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </span>
                    <h3 class="text-base font-bold text-[#181A20]">1. Health & Medical Teams</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Nurses, doctors, pharmacists, and medical students conducting blood pressure, glucose screenings, and consultations.
                    </p>
                </div>

                <!-- Pillar 2: Youth Tech -->
                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 space-y-3">
                    <span class="w-10 h-10 rounded-2xl bg-[#181A20] text-amber-400 flex items-center justify-center font-bold text-lg">
                        <i class="bi bi-laptop"></i>
                    </span>
                    <h3 class="text-base font-bold text-[#181A20]">2. Tech & Vocational Trainers</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Software developers, designers, carpenters, and artisans tutoring underprivileged youths in practical employment skills.
                    </p>
                </div>

                <!-- Pillar 3: Elderly & Relief -->
                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 space-y-3">
                    <span class="w-10 h-10 rounded-2xl bg-[#181A20] text-emerald-400 flex items-center justify-center font-bold text-lg">
                        <i class="bi bi-box2-heart-fill"></i>
                    </span>
                    <h3 class="text-base font-bold text-[#181A20]">3. Food & Direct Relief</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Packing, sorting, and distributing dignified monthly food supplies to elderly roadside grandmothers across Lagos markets.
                    </p>
                </div>

                <!-- Pillar 4: Media & Logistics -->
                <div class="p-6 rounded-3xl bg-[#FBFBFC] border border-slate-200/80 space-y-3">
                    <span class="w-10 h-10 rounded-2xl bg-[#181A20] text-blue-400 flex items-center justify-center font-bold text-lg">
                        <i class="bi bi-camera-video-fill"></i>
                    </span>
                    <h3 class="text-base font-bold text-[#181A20]">4. Media & Event Crew</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Field videographers, photographers, sound technicians, and logistics leads supporting TALKSWITHMRDEE productions.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 3. VOLUNTEER APPLICATION FORM (Carenest Style)            -->
    <!-- ========================================================= -->
    <section id="volunteer-form" class="py-12 bg-slate-50 min-h-screen scroll-mt-28">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            
            <div class="bg-white rounded-3xl sm:rounded-[36px] p-5 sm:p-12 border border-slate-200/80 shadow-sm space-y-8">
                
                <div class="border-b border-slate-100 pb-5">
                    <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">Application Form</span>
                    <h2 class="text-2xl font-extrabold text-[#181A20] tracking-tight">Become a Lifextract Field Volunteer</h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Fill in your details below and our volunteer coordinator will reach out via WhatsApp/Email.
                    </p>
                </div>

                @if(session('success'))
                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center gap-3">
                        <i class="bi bi-check-circle-fill text-emerald-600 text-lg"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('volunteer.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-person text-slate-400"></i> Full Name *
                            </label>
                            <input type="text" name="full_name" required placeholder="e.g. Samuel Adebayo" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-envelope text-slate-400"></i> Email Address *
                            </label>
                            <input type="email" name="email" required placeholder="samuel@example.com" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-whatsapp text-slate-400"></i> Phone / WhatsApp *
                            </label>
                            <input type="tel" name="phone" required placeholder="+234 907..." class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-briefcase text-slate-400"></i> Skills / Profession *
                            </label>
                            <input type="text" name="skills" required placeholder="e.g. Registered Nurse, Web Dev, Student, Driver" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-chat-left-text text-slate-400"></i> How Would You Like to Contribute? *
                        </label>
                        <textarea name="details" rows="5" required placeholder="Tell us about your availability (weekends/weekdays), preferred location in Lagos, past volunteer experience, or specific causes you care about..." class="w-full text-sm p-4 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition"></textarea>
                    </div>

                    <!-- Direct Helpline Note -->
                    <div class="p-4 rounded-2xl bg-[#181A20] text-slate-300 text-xs flex items-center gap-3 border border-white/10">
                        <span class="w-8 h-8 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-[#F3C63F] text-sm flex-shrink-0">
                            <i class="bi bi-shield-check"></i>
                        </span>
                        <span>Volunteer certificates and official recommendation letters are provided to active volunteers after field hours.</span>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="inline-flex items-center justify-between w-full text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] py-4 px-6 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Submit Volunteer Application</span>
                            <span class="w-7 h-7 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </section>
</x-layout>