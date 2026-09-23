<footer class="bg-slate-950 text-slate-400 pt-16 pb-12 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800">
            
            <!-- Col 1: Foundation Vision -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-600 flex items-center justify-center text-white font-bold text-lg">
                        LE
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg leading-tight">LIFEXTRACT</h3>
                        <p class="text-xs text-emerald-400 font-semibold tracking-wider uppercase">Humanitarian Foundation</p>
                    </div>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed pr-4">
                    Putting people before publicity. Empowering vulnerable elderly women, equipping youth with digital skills, providing free medical outreaches, and transforming grassroots communities in Lagos, Nigeria.
                </p>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="space-y-3">
                <h4 class="text-white font-bold text-sm tracking-wider uppercase">Our Work</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('programs.index') }}" class="hover:text-emerald-400 transition">Elderly Support</a></li>
                    <li><a href="{{ route('programs.index') }}" class="hover:text-emerald-400 transition">Youth Empowerment</a></li>
                    <li><a href="{{ route('programs.index') }}" class="hover:text-emerald-400 transition">Health Outreaches</a></li>
                    <li><a href="{{ route('impact') }}" class="hover:text-emerald-400 transition">Success Stories</a></li>
                </ul>
            </div>

            <!-- Col 3: TalksWithMrDee -->
            <div class="space-y-3">
                <h4 class="text-amber-400 font-bold text-sm tracking-wider uppercase">TalksWithMrDee</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('podcast.index') }}" class="hover:text-amber-300 transition">All Episodes</a></li>
                    <li><a href="{{ route('podcast.be-a-guest') }}" class="hover:text-amber-300 transition">Be a Guest</a></li>
                    <li><a href="{{ route('support.index') }}" class="hover:text-amber-300 transition">Support Pathways</a></li>
                </ul>
            </div>

            <!-- Col 4: Newsletter -->
            <div class="space-y-3">
                <h4 class="text-white font-bold text-sm tracking-wider uppercase">Stay Connected</h4>
                <p class="text-xs text-slate-400">Subscribe for foundation and podcast updates.</p>
                
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-2">
                    @csrf
                    <input type="email" name="email" required placeholder="Enter your email" class="w-full text-xs px-3.5 py-2.5 rounded-lg bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:border-emerald-500">
                    <button type="submit" class="w-full text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 py-2.5 rounded-lg transition">
                        Subscribe
                    </button>
                </form>
            </div>

        </div>

        <!-- Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
            <p>&copy; {{ date('Y') }} LifeExtract Humanitarian Foundation & TALKSWITHMRDEE. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="{{ route('donate') }}" class="text-emerald-400 font-semibold hover:underline">Donate</a>
                <a href="{{ route('volunteer.create') }}" class="hover:text-slate-400">Volunteer</a>
                <a href="{{ route('partner.create') }}" class="hover:text-slate-400">Partner With Us</a>
            </div>
        </div>
    </div>
</footer>