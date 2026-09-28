<div class="sticky top-0 z-50 w-full bg-[#FBFBFC]/85 backdrop-blur-md pt-3 pb-2 px-4 sm:px-6 lg:px-8 transition-all duration-300">
    <header class="max-w-7xl mx-auto bg-white/95 backdrop-blur-md rounded-2xl sm:rounded-full border border-slate-200/80 shadow-md px-5 sm:px-8 py-3 flex items-center justify-between">
        
        <!-- Left: Brand Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group flex-shrink-0">
            <div class="w-9 h-9 rounded-full bg-[#181A20] flex items-center justify-center text-[#F3C63F] font-black text-sm shadow group-hover:scale-105 transition-transform">
                LX
            </div>
            <span class="font-extrabold text-base tracking-tight text-[#181A20] leading-tight">Lifextract</span>
        </a>

        <!-- Center: Clean Navigation Links with Generous Spacing -->
        <nav class="hidden lg:flex items-center gap-8 text-xs font-semibold text-slate-600">
            <a href="{{ route('home') }}" class="hover:text-[#181A20] transition {{ request()->routeIs('home') ? 'text-[#181A20] font-bold' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="hover:text-[#181A20] transition {{ request()->routeIs('about') ? 'text-[#181A20] font-bold' : '' }}">About Us</a>
            <a href="{{ route('programs.index') }}" class="hover:text-[#181A20] transition {{ request()->routeIs('programs.*') ? 'text-[#181A20] font-bold' : '' }}">Programs</a>
            <a href="{{ route('podcast.index') }}" class="hover:text-[#181A20] transition {{ request()->routeIs('podcast.*') ? 'text-[#181A20] font-bold' : '' }}">Podcast</a>
            <a href="{{ route('impact') }}" class="hover:text-[#181A20] transition {{ request()->routeIs('impact') ? 'text-[#181A20] font-bold' : '' }}">Impact</a>
            <a href="{{ route('support.index') }}" class="hover:text-[#181A20] transition {{ request()->routeIs('support.*') ? 'text-[#181A20] font-bold' : '' }}">Support</a>
            <a href="{{ route('contact') }}" class="hover:text-[#181A20] transition {{ request()->routeIs('contact') ? 'text-[#181A20] font-bold' : '' }}">Contact</a>
        </nav>

        <!-- Right: Action Button & Mobile Toggle -->
        <div class="flex items-center gap-3">
            <a href="{{ route('donate') }}" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-[#181A20] hover:bg-black px-5 py-2.5 rounded-full shadow transition-all duration-200 group">
                <span>Donate Now</span>
                <span class="w-5 h-5 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center text-[10px] font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                    <i class="bi bi-arrow-up-right"></i>
                </span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="lg:hidden p-2 rounded-full text-slate-700 hover:bg-slate-100">
                <i class="bi bi-list text-2xl"></i>
            </button>
        </div>

    </header>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden lg:hidden max-w-7xl mx-auto mt-2 bg-white rounded-2xl border border-slate-200 px-5 py-4 space-y-3 shadow-xl">
        <a href="{{ route('home') }}" class="block py-1.5 font-bold text-slate-900 text-sm">Home</a>
        <a href="{{ route('about') }}" class="block py-1.5 font-semibold text-slate-600 text-sm">About Us</a>
        <a href="{{ route('programs.index') }}" class="block py-1.5 font-semibold text-slate-600 text-sm">Programs</a>
        <a href="{{ route('podcast.index') }}" class="block py-1.5 font-bold text-[#181A20] text-sm"><i class="bi bi-mic mr-1 text-amber-500"></i> TalksWithMrDee Podcast</a>
        <a href="{{ route('impact') }}" class="block py-1.5 font-semibold text-slate-600 text-sm">Impact</a>
        <a href="{{ route('support.index') }}" class="block py-1.5 font-semibold text-slate-600 text-sm">Relationship Support & Referrals</a>
        <a href="{{ route('volunteer.create') }}" class="block py-1.5 font-semibold text-slate-600 text-sm">Volunteer</a>
        <a href="{{ route('partner.create') }}" class="block py-1.5 font-semibold text-slate-600 text-sm">Partner With Us</a>
        <a href="{{ route('contact') }}" class="block py-1.5 font-semibold text-slate-600 text-sm">Contact Us</a>
        <div class="pt-2 border-t border-slate-100">
            <a href="{{ route('donate') }}" class="block text-center py-2.5 rounded-full bg-[#181A20] text-white font-bold text-xs">
                Donate Now <i class="bi bi-arrow-up-right ml-1 text-[#F3C63F]"></i>
            </a>
        </div>
    </div>
</div>