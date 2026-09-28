<x-layout>
    <x-slot:title>Confidential Support Pathways — TALKSWITHMRDEE & Lifextract</x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Carenest Dark Rounded Card)              -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-16 relative overflow-hidden shadow-2xl border border-white/10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                
                <!-- Left: Title & Mission -->
                <div class="lg:col-span-8 space-y-6 text-left">
                    <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                        <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                            / Confidential Support Pathways /
                        </span>
                        <span class="inline-flex items-center gap-1.5 text-xs font-black text-[#F3C63F] font-mono tracking-wider bg-black/40 px-3 py-1 rounded-full border border-[#F3C63F]/30">
                            <i class="bi bi-shield-lock-fill"></i> 100% Discreet & Protected
                        </span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                        Compassionate Guidance & Professional Care
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl font-normal">
                        You do not have to carry emotional distress, marital heartbreak, or relational confusion alone. <strong>TALKSWITHMRDEE</strong> connects individuals and couples to licensed psychologists, family therapists, and dispute mediators.
                    </p>
                    
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                        <a href="#support-intake-form" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-7 py-4 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Request Confidential Guidance</span>
                            <span class="w-6 h-6 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                <i class="bi bi-arrow-down"></i>
                            </span>
                        </a>

                        <a href="{{ route('podcast.index') }}" class="inline-flex items-center justify-center gap-2 text-xs sm:text-sm font-bold text-white hover:text-[#F3C63F] px-6 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/15 transition text-center">
                            <i class="bi bi-mic text-[#F3C63F]"></i>
                            <span>Listen to Discussions</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Privacy Guarantee Badge -->
                <div class="lg:col-span-4 flex justify-center lg:justify-end">
                    <div class="relative p-6 sm:p-8 rounded-3xl bg-white/5 border border-white/10 shadow-2xl backdrop-blur-md max-w-xs w-full text-center space-y-4">
                        <div class="w-14 h-14 mx-auto rounded-2xl bg-[#F3C63F]/10 border border-[#F3C63F]/30 flex items-center justify-center text-[#F3C63F] text-2xl">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <div>
                            <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Strict Privacy</span>
                            <span class="text-xs text-slate-400 mt-1 block">Your identity, contact details, and personal story remain strictly protected.</span>
                        </div>
                        <div class="pt-2 border-t border-white/10">
                            <span class="text-[11px] font-bold text-[#F3C63F] uppercase tracking-wider block">
                                <i class="bi bi-patch-check-fill mr-1 text-emerald-400"></i> Certified Counselors
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Bar -->
            <div class="mt-12 pt-8 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Strict</span>
                    <span class="text-xs font-medium text-slate-400">Confidentiality Guarantee</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-[#F3C63F] block tracking-tight">Licensed</span>
                    <span class="text-xs font-medium text-slate-400">Therapists & Lawyers</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Discreet</span>
                    <span class="text-xs font-medium text-slate-400">Pseudonyms Welcomed</span>
                </div>
                <div class="space-y-1">
                    <span class="text-2xl sm:text-3xl font-black text-white block tracking-tight">Zero</span>
                    <span class="text-xs font-medium text-slate-400">Public Disclosure</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. SUPPORT REQUEST INTAKE FORM                            -->
    <!-- ========================================================= -->
    <section id="support-intake-form" class="py-12 bg-slate-50 min-h-screen scroll-mt-28">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            
            <div class="bg-white rounded-3xl sm:rounded-[36px] p-5 sm:p-12 border border-slate-200/80 shadow-sm space-y-8">
                
                <div class="border-b border-slate-100 pb-5">
                    <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">Intake Submission</span>
                    <h2 class="text-2xl font-extrabold text-[#181A20] tracking-tight">Select Your Support Pathway</h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Choose the category that best matches your circumstances. All details are kept in strict confidence.
                    </p>
                </div>

                @if(session('success'))
                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center gap-3">
                        <i class="bi bi-check-circle-fill text-emerald-600 text-lg"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('support.store') }}" method="POST" class="space-y-8">
                    @csrf

                    <!-- Support Category Radio Cards -->
                    <div class="space-y-3">
                        <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider block">
                            Support Category *
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            <!-- Pathway 1: Matchmaking -->
                            <label class="relative flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-[#F3C63F] hover:bg-slate-50/50 cursor-pointer transition has-[:checked]:border-[#181A20] has-[:checked]:bg-slate-50">
                                <input type="radio" name="type" value="dating_support" checked class="mt-1 text-[#181A20] focus:ring-[#F3C63F]">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-heart-fill text-rose-500"></i>
                                        <strong class="text-xs font-bold text-[#181A20]">Intentional Matchmaking</strong>
                                    </div>
                                    <p class="text-[11px] text-slate-500 leading-snug">Purpose-driven matchmaking for individuals seeking a values-aligned life partner.</p>
                                </div>
                            </label>

                            <!-- Pathway 2: Marriage & Conflict Counseling -->
                            <label class="relative flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-[#F3C63F] hover:bg-slate-50/50 cursor-pointer transition has-[:checked]:border-[#181A20] has-[:checked]:bg-slate-50">
                                <input type="radio" name="type" value="therapy_support" class="mt-1 text-[#181A20] focus:ring-[#F3C63F]">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-people-fill text-amber-500"></i>
                                        <strong class="text-xs font-bold text-[#181A20]">Marriage & Conflict Therapy</strong>
                                    </div>
                                    <p class="text-[11px] text-slate-500 leading-snug">Resolving communication barriers, infidelity recovery, and rebuilding intimacy.</p>
                                </div>
                            </label>

                            <!-- Pathway 3: Crisis & Exiting -->
                            <label class="relative flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-[#F3C63F] hover:bg-slate-50/50 cursor-pointer transition has-[:checked]:border-[#181A20] has-[:checked]:bg-slate-50">
                                <input type="radio" name="type" value="crisis_support" class="mt-1 text-[#181A20] focus:ring-[#F3C63F]">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-shield-shaded text-purple-500"></i>
                                        <strong class="text-xs font-bold text-[#181A20]">Exiting Unhealthy Relationships</strong>
                                    </div>
                                    <p class="text-[11px] text-slate-500 leading-snug">Safe, confidential exit guidance and emotional healing from toxic dynamics.</p>
                                </div>
                            </label>

                            <!-- Pathway 4: Legal Mediation -->
                            <label class="relative flex items-start gap-4 p-5 rounded-2xl border border-slate-200 hover:border-[#F3C63F] hover:bg-slate-50/50 cursor-pointer transition has-[:checked]:border-[#181A20] has-[:checked]:bg-slate-50">
                                <input type="radio" name="type" value="legal_support" class="mt-1 text-[#181A20] focus:ring-[#F3C63F]">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2">
                                        <i class="bi bi-file-earmark-ruled text-blue-500"></i>
                                        <strong class="text-xs font-bold text-[#181A20]">Peaceful Legal Mediation</strong>
                                    </div>
                                    <p class="text-[11px] text-slate-500 leading-snug">Discreet consultation with certified family lawyers and dispute mediators.</p>
                                </div>
                            </label>

                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-person text-slate-400"></i> Full Name or Preferred Pseudonym *
                            </label>
                            <input type="text" name="full_name" required placeholder="You may use a pseudonym if preferred" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-envelope text-slate-400"></i> Email Address *
                            </label>
                            <input type="email" name="email" required placeholder="contact@example.com" class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-whatsapp text-slate-400"></i> WhatsApp / Phone (Optional for instant messaging)
                        </label>
                        <input type="tel" name="phone" placeholder="+234..." class="w-full text-sm px-4 py-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition">
                    </div>

                    <!-- Situation Summary -->
                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                            <i class="bi bi-chat-left-dots text-slate-400"></i> Brief Overview of Your Situation *
                        </label>
                        <textarea name="details" rows="5" required placeholder="Please describe what you are going through, how long it has persisted, and what specific form of guidance or referral you need..." class="w-full text-sm p-4 rounded-2xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#F3C63F] focus:bg-white transition"></textarea>
                    </div>

                    <!-- Privacy Guarantee Note -->
                    <div class="p-4 rounded-2xl bg-[#181A20] text-slate-300 text-xs flex items-center gap-3 border border-white/10">
                        <span class="w-8 h-8 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-[#F3C63F] text-sm flex-shrink-0">
                            <i class="bi bi-shield-check"></i>
                        </span>
                        <span>Your submission is encrypted and strictly accessible only to licensed counselors. Your name and details are never broadcasted or shared.</span>
                    </div>

                    <!-- Action Button -->
                    <div class="pt-2">
                        <button type="submit" class="inline-flex items-center justify-between w-full text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] py-4 px-6 rounded-full shadow-lg transition-all duration-200 group text-center">
                            <span>Submit Confidential Request</span>
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