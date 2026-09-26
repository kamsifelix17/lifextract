<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-100 shadow-sm">
    <!-- Top Ecosystem Brand Switcher Bar -->
    <div class="bg-slate-900 text-xs py-1.5 px-4 sm:px-8 text-slate-300 flex justify-between items-center border-b border-slate-800">
        <div class="flex items-center gap-4">
            <span class="font-medium text-slate-400">Our Digital Ecosystem:</span>
            <a href="{{ route('home') }}" class="flex items-center gap-1.5 text-emerald-400 font-semibold hover:text-emerald-300 transition">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Lifextract Foundation
            </a>
            <span class="text-slate-600">|</span>
            <a href="{{ route('podcast.index') }}" class="flex items-center gap-1.5 text-amber-400 font-semibold hover:text-amber-300 transition">
                <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                TalksWithMrDee Podcast
            </a>
        </div>
        <div class="hidden md:flex items-center gap-4 text-slate-400">
            <span>
            <i class="bi bi-geo-alt-fill text-rose-600 text-base"></i> 
            Lagos, Nigeria</span>
            <span>•</span>
            <a href="mailto:info@lifextract.org" class="hover:text-white transition">info@lifextract.org</a>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Navbar Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <!-- Icon Box -->
                <div class="w-10 h-10 rounded-xl bg-brand-charcoal border border-[#D4AF37]/50 flex items-center justify-center shadow-md transition-colors group-hover:border-[#D4AF37]">
                    <!-- Lightning bolt matching the official logo -->
                    <i class="bi bi-lightning-charge-fill text-[#D4AF37] text-lg transition-colors group-hover:text-[#FDE08B]"></i>
                </div>
                <!-- Text -->
                <div class="flex flex-col">
                    <span class="text-xl font-extrabold tracking-tight text-slate-900">
                        Life <span class="text-gold-gradient">Xtract</span>
                    </span>
                    <span class="text-[9px] font-bold tracking-widest uppercase text-[#D4AF37]">
                        Humanitarian Foundation
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-7 text-sm font-semibold text-slate-700">
                <a href="{{ route('home') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('home') ? 'text-emerald-600 font-bold' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('about') ? 'text-emerald-600 font-bold' : '' }}">About Us</a>
                <a href="{{ route('programs.index') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('programs.*') ? 'text-emerald-600 font-bold' : '' }}">Our Work</a>
                <a href="{{ route('impact') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('impact') ? 'text-emerald-600 font-bold' : '' }}">Our Impact</a>
                
                <!-- Podcast Hub Link with Badge -->
                <a href="{{ route('podcast.index') }}" class="flex items-center gap-2 px-4 py-2 rounded-full bg-[#1A1A1A] border border-[#D4AF37]/50 hover:border-[#D4AF37] transition-colors shadow-sm group">
                    <i class="bi bi-mic-fill text-[#D4AF37] text-lg"></i>
                    <span class="text-sm font-bold text-white tracking-wide">Podcast</span>
                    <span class="text-[10px] font-extrabold bg-[#D4AF37] text-[#111111] px-2 py-0.5 rounded-sm uppercase tracking-wider">
                        MRDEE
                </span>
                </a>

                <!-- Support Pathways Link -->
                <a href="{{ route('support.index') }}" class="flex items-center gap-2 px-4 py-2 rounded-full bg-[#1A1A1A] border border-[#D4AF37]/50 hover:border-[#D4AF37] transition-colors shadow-sm group">
                    <i class="bi bi-heart-fill text-[#D4AF37] text-lg"></i>
                    <span class="text-sm font-bold text-[#D4AF37] tracking-wide">Get Support</span>
                </a>
            </nav>

            <!-- Action Buttons -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('volunteer.create') }}" class="text-xs font-bold uppercase tracking-wider text-slate-700 hover:text-emerald-600 px-4 py-2.5 rounded-xl border border-slate-200 hover:border-emerald-300 transition">
                    Volunteer
                </a>
                <a href="{{ route('donate') }}" class="text-xs font-bold uppercase tracking-wider text-white bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 px-5 py-2.5 rounded-xl shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5 flex items-center gap-1.5">
                    <i class="bi bi-heart-fill text-rose-600 text-base"></i>
                    <span>Donate</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex lg:hidden items-center gap-2">
                <a href="{{ route('donate') }}" class="flex items-center gap-1.5 text-xs font-bold text-white bg-emerald-600 px-3 py-2 rounded-lg transition-colors">
                <i class="bi bi-heart-fill text-rose-600 text-base"></i>
                    <span>Donate</span>
                </a>
                <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-b border-slate-200 px-4 pt-2 pb-6 space-y-3">
    
    <!-- Standard Links -->
    <a href="{{ route('home') }}" class="block py-2 font-semibold text-slate-800 hover:text-[#D4AF37] transition-colors">Home</a>
    <a href="{{ route('about') }}" class="block py-2 font-semibold text-slate-800 hover:text-[#D4AF37] transition-colors">About Us</a>
    <a href="{{ route('programs.index') }}" class="block py-2 font-semibold text-slate-800 hover:text-[#D4AF37] transition-colors">Our Work</a>
    <a href="{{ route('impact') }}" class="block py-2 font-semibold text-slate-800 hover:text-[#D4AF37] transition-colors">Our Impact</a>
    
    <!-- Podcast Hub Link with Badge -->
    <a href="{{ route('podcast.index') }}" class="flex w-fit items-center gap-3 px-5 py-2.5 my-2 rounded-full bg-[#1A1A1A] border border-[#D4AF37]/50 shadow-sm"> <i class="bi bi-mic-fill text-[#D4AF37] text-lg"></i>
        <span class="text-sm font-bold text-white tracking-wide">Podcast</span>
        <span class="text-[10px] font-extrabold bg-[#D4AF37] text-[#111111] px-2 py-0.5 rounded-sm uppercase tracking-wider">
            MRDEE
        </span>
    </a>

    <!-- Get Support Mobile Button -->
    <a href="{{ route('support.index') }}" class="flex w-fit items-center gap-3 px-5 py-2.5 mb-4 rounded-full bg-[#1A1A1A] border border-[#D4AF37]/50 shadow-sm">
        <i class="bi bi-heart-fill text-[#D4AF37] text-lg"></i>
        <span class="text-sm font-bold text-[#D4AF37] tracking-wide">Get Support</span>
    </a>

    <!-- Secondary Links -->
    <a href="{{ route('volunteer.create') }}" class="block py-2 font-semibold text-slate-700 hover:text-[#D4AF37] transition-colors">Volunteer</a>
    <a href="{{ route('partner.create') }}" class="block py-2 font-semibold text-slate-700 hover:text-[#D4AF37] transition-colors">Partner With Us</a>
    <a href="{{ route('contact') }}" class="block py-2 font-semibold text-slate-700 hover:text-[#D4AF37] transition-colors">Contact Us</a>

</div>
</header>