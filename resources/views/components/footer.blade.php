<footer class="bg-[#121418] text-slate-400 pt-16 pb-12 text-xs border-t border-white/5 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Top Row: Clean Headline & Action CTA (Exact Carenest Header) -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 pb-12 border-b border-white/10">
            <div class="space-y-1.5 max-w-xl">
                <span class="text-xs font-black text-[#F3C63F] uppercase tracking-widest block font-mono">LISTEN • COMMENT • SHARE</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                    Help Vulnerable Communities Build A Brighter Future
                </h3>
                <p class="text-xs text-slate-400">
                    Your contribution directly provides food packs, healthcare checks, and tech scholarships for grassroots families in Ikeja and across Lagos State.
                </p>
            </div>
            <a href="{{ route('donate') }}" class="inline-flex items-center gap-2 text-xs font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-6 py-3.5 rounded-full shadow-lg transition-all duration-200 group flex-shrink-0">
                <span>Donate Now</span>
                <span class="w-5 h-5 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-[10px] font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                    <i class="bi bi-arrow-up-right"></i>
                </span>
            </a>
        </div>

        <!-- Middle Row: Footer Links Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-white/10">
            
            <!-- Col 1: Brand & Contact Info -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/lifextract-brand.jpg') }}" alt="Lifextract Foundation" class="h-14 w-auto rounded-xl object-contain border border-white/10">
                </div>
                <p class="text-slate-400 leading-relaxed pr-4 text-xs">
                    Putting people before publicity. Empowering vulnerable elderly roadside traders, equipping youth with digital skills, providing free medical outreaches, and hosting raw, honest conversations through TALKSWITHMRDEE.
                </p>
                
                <!-- Business Contact Info -->
                <div class="space-y-1.5 text-[11px] text-slate-300 pt-1">
                    <p class="flex items-center gap-2"><i class="bi bi-geo-alt-fill text-[#F3C63F]"></i> Ikeja, Lagos State, Nigeria</p>
                    <p class="flex items-center gap-2"><i class="bi bi-telephone-fill text-[#F3C63F]"></i> <a href="tel:+2349079424733" class="hover:text-white transition">+234 907 942 4733</a></p>
                    <p class="flex items-center gap-2"><i class="bi bi-envelope-fill text-[#F3C63F]"></i> <a href="mailto:lifeextract8@gmail.com" class="hover:text-white transition">lifeextract8@gmail.com</a></p>
                </div>

                <!-- Foundation Social Media Handles -->
                <div class="flex items-center gap-3 pt-2">
                    <a href="https://x.com/lifeXtract" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center transition" title="X (Twitter)">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="https://www.instagram.com/lifextract?stkn=MWtwNHd2OHJrcmZkeg==" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center transition" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/share/1KLtEaGmnZ/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center transition" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.youtube.com/@Lifextract" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center transition" title="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://wa.me/2349079424733" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-white/5 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="space-y-3">
                <h4 class="text-white font-bold text-xs uppercase tracking-wider">Quick Links</h4>
                <ul class="space-y-2 text-slate-400">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                    <li><a href="{{ route('impact') }}" class="hover:text-white transition">Our Impact</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us</a></li>
                    <li><a href="{{ route('donate') }}" class="hover:text-white transition">Donate Now</a></li>
                </ul>
            </div>

            <!-- Col 3: Programs -->
            <div class="space-y-3">
                <h4 class="text-white font-bold text-xs uppercase tracking-wider">Our Programs</h4>
                <ul class="space-y-2 text-slate-400">
                    <li><a href="{{ route('programs.show', 'support-elderly-women-traders') }}" class="hover:text-white transition">Elderly Support</a></li>
                    <li><a href="{{ route('programs.show', 'youth-skills-acquisition') }}" class="hover:text-white transition">Youth Bootcamps</a></li>
                    <li><a href="{{ route('programs.show', 'community-health-outreach') }}" class="hover:text-white transition">Healthcare Outreaches</a></li>
                    <li><a href="{{ route('programs.index') }}#browse-programs" class="hover:text-white transition">All Active Programs</a></li>
                </ul>
            </div>

            <!-- Col 4: TalksWithMrDee -->
            <div class="space-y-3">
                <div class="space-y-1">
                    <span class="text-[10px] font-black text-[#F3C63F] font-mono block">“TALK AM AS E BE!”</span>
                    <h4 class="text-[#F3C63F] font-bold text-xs uppercase tracking-wider">TALKSWITHMRDEE</h4>
                </div>
                <ul class="space-y-2 text-slate-400">
                    <li><a href="{{ route('podcast.index') }}" class="hover:text-[#F3C63F] transition">Podcast Episodes</a></li>
                    <li><a href="{{ route('podcast.be-a-guest') }}" class="hover:text-[#F3C63F] transition">Be a Guest</a></li>
                    <li><a href="{{ route('support.index') }}" class="hover:text-[#F3C63F] transition">Relationship Support</a></li>
                    <li><a href="mailto:talkswithmrdee@gmail.com" class="hover:text-[#F3C63F] transition">talkswithmrdee@gmail.com</a></li>
                </ul>

                <!-- Podcast Social Media Channels -->
                <div class="pt-2 border-t border-white/10">
                    <span class="text-[10px] text-slate-400 block mb-2 font-medium">Follow The Podcast:</span>
                    <div class="flex items-center gap-2">
                        <a href="https://www.youtube.com/@TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full bg-white/5 hover:bg-red-600 hover:text-white flex items-center justify-center transition text-xs" title="TalksWithMrDee YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com/talks_with_mrdee?stkn=bGtlMGdkMWJjcGh6" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full bg-white/5 hover:bg-pink-600 hover:text-white flex items-center justify-center transition text-xs" title="TalksWithMrDee Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@talkswithmrdee?_r=1&_t=ZN-9A3kfMF36Zi" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full bg-white/5 hover:bg-black hover:text-white flex items-center justify-center transition text-xs" title="TalksWithMrDee TikTok">
                            <i class="bi bi-tiktok"></i>
                        </a>
                        <a href="https://x.com/TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-7 h-7 rounded-full bg-white/5 hover:bg-[#F3C63F] hover:text-[#181A20] flex items-center justify-center transition text-xs" title="TalksWithMrDee X">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Row: Huge Brand Name & Copyright (Exact Carenest Footer) -->
        <div class="pt-4 flex flex-col sm:flex-row justify-between items-center text-slate-500 gap-4">
            <span class="text-3xl sm:text-4xl font-black text-white tracking-tight">Lifextract</span>
            <p>&copy; {{ date('Y') }} Lifextract Humanitarian Foundation & TALKSWITHMRDEE. All rights reserved.</p>
        </div>

    </div>
</footer>