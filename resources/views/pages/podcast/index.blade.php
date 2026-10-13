<x-podcast-layout>
    <x-slot:title>TalksWithMrDee — Talk and Listen</x-slot:title>

    <!-- ========================================================= -->
    <!-- GLOBAL SUCCESS TOAST MESSAGE (Timed)                      -->
    <!-- ========================================================= -->
    @if(session('success'))
        <div id="toast-success" class="fixed top-24 right-4 sm:right-8 z-[100] transition-opacity duration-500 ease-in-out">
            <div class="bg-white border-l-4 border-[#F3C63F] p-4 rounded-xl shadow-2xl flex items-start gap-3 min-w-[300px]">
                <i class="bi bi-check-circle-fill text-[#F3C63F] text-xl"></i>
                <div class="flex-1">
                    <h4 class="text-sm font-black text-[#181A20]">Success</h4>
                    <p class="text-xs font-semibold text-slate-600 mt-0.5">{{ session('success') }}</p>
                </div>
                <button onclick="closeToast()" class="text-slate-400 hover:text-slate-600 transition">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
        <script>
            function closeToast() {
                const toast = document.getElementById('toast-success');
                if (toast) {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 500);
                }
            }
            // Auto-hide after 5 seconds
            setTimeout(closeToast, 5000);
        </script>
    @endif

    <!-- ========================================================= -->
    <!-- 1. PODCAST HERO & INTRO (With Faded Background)           -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12 bg-slate-50">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-20 relative overflow-hidden shadow-2xl border border-white/10 text-center min-h-[50vh] flex flex-col justify-center">
            
            <!-- Faded Background Image Overlay -->
            <div class="absolute inset-0 z-0 pointer-events-none">
                <img src="{{ asset('images/podcast-cover.jpg') }}" alt="Talks with Mr Dee Background" class="w-full h-full object-cover opacity-10 mix-blend-overlay">
                <div class="absolute inset-0 bg-gradient-to-t from-[#181A20] via-transparent to-transparent"></div>
            </div>

            <div class="relative z-10 max-w-3xl mx-auto space-y-6">
                <div class="w-20 h-20 mx-auto rounded-2xl bg-[#F3C63F] flex items-center justify-center text-[#181A20] text-4xl shadow-lg shadow-[#F3C63F]/20">
                    <i class="bi bi-mic-fill"></i>
                </div>
                
                <h1 class="text-4xl sm:text-6xl font-black tracking-tight uppercase font-mono text-[#F3C63F]">
                    “TALK AM AS E BE!”
                </h1>
                
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed drop-shadow-md">
                    <strong>Talk and Listen.</strong> Welcome to the premier platform for honest conversations about relationships, marriage, personal development, and navigating everyday life challenges. We provide a safe, respectful space to connect, learn, and grow.
                </p>

                <div class="pt-4 flex flex-wrap justify-center gap-3">
                    <a href="#episodes" class="px-8 py-4 rounded-full bg-[#F3C63F] text-[#181A20] font-bold text-sm hover:bg-[#eab92d] transition shadow-lg">
                        Listen Now
                    </a>
                    <a href="#matchmaking" class="px-8 py-4 rounded-full bg-white/10 text-white font-bold text-sm border border-white/20 hover:bg-white/20 backdrop-blur-sm transition">
                        Tell Us Your Type
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. HOST SECTION (With Featured Image & Socials)           -->
    <!-- ========================================================= -->
    <section id="host" class="py-16 bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-10">
                
                <!-- Circular Gold Frame (Mirrors the Layout Request) -->
                <div class="w-48 h-48 sm:w-64 sm:h-64 rounded-full overflow-hidden border-4 border-[#F3C63F] flex-shrink-0 shadow-xl relative group">
                    <img src="{{ asset('images/podcast-cover.jpg') }}" alt="Talks With Mr Dee" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                
                <div class="space-y-4 text-center md:text-left">
                    <span class="text-[#F3C63F] text-xs font-black tracking-widest uppercase">/ The Host /</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-[#181A20]">Meet Mr. Dee</h2>
                    <p class="text-slate-600 text-sm leading-relaxed max-w-xl">
                        A dedicated storyteller and relationship advocate, Mr. Dee bridges the gap between humanitarian empathy and everyday social realities. Through authentic dialogue, he unpacks the complexities of modern dating, family dynamics, and personal growth.
                    </p>
                    <div class="pt-2 flex gap-3 justify-center md:justify-start">
                        <a href="https://www.instagram.com/talks_with_mrdee?stkn=bGtlMGdkMWJjcGh6" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-[#F3C63F] hover:text-[#181A20] transition shadow-sm">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://x.com/TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-[#F3C63F] hover:text-[#181A20] transition shadow-sm">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 3. RECENT EPISODES (With Actual YT Link Prototypes)       -->
    <!-- ========================================================= -->
    <section id="episodes" class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            <div class="flex items-end justify-between border-b border-slate-200 pb-4">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-black text-[#181A20]">Latest Episodes</h2>
                    <p class="text-xs text-slate-500 mt-1">A selection of our most recent conversations.</p>
                </div>
                <form action="{{ route('podcast.index') }}#episodes" method="GET" class="hidden sm:flex">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search episodes..." class="pl-10 pr-4 py-2 text-xs rounded-full border border-slate-200 bg-white focus:outline-none focus:border-[#F3C63F]">
                        <i class="bi bi-search absolute left-4 top-2.5 text-slate-400 text-xs"></i>
                    </div>
                </form>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">
                
                @forelse($episodes ?? [] as $episode)
                <div class="bg-[#181A20] rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#F3C63F]/50 transition duration-300 group flex flex-col">
                    <div class="aspect-video bg-slate-800 relative">
                        <img src="{{ $episode->thumbnail ?? asset('images/ep-placeholder.jpg') }}" alt="Episode Thumbnail" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- Feasible YouTube Link Prototype -->
                            <a href="{{ $episode->youtube_link ?? 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                <i class="bi bi-play-fill text-xl sm:text-2xl ml-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-3 sm:p-5 space-y-2 flex-grow">
                        <span class="text-[9px] sm:text-[10px] font-bold text-[#F3C63F] tracking-wider uppercase">Ep. {{ $episode->episode_number }} • {{ \Carbon\Carbon::parse($episode->air_date)->format('M d, Y') }}</span>
                        <h3 class="text-sm sm:text-base font-bold text-white leading-tight line-clamp-2">{{ $episode->title }}</h3>
                        <p class="text-[10px] sm:text-xs text-slate-400 line-clamp-2 hidden sm:block">Guest: {{ $episode->guest_name }}</p>
                    </div>
                </div>
                @empty
                <!-- Fallback Hardcoded Episode -->
                <div class="bg-[#181A20] rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#F3C63F]/50 transition duration-300 group flex flex-col">
                    <div class="aspect-video bg-slate-800 relative">
                        <img src="{{ asset('images/ep1.jpg') }}" alt="Episode Thumbnail" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <!-- Feasible YouTube Link Prototype -->
                            <a href="https://www.youtube.com/@TALKSWITHMRDEE" target="_blank" rel="noopener noreferrer" class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-[#F3C63F] text-[#181A20] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                <i class="bi bi-play-fill text-xl sm:text-2xl ml-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-3 sm:p-5 space-y-2">
                        <span class="text-[9px] sm:text-[10px] font-bold text-[#F3C63F] tracking-wider uppercase">Ep. 42 • Oct 12, 2026</span>
                        <h3 class="text-sm sm:text-base font-bold text-white leading-tight line-clamp-2">Navigating Financial Conflict in Marriage</h3>
                        <p class="text-[10px] sm:text-xs text-slate-400 line-clamp-2 hidden sm:block">Guest: Dr. Sarah Okon.</p>
                    </div>
                </div>
                @endforelse

            </div>

            @if(isset($episodes) && $episodes->hasPages())
                <div class="pt-6 flex justify-center">
                    {{ $episodes->withQueryString()->links() }}
                </div>
            @endif
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 4. FEATURED GUESTS SECTION (With Gold Hover Effect)       -->
    <!-- ========================================================= -->
    <section id="guests" class="py-16 bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            <div class="text-center space-y-2 border-b border-slate-100 pb-6">
                <span class="text-[#F3C63F] text-xs font-black tracking-widest uppercase">/ The Voices /</span>
                <h2 class="text-2xl sm:text-3xl font-black text-[#181A20]">Featured Guests</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Guest Card (Gold Hover Border) -->
                <div class="bg-white border-2 border-slate-100 hover:border-[#F3C63F] p-6 rounded-[24px] flex flex-col items-center text-center space-y-4 shadow-sm hover:shadow-lg transition-all duration-300">
                    <img src="{{ asset('images/guest-speaker.jpg') }}" alt="Guest Speaker" class="w-24 h-24 rounded-full object-cover border-4 border-slate-50 shadow-md">
                    <div>
                        <h3 class="text-lg font-bold text-[#181A20]">Dr. Sarah Okon</h3>
                        <p class="text-[11px] text-[#F3C63F] font-bold uppercase tracking-wider">Licensed Therapist</p>
                    </div>
                    <p class="text-xs text-slate-600 line-clamp-3">
                        Specializes in cognitive behavioral therapy and couples mediation with over 10 years of clinical experience in Lagos.
                    </p>
                    <div class="pt-4 border-t border-slate-100 w-full flex justify-between items-center text-[10px] text-slate-500">
                        <span class="font-bold bg-slate-50 px-3 py-1 rounded-full">Featured in: Ep. 42</span>
                        <a href="https://www.instagram.com/talks_with_mrdee?stkn=bGtlMGdkMWJjcGh6" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-[#F3C63F] transition-colors">
                            <i class="bi bi-instagram text-lg"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 5. TELL US YOUR TYPE                                      -->
    <!-- ========================================================= -->
    <section id="matchmaking" class="py-16 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-[#181A20] p-8 sm:p-12 rounded-[36px] shadow-2xl relative overflow-hidden border border-slate-800">
                <div class="absolute top-0 right-0 p-8 opacity-5 pointer-events-none">
                    <i class="bi bi-hearts text-9xl text-white"></i>
                </div>
                
                <div class="relative z-10 space-y-8">
                    <div class="space-y-2 border-b border-white/10 pb-6">
                        <span class="text-[#F3C63F] text-xs font-black tracking-widest uppercase">Intentional Connections</span>
                        <h2 class="text-3xl sm:text-4xl font-black text-white">Tell Us Your Type</h2>
                        <p class="text-sm text-slate-400 max-w-2xl leading-relaxed">
                            Looking for a meaningful, intentional relationship? Submit your preferences confidentially. We review submissions to help foster connections between individuals with compatible values and relationship expectations.
                        </p>
                    </div>

                    <form action="{{ route('podcast.matchmaking.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Your Full Name</label>
                                <input type="text" name="name" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Email Address</label>
                                <input type="email" name="email" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Your Age</label>
                                <input type="number" name="age" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Preferred Age Range</label>
                                <input type="text" name="preferred_age" placeholder="e.g., 28 - 35" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-white uppercase tracking-wider">Describe Your Ideal Partner</label>
                            <textarea name="preferences" rows="4" placeholder="Values, traits, goals, and expectations..." required class="w-full text-sm p-4 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none"></textarea>
                        </div>

                        <div class="flex items-start gap-3">
                            <input type="checkbox" name="consent" required id="consent" class="mt-1 w-4 h-4 rounded border-white/20 bg-white/5 text-[#F3C63F] focus:ring-[#F3C63F]">
                            <label for="consent" class="text-xs text-slate-400 leading-relaxed">
                                I consent to TalksWithMrDee securely storing this information for potential connection opportunities. I understand this is not a matchmaking guarantee and is handled with strict confidentiality.
                            </label>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl font-bold text-[#181A20] bg-[#F3C63F] hover:bg-white transition flex justify-center items-center gap-2">
                            <span>Submit Preferences Privately</span> <i class="bi bi-lock-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 6. PARTICIPATE (Submit Story & Become Guest)              -->
    <!-- ========================================================= -->
    <section id="participate" class="py-16 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="text-center space-y-2">
                <h2 class="text-3xl font-black text-[#181A20]">Join the Conversation</h2>
                <p class="text-sm text-slate-500">Share your journey, expertise, or real-life story.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Submit Your Story -->
                <div class="bg-slate-50 border border-slate-200 p-8 rounded-[32px] space-y-6 shadow-sm">
                    <div class="border-b border-slate-200 pb-4">
                        <div class="w-12 h-12 rounded-xl bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xl mb-4 shadow">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#181A20]">Submit Your Story</h3>
                        <p class="text-xs text-slate-500 mt-1">Have a relationship dilemma or a profound life experience? Send it in.</p>
                    </div>
                    
                    <form action="{{ route('podcast.story.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="name" placeholder="Name or Alias" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                        <input type="email" name="email" placeholder="Email Address" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                        <input type="text" name="topic" placeholder="Story Topic / Subject" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                        <textarea name="story" rows="4" placeholder="Type your story or question here..." required class="w-full text-sm p-4 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none"></textarea>
                        
                        <div class="flex items-center gap-2">
                            <input type="checkbox" name="anonymous" id="anonymous" class="rounded border-slate-300 bg-white text-[#181A20]">
                            <label for="anonymous" class="text-xs text-slate-600">Keep my identity anonymous on air</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" name="consent_story" required id="consent_story" class="rounded border-slate-300 bg-white text-[#181A20]">
                            <label for="consent_story" class="text-[10px] text-slate-500">I consent to this story being discussed publicly.</label>
                        </div>
                        
                        <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-white bg-[#181A20] hover:bg-black transition shadow">Submit Story</button>
                    </form>
                </div>

                <!-- Become a Guest -->
                <div class="bg-slate-50 border border-slate-200 p-8 rounded-[32px] space-y-6 shadow-sm">
                    <div class="border-b border-slate-200 pb-4">
                        <div class="w-12 h-12 rounded-xl bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xl mb-4 shadow">
                            <i class="bi bi-person-video3"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#181A20]">Apply to be a Guest</h3>
                        <p class="text-xs text-slate-500 mt-1">Are you an expert, professional, or someone with an inspiring success story?</p>
                    </div>
                    
                    <form action="{{ route('podcast.guest.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" name="name" placeholder="Full Name" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                            <input type="text" name="profession" placeholder="Profession / Title" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="email" name="email" placeholder="Email Contact" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                            <input type="text" name="socials" placeholder="Social Media Handles" class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                        </div>
                        <input type="text" name="expertise" placeholder="Area of Expertise / Topic" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none">
                        <textarea name="bio" rows="4" placeholder="Brief biography and reason for wanting to appear..." required class="w-full text-sm p-4 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none"></textarea>
                        
                        <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] transition shadow">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 7. NEWSLETTER & CONTACT                                   -->
    <!-- ========================================================= -->
    <section id="contact" class="py-16 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <!-- Newsletter Ribbon -->
            <div class="bg-[#F3C63F] rounded-[24px] p-8 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-md">
                <div class="space-y-1 text-center md:text-left max-w-md">
                    <h3 class="text-xl sm:text-2xl font-black text-[#181A20]">Don't Miss an Episode</h3>
                    <p class="text-xs text-[#181A20]/80 font-medium">Subscribe to our newsletter for podcast updates and guest announcements.</p>
                </div>
                <form action="{{ route('podcast.newsletter.store') }}" method="POST" class="w-full md:w-auto flex-1 max-w-sm flex gap-2">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email" required class="w-full text-sm px-4 py-3 rounded-xl bg-white border border-white/50 text-[#181A20] focus:outline-none">
                    <button type="submit" class="px-6 py-3 rounded-xl font-bold text-white bg-[#181A20] hover:bg-black transition">Subscribe</button>
                </form>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact The Podcast -->
                <div class="bg-white border border-slate-200 p-8 rounded-[32px] space-y-6 shadow-sm">
                    <div>
                        <h3 class="text-xl font-bold text-[#181A20]">Contact The Podcast</h3>
                        <p class="text-xs text-slate-500 mt-1">For general inquiries, collaborations, or feedback.</p>
                    </div>
                    <form action="{{ route('podcast.contact.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="name" placeholder="Name" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                        <input type="email" name="email" placeholder="Email" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                        <textarea name="message" rows="3" placeholder="Your message..." required class="w-full text-sm p-4 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none"></textarea>
                        <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-slate-700 bg-slate-100 hover:bg-slate-200 border border-slate-200 transition">Send Message</button>
                    </form>
                </div>

                <!-- Partner With Us -->
                <div class="bg-white border border-slate-200 p-8 rounded-[32px] space-y-6 shadow-sm">
                    <div>
                        <h3 class="text-xl font-bold text-[#181A20]">Partner With Us</h3>
                        <p class="text-xs text-slate-500 mt-1">Inquire about episode sponsorship, brand partnerships, or media collaborations.</p>
                    </div>
                    <form action="{{ route('podcast.partner.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" name="company" placeholder="Company/Brand" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="email" name="email" placeholder="Corporate Email" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                        </div>
                        <select name="type" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                            <option value="">Select Partnership Type</option>
                            <option value="sponsorship">Episode Sponsorship</option>
                            <option value="brand">Brand Partnership</option>
                            <option value="corporate">Corporate Collaboration</option>
                        </select>
                        <textarea name="details" rows="2" placeholder="Brief details of your proposal..." required class="w-full text-sm p-4 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none"></textarea>
                        <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-white bg-[#181A20] hover:bg-black transition">Submit Proposal</button>
                    </form>
                </div>
            </div>
            
        </div>
    </section>
</x-podcast-layout>