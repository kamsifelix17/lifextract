<x-layout>
    <x-slot:title>Confidential Support Pathways — TALKSWITHMRDEE & LifeExtract</x-slot:title>

    <section class="bg-gradient-to-b from-slate-950 via-slate-900 to-rose-950 text-white py-16 text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-4">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-rose-400 bg-rose-900/60 border border-rose-500/30 px-4 py-1.5 rounded-full mb-4">
                100% Confidential Professional Support
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold font-serif-heading">
                How Can We Support You?
            </h1>
            <p class="text-sm sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
                TALKSWITHMRDEE connects you to certified therapists, counselors, and legal professionals. Your information is treated with strict confidentiality.
            </p>
        </div>
    </section>

    <!-- Support Request Form Section -->
    <section class="py-16 bg-slate-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200 shadow-xl space-y-8">
                
                <div class="border-b border-slate-100 pb-4">
                    <h3 class="text-xl font-bold text-slate-900 font-serif-heading">
                        Confidential Support Intake Form
                    </h3>
                    <p class="text-xs text-slate-500 mt-1">
                        Select the pathway that matches your current situation.
                    </p>
                </div>

                <form action="{{ route('support.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- 1. Select the Pathway -->
                    <div class="space-y-3">
                        <label class="text-xs font-bold text-slate-800 uppercase tracking-wider block">
                            Select Your Support Category *
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            
                            <label class="flex items-start gap-3 p-4 rounded-2xl border border-slate-200 hover:border-emerald-500 hover:bg-emerald-50/50 cursor-pointer transition">
                                <input type="radio" name="type" value="dating_support" checked class="mt-1 text-emerald-600 focus:ring-emerald-500">
                                <div>
                                    <strong class="text-xs font-bold text-slate-900 block">❤️ Intentional Matchmaking</strong>
                                    <span class="text-[11px] text-slate-500">Looking for a purpose-driven life partner.</span>
                                </div>
                            </label>

                            <label class="flex items-start gap-3 p-4 rounded-2xl border border-slate-200 hover:border-purple-500 hover:bg-purple-50/50 cursor-pointer transition">
                                <input type="radio" name="type" value="therapy_support" class="mt-1 text-purple-600 focus:ring-purple-500">
                                <div>
                                    <strong class="text-xs font-bold text-slate-900 block">🤝 Marriage & Conflict Counseling</strong>
                                    <span class="text-[11px] text-slate-500">Resolving communication or trust issues.</span>
                                </div>
                            </label>

                            <label class="flex items-start gap-3 p-4 rounded-2xl border border-slate-200 hover:border-rose-500 hover:bg-rose-50/50 cursor-pointer transition">
                                <input type="radio" name="type" value="crisis_support" class="mt-1 text-rose-600 focus:ring-rose-500">
                                <div>
                                    <strong class="text-xs font-bold text-slate-900 block">🕊️ Exiting an Unhealthy Relationship</strong>
                                    <span class="text-[11px] text-slate-500">Guidance for safe, responsible next steps.</span>
                                </div>
                            </label>

                            <label class="flex items-start gap-3 p-4 rounded-2xl border border-slate-200 hover:border-blue-500 hover:bg-blue-50/50 cursor-pointer transition">
                                <input type="radio" name="type" value="legal_support" class="mt-1 text-blue-600 focus:ring-blue-500">
                                <div>
                                    <strong class="text-xs font-bold text-slate-900 block">⚖️ Peaceful Legal Separation / Divorce</strong>
                                    <span class="text-[11px] text-slate-500">Consultation with qualified family lawyers.</span>
                                </div>
                            </label>

                        </div>
                    </div>

                    <!-- 2. Contact Details -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Your Full Name / Pseudonym *</label>
                            <input type="text" name="full_name" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-rose-500">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Email Address *</label>
                            <input type="email" name="email" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-rose-500">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Phone / WhatsApp (Optional)</label>
                        <input type="text" name="phone" placeholder="+234..." class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-rose-500">
                    </div>

                    <!-- 3. Message / Story -->
                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Brief Overview of Your Situation *</label>
                        <textarea name="details" rows="5" required placeholder="Please describe what you are experiencing and what specific assistance or guidance you are seeking..." class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-rose-500"></textarea>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 text-slate-600 text-xs flex items-center gap-2">
                        <span>🔒</span>
                        <span>We respect your privacy. Conversations and requests are never shared publicly without consent.</span>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-bold text-sm shadow-md hover:shadow-lg transition">
                        Submit Confidential Request &rarr;
                    </button>
                </form>

            </div>
        </div>
    </section>
</x-layout>