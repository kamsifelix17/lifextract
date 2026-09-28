<div class="sticky top-0 z-50 w-full bg-[#FBFBFC]/85 backdrop-blur-md pt-2.5 sm:pt-3 pb-2 px-3 sm:px-6 lg:px-8 transition-all duration-300">
    <header class="max-w-7xl mx-auto bg-white/95 backdrop-blur-md rounded-2xl sm:rounded-full border border-slate-200/80 shadow-md px-4 sm:px-8 py-2.5 sm:py-3 flex items-center justify-between">
        
        <!-- Left: Brand Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group shrink-0">
            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-[#181A20] flex items-center justify-center text-[#F3C63F] font-black text-xs sm:text-sm shadow group-hover:scale-105 transition-transform">
                LX
            </div>
            <span class="font-extrabold text-sm sm:text-base tracking-tight text-[#181A20] leading-tight">Lifextract</span>
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
        <div class="flex items-center gap-2 sm:gap-3">
            <a href="{{ route('donate') }}" class="inline-flex items-center gap-1.5 sm:gap-2 text-[11px] sm:text-xs font-bold text-white bg-[#181A20] hover:bg-black px-3.5 sm:px-5 py-2 sm:py-2.5 rounded-full shadow transition-all duration-200 group">
                <span>Donate Now</span>
                <span class="w-4 h-4 sm:w-5 sm:h-5 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center text-[9px] sm:text-[10px] font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                    <i class="bi bi-arrow-up-right"></i>
                </span>
            </a>

            <!-- Mobile Menu Toggle Button -->
            <button type="button" 
                    id="mobile-nav-toggle"
                    onclick="const menu = document.getElementById('mobile-menu'); const icon = this.querySelector('i'); menu.classList.toggle('hidden'); icon.classList.toggle('bi-list'); icon.classList.toggle('bi-x-lg');" 
                    class="lg:hidden p-2 rounded-xl text-slate-800 hover:bg-slate-100 transition focus:outline-none"
                    aria-label="Toggle navigation menu">
                <i class="bi bi-list text-2xl leading-none"></i>
            </button>
        </div>

    </header>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden lg:hidden max-w-7xl mx-auto mt-2 bg-white rounded-3xl border border-slate-200 p-4 space-y-1 shadow-2xl animate-in fade-in slide-in-from-top-2 duration-200">
        <a href="{{ route('home') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-bold {{ request()->routeIs('home') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-800 hover:bg-slate-50' }}">
            <span>Home</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('about') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-semibold {{ request()->routeIs('about') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-700 hover:bg-slate-50' }}">
            <span>About Us</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('programs.index') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-semibold {{ request()->routeIs('programs.*') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-700 hover:bg-slate-50' }}">
            <span>Programs</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('podcast.index') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-bold {{ request()->routeIs('podcast.*') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-[#181A20] hover:bg-slate-50' }}">
            <span class="flex items-center gap-2">
                <i class="bi bi-mic text-[#F3C63F]"></i> TalksWithMrDee Podcast
            </span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('impact') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-semibold {{ request()->routeIs('impact') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-700 hover:bg-slate-50' }}">
            <span>Our Impact</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('support.index') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-semibold {{ request()->routeIs('support.*') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-700 hover:bg-slate-50' }}">
            <span>Relationship Support & Referrals</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('volunteer.create') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-semibold {{ request()->routeIs('volunteer.*') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-700 hover:bg-slate-50' }}">
            <span>Volunteer</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('partner.create') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-semibold {{ request()->routeIs('partner.*') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-700 hover:bg-slate-50' }}">
            <span>Partner With Us</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>
        <a href="{{ route('contact') }}" class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-semibold {{ request()->routeIs('contact') ? 'bg-[#181A20] text-[#F3C63F]' : 'text-slate-700 hover:bg-slate-50' }}">
            <span>Contact Us</span>
            <i class="bi bi-chevron-right text-xs opacity-50"></i>
        </a>

        <div class="pt-3 border-t border-slate-100 px-1">
            <a href="{{ route('donate') }}" class="flex items-center justify-between py-3 px-5 rounded-2xl bg-[#F3C63F] text-[#181A20] font-black text-xs uppercase tracking-wider shadow">
                <span>Donate to a Program</span>
                <i class="bi bi-arrow-up-right"></i>
            </a>
        </div>
    </div>
</div>