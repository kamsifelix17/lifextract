<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'TALKSWITHMRDEE — Talk Am As E Be' }}</title>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-[#F3C63F] selection:text-[#181A20] flex flex-col min-h-screen">

    <!-- Podcast Specific Navbar (Dark to distinguish from NGO) -->
    <div class="sticky top-0 z-50 w-full bg-[#121418]/95 backdrop-blur-md pt-2.5 sm:pt-3 pb-2 px-3 sm:px-6 lg:px-8 border-b border-white/10 transition-all duration-300">
        <header class="max-w-7xl mx-auto flex items-center justify-between px-2 sm:px-4">
            
            <a href="{{ route('podcast.index') }}" class="flex items-center gap-3 group shrink-0">
                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-[#F3C63F] flex items-center justify-center text-[#181A20] text-lg shadow group-hover:scale-105 transition-transform">
                    <i class="bi bi-mic-fill"></i>
                </div>
                <div class="flex flex-col">
                    <span class="font-black text-sm sm:text-base tracking-tight text-white leading-none">TALKSWITHMRDEE</span>
                    <span class="text-[9px] sm:text-[10px] text-[#F3C63F] font-mono tracking-widest uppercase mt-0.5">Talk Am As E Be</span>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-8 text-xs font-semibold text-slate-300">
                <a href="{{ route('podcast.index') }}" class="hover:text-[#F3C63F] transition {{ request()->routeIs('podcast.index') ? 'text-[#F3C63F] font-bold' : '' }}">Episodes</a>
                <a href="{{ route('podcast.be-a-guest') }}" class="hover:text-[#F3C63F] transition {{ request()->routeIs('podcast.be-a-guest') ? 'text-[#F3C63F] font-bold' : '' }}">Be a Guest</a>
                <a href="{{ route('support.index') }}" class="hover:text-[#F3C63F] transition {{ request()->routeIs('support.*') ? 'text-[#F3C63F] font-bold' : '' }}">Relationship Support</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="hidden sm:inline-flex items-center gap-2 text-[11px] font-bold text-slate-300 hover:text-white border border-white/20 hover:border-white/40 bg-white/5 px-4 py-2 rounded-full transition-all duration-200">
                    <i class="bi bi-arrow-left"></i>
                    <span>Back to Lifextract</span>
                </a>

                <button type="button" 
                        onclick="const menu = document.getElementById('podcast-mobile-menu'); const icon = this.querySelector('i'); menu.classList.toggle('hidden'); icon.classList.toggle('bi-list'); icon.classList.toggle('bi-x-lg');" 
                        class="lg:hidden p-2 rounded-xl text-slate-300 hover:bg-white/10 transition">
                    <i class="bi bi-list text-2xl leading-none"></i>
                </button>
            </div>

        </header>

        <div id="podcast-mobile-menu" class="hidden lg:hidden max-w-7xl mx-auto mt-3 bg-[#181A20] rounded-2xl border border-white/10 p-4 space-y-2 shadow-2xl">
            <a href="{{ route('podcast.index') }}" class="block px-4 py-3 rounded-xl text-sm font-bold text-white bg-white/5 border border-white/10">Episodes</a>
            <a href="{{ route('podcast.be-a-guest') }}" class="block px-4 py-3 rounded-xl text-sm font-semibold text-slate-300 hover:bg-white/5">Be a Guest</a>
            <a href="{{ route('support.index') }}" class="block px-4 py-3 rounded-xl text-sm font-semibold text-slate-300 hover:bg-white/5">Relationship Support</a>
            
            <div class="pt-3 mt-2 border-t border-white/10">
                <a href="{{ route('home') }}" class="flex items-center justify-center gap-2 w-full py-3 rounded-xl text-slate-400 border border-slate-600 text-xs font-bold hover:bg-white/5 transition">
                    <i class="bi bi-arrow-left"></i> Back to Foundation
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content Injection -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Podcast Specific Footer -->
    <footer class="bg-[#121418] text-slate-400 pt-16 pb-12 text-xs border-t border-slate-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-12 border-b border-white/10 text-center md:text-left">
                <div class="space-y-1.5 max-w-xl">
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                        Real Conversations. Real Growth.
                    </h3>
                    <p class="text-xs text-slate-400">
                        Join Mr. Dee weekly as we unpack life, love, and the raw truth of navigating modern relationships.
                    </p>
                </div>
                <a href="https://www.youtube.com/@TALKSWITHMRDEE" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-red-600 hover:bg-red-700 px-6 py-3.5 rounded-full shadow-lg transition-all duration-200">
                    <i class="bi bi-youtube text-lg"></i>
                    <span>Subscribe on YouTube</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 pb-12 border-b border-white/10">
                
                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-white font-black text-xl tracking-tight">
                        <i class="bi bi-mic-fill text-[#F3C63F]"></i> TALKSWITHMRDEE
                    </div>
                    <p class="text-slate-400 leading-relaxed pr-4 text-xs">
                        "Talk am as e be." The premier storytelling platform for unfiltered truths and emotional clarity.
                    </p>
                    <div class="space-y-1.5 text-[11px] text-slate-300 pt-2">
                        <p class="flex items-center gap-2"><i class="bi bi-envelope-fill text-[#F3C63F]"></i> <a href="mailto:talkswithmrdee@gmail.com" class="hover:text-white transition">talkswithmrdee@gmail.com</a></p>
                    </div>
                </div>

                <div class="space-y-3">
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider">Podcast Links</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="{{ route('podcast.index') }}" class="hover:text-[#F3C63F] transition">All Episodes</a></li>
                        <li><a href="{{ route('podcast.be-a-guest') }}" class="hover:text-[#F3C63F] transition">Apply to be a Guest</a></li>
                        <li><a href="{{ route('support.index') }}" class="hover:text-[#F3C63F] transition">Relationship Support & Therapy</a></li>
                        <li><a href="{{ route('home') }}" class="hover:text-white transition text-slate-300 font-semibold">&larr; Return to Lifextract Foundation</a></li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <h4 class="text-white font-bold text-xs uppercase tracking-wider">Listen & Follow</h4>
                    <div class="flex flex-wrap gap-3 pt-1">
                        <a href="https://www.youtube.com/@TALKSWITHMRDEE" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-red-600 hover:text-white flex items-center justify-center transition text-sm"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.instagram.com/talks_with_mrdee?stkn=bGtlMGdkMWJjcGh6" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-pink-600 hover:text-white flex items-center justify-center transition text-sm"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@talkswithmrdee?_r=1&_t=ZN-9A3kfMF36Zi" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-white hover:text-black flex items-center justify-center transition text-sm"><i class="bi bi-tiktok"></i></a>
                        <a href="https://x.com/TALKSWITHMRDEE" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center transition text-sm"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

            </div>

            <div class="pt-6 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
                <p>&copy; {{ date('Y') }} TalksWithMrDee. A multimedia initiative of Lifextract.</p>
                <div class="flex items-center gap-1.5">
                    <span>Platform by <a href="https://theimpactdev.com" target="_blank" class="text-slate-300 font-bold hover:text-[#F3C63F] transition">Impact Dev</a></span>
                </div>
            </div>

        </div>
    </footer>

</body>
</html>