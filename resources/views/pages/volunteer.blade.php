<x-layout>
    <x-slot:title>Volunteer With Us — Lifextract Humanitarian Foundation</x-slot:title>

    <!-- ========================================================= -->
    <!-- 1. HERO SECTION (Dark Carenest Card)                      -->
    <!-- ========================================================= -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12 bg-white">
        <div class="bg-[#181A20] text-white rounded-3xl sm:rounded-[40px] p-6 sm:p-14 lg:p-20 relative overflow-hidden shadow-2xl border border-white/10 flex flex-col md:flex-row items-center justify-between gap-10">
            
            <div class="max-w-2xl space-y-6 text-center md:text-left z-10">
                <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-widest bg-white/5 px-4 py-1.5 rounded-full border border-white/10">
                    / Join Our Force /
                </span>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15]">
                    Give Time. <br><span class="text-[#F3C63F]">Change Lives.</span>
                </h1>
                
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                    Volunteers are the heartbeat of Lifextract. Whether you are a medical professional, a creative, or just someone with a passion to help, your skills can bring immediate relief and long-term hope to vulnerable communities across Lagos.
                </p>

                <div class="pt-2 flex justify-center md:justify-start">
                    <a href="#volunteer-form" class="inline-flex items-center justify-center gap-2.5 text-xs sm:text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] px-8 py-4 rounded-full shadow-lg transition-all duration-200 group">
                        <span>Apply to Volunteer</span>
                        <i class="bi bi-arrow-down group-hover:translate-y-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Visual Graphic -->
            <div class="hidden md:block relative z-10 w-full max-w-sm">
                <div class="aspect-square rounded-full border border-white/10 bg-white/5 flex items-center justify-center relative p-8">
                    <div class="absolute inset-0 bg-[#F3C63F]/10 rounded-full animate-pulse"></div>
                    <i class="bi bi-people-fill text-8xl text-[#F3C63F] opacity-90 drop-shadow-2xl"></i>
                    
                    <!-- Floating Stat Badges -->
                    <div class="absolute -top-4 -left-4 bg-white text-[#181A20] px-4 py-2 rounded-2xl shadow-xl border border-slate-200 text-xs font-bold flex items-center gap-2 transform -rotate-6">
                        <i class="bi bi-heart-fill text-rose-500"></i> Medical Missions
                    </div>
                    <div class="absolute -bottom-4 -right-4 bg-white text-[#181A20] px-4 py-2 rounded-2xl shadow-xl border border-slate-200 text-xs font-bold flex items-center gap-2 transform rotate-6">
                        <i class="bi bi-box2-heart-fill text-emerald-500"></i> Food Distribution
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 2. VOLUNTEER CATEGORIES                                   -->
    <!-- ========================================================= -->
    <section class="py-16 bg-slate-50 border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center max-w-2xl mx-auto space-y-2">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#181A20] tracking-tight">Where We Need Help</h2>
                <p class="text-xs sm:text-sm text-slate-500">
                    We match your unique skills and availability with our ongoing community interventions.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <div class="bg-white p-6 rounded-[24px] border border-slate-200 shadow-sm hover:shadow-lg hover:border-[#F3C63F]/50 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-500 flex items-center justify-center text-xl mb-4">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#181A20]">Medical & Health</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Doctors, nurses, and pharmacists needed for our quarterly grassroots health checks and free dispensaries.</p>
                </div>

                <!-- Category 2 -->
                <div class="bg-white p-6 rounded-[24px] border border-slate-200 shadow-sm hover:shadow-lg hover:border-[#F3C63F]/50 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center text-xl mb-4">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#181A20]">Logistics & Field</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Help coordinate food drives, pack relief materials, and manage crowd control during community outreach events.</p>
                </div>

                <!-- Category 3 -->
                <div class="bg-white p-6 rounded-[24px] border border-slate-200 shadow-sm hover:shadow-lg hover:border-[#F3C63F]/50 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center text-xl mb-4">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#181A20]">Education & Skills</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Teachers, tech mentors, and vocational experts to guide youths in our empowerment and scholarship programs.</p>
                </div>

                <!-- Category 4 -->
                <div class="bg-white p-6 rounded-[24px] border border-slate-200 shadow-sm hover:shadow-lg hover:border-[#F3C63F]/50 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center text-xl mb-4">
                        <i class="bi bi-camera-fill"></i>
                    </div>
                    <h3 class="text-base font-bold text-[#181A20]">Media & Admin</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed">Photographers, writers, and administrative hands to help document our impact and manage daily operations.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================= -->
    <!-- 3. VOLUNTEER APPLICATION FORM                             -->
    <!-- ========================================================= -->
    <section id="volunteer-form" class="py-16 bg-white scroll-mt-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-slate-50 border border-slate-200 p-6 sm:p-12 rounded-[36px] shadow-sm">
                <div class="border-b border-slate-200 pb-6 mb-8 text-center sm:text-left">
                    <span class="text-[#F3C63F] text-xs font-black tracking-widest uppercase block mb-1">Make An Impact</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-[#181A20]">Volunteer Application</h2>
                    <p class="text-xs text-slate-500 mt-2">
                        Fill out the form below to join our database. We will contact you when an outreach matches your skillset.
                    </p>
                </div>

                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-bold flex items-start gap-3">
                        <i class="bi bi-check-circle-fill text-emerald-600 text-lg"></i>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('volunteer.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Full Name *</label>
                            <input type="text" name="name" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none shadow-sm">
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Email Address *</label>
                            <input type="email" name="email" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none shadow-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Phone Number (WhatsApp) *</label>
                            <input type="tel" name="phone" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none shadow-sm">
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">City / Location in Lagos *</label>
                            <input type="text" name="location" required placeholder="e.g. Ikeja, Surulere" class="w-full text-sm px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none shadow-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Area of Interest *</label>
                            <select name="interest" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 focus:border-[#F3C63F] focus:outline-none shadow-sm appearance-none">
                                <option value="">Select a category</option>
                                <option value="Medical">Medical / Healthcare</option>
                                <option value="Logistics">Logistics / Field Work</option>
                                <option value="Education">Education / Mentorship</option>
                                <option value="Media">Media / Photography</option>
                                <option value="Admin">Admin / Office Support</option>
                                <option value="General">General Support (Anywhere needed)</option>
                            </select>
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Availability *</label>
                            <select name="availability" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white border border-slate-200 text-slate-700 focus:border-[#F3C63F] focus:outline-none shadow-sm appearance-none">
                                <option value="">Select availability</option>
                                <option value="Weekdays">Weekdays</option>
                                <option value="Weekends">Weekends Only</option>
                                <option value="Flexible">Flexible / Anytime</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-700 uppercase tracking-wider block">Why do you want to volunteer with us?</label>
                        <textarea name="reason" rows="4" placeholder="Briefly tell us about yourself and your skills..." required class="w-full text-sm p-4 rounded-xl bg-white border border-slate-200 text-slate-900 focus:border-[#F3C63F] focus:outline-none shadow-sm"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] transition flex justify-center items-center gap-2 shadow-lg">
                        <span>Submit Application</span> <i class="bi bi-send-fill"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-layout>