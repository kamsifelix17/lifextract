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
            <span>📍 Lagos, Nigeria</span>
            <span>•</span>
            <a href="mailto:info@lifextract.org" class="hover:text-white transition">info@lifextract.org</a>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Brand Logo & Name -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-emerald-600 to-teal-800 flex items-center justify-center text-white font-bold text-xl shadow-md group-hover:scale-105 transition-transform">
                    LE
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg leading-tight text-slate-900 tracking-tight">LIFEXTRACT</span>
                    <span class="text-[10px] tracking-widest text-emerald-700 font-bold uppercase">Humanitarian Foundation</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden lg:flex items-center gap-7 text-sm font-semibold text-slate-700">
                <a href="{{ route('home') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('home') ? 'text-emerald-600 font-bold' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('about') ? 'text-emerald-600 font-bold' : '' }}">About Us</a>
                <a href="{{ route('programs.index') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('programs.*') ? 'text-emerald-600 font-bold' : '' }}">Our Work</a>
                <a href="{{ route('impact') }}" class="hover:text-emerald-600 transition {{ request()->routeIs('impact') ? 'text-emerald-600 font-bold' : '' }}">Our Impact</a>
                
                <!-- Podcast Hub Link with Badge -->
                <a href="{{ route('podcast.index') }}" class="flex items-center gap-1.5 text-purple-700 hover:text-purple-900 transition font-bold px-3 py-1 rounded-full bg-purple-50 border border-purple-200">
                    <span>🎙️ Podcast</span>
                    <span class="text-[10px] bg-purple-600 text-white px-1.5 py-0.5 rounded-full uppercase">MrDee</span>
                </a>

                <!-- Support Pathways Link -->
                <a href="{{ route('support.index') }}" class="text-rose-600 hover:text-rose-700 transition font-semibold">
                    Get Support
                </a>
            </nav>

            <!-- Action Buttons -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('volunteer.create') }}" class="text-xs font-bold uppercase tracking-wider text-slate-700 hover:text-emerald-600 px-4 py-2.5 rounded-xl border border-slate-200 hover:border-emerald-300 transition">
                    Volunteer
                </a>
                <a href="{{ route('donate') }}" class="text-xs font-bold uppercase tracking-wider text-white bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 px-5 py-2.5 rounded-xl shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5 flex items-center gap-1.5">
                    <span>❤️</span>
                    <span>Donate</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex lg:hidden items-center gap-2">
                <a href="{{ route('donate') }}" class="text-xs font-bold text-white bg-emerald-600 px-3 py-2 rounded-lg">Donate</a>
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
        <a href="{{ route('home') }}" class="block py-2 font-semibold text-slate-800">Home</a>
        <a href="{{ route('about') }}" class="block py-2 font-semibold text-slate-800">About Us</a>
        <a href="{{ route('programs.index') }}" class="block py-2 font-semibold text-slate-800">Our Work</a>
        <a href="{{ route('impact') }}" class="block py-2 font-semibold text-slate-800">Our Impact</a>
        <a href="{{ route('podcast.index') }}" class="block py-2 font-bold text-purple-700">🎙️ TalksWithMrDee Podcast</a>
        <a href="{{ route('support.index') }}" class="block py-2 font-bold text-rose-600">🤝 Get Support</a>
        <a href="{{ route('volunteer.create') }}" class="block py-2 font-semibold text-slate-700">Volunteer</a>
        <a href="{{ route('partner.create') }}" class="block py-2 font-semibold text-slate-700">Partner With Us</a>
        <a href="{{ route('contact') }}" class="block py-2 font-semibold text-slate-700">Contact Us</a>
    </div>
</header>