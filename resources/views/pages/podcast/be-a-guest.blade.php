<x-layout>
    <x-slot:title>Be a Guest / Share Your Story — TALKSWITHMRDEE Podcast</x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Carenest Dark Rounded Card)              -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl border border-white/10 text-center">
            
            <div class="max-w-3xl mx-auto space-y-5">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs font-bold text-[#F3C63F] uppercase tracking-widest">
                    <i class="bi bi-mic-fill"></i>
                    <span>/ Pitch Your Story /</span>
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Share Your Journey on TALKSWITHMRDEE
                </h1>

                <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed font-normal">
                    Whether you are a certified therapist, legal counselor, or an everyday individual with an honest story of heartbreak, endurance, and transformation — your voice can help heal someone listening.
                </p>

                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center gap-2.5 sm:gap-6 text-xs text-slate-400">
                    <span class="flex items-center gap-1.5"><i class="bi bi-shield-check text-emerald-400"></i> Confidential Vetting</span>
                    <span class="flex items-center gap-1.5"><i class="bi bi-camera-video text-[#F3C63F]"></i> In-Studio / Virtual</span>
                    <span class="flex items-center gap-1.5"><i class="bi bi-globe text-blue-400"></i> Global Audience</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. GUEST PITCH FORM (Carenest Style)                       -->
    <!-- ========================================================= -->
    <section class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            
            <div class="bg-white rounded-3xl sm:rounded-[36px] p-5 sm:p-12 border border-slate-200/80 shadow-sm space-y-8">
                
                <div class="border-b border-slate-100 pb-5">
                    <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">Application Form</span>
                    <h2 class="text-2xl font-extrabold text-[#181A20] tracking-tight">Guest Speaker & Storyteller Submission</h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">Fill out the details below. Our production team reviews all submissions discreetly.</p>
                </div>

                @if(session('success'))
                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center gap-3">
                        <i class="bi bi-check-circle-fill text-emerald-600 text-lg"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('podcast.guest.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-person text-slate-400"></i> Full Name *
                            </label>
                            <input type="text" name="full_name" required placeholder="e.g. Dr. Jane Okonkwo" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-envelope text-slate-400"></i> Email Address *
                            </label>
                            <input type="email" name="email" required placeholder="jane@example.com" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-whatsapp text-slate-400"></i> Phone / WhatsApp *
                            </label>
                            <input type="tel" name="phone" required placeholder="+234 800 000 0000" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-briefcase text-slate-400"></i> Profession / Role *
                            </label>
                            <input type="text" name="profession" placeholder="e.g. Family Counselor, Divorce Survivor" required class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-chat-left-quote text-slate-400"></i> Proposed Discussion Topic *
                        </label>
                        <input type="text" name="topic" placeholder="e.g. Rebuilding Trust After Infidelity / Coping With Financial Stress in Marriage" required class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-card-text text-slate-400"></i> Summary of Your Story & Key Insights *
                        </label>
                        <textarea name="details" rows="5" required placeholder="Tell us about your background, what lessons listeners will gain from your episode, and any relevant social handles or website links..." class="w-full text-sm p-4 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="inline-flex items-center justify-between w-full text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] py-4 px-6 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Submit Guest Application</span>
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