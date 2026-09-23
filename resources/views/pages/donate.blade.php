<x-layout>
    <x-slot:title>Donate & Partner With Us — LifeExtract Humanitarian Foundation</x-slot:title>

    <!-- Header Banner -->
    <section class="bg-gradient-to-b from-slate-950 to-emerald-950 text-white py-16 text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-4">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 bg-emerald-900/60 border border-emerald-500/30 px-4 py-1.5 rounded-full">
                Support Our Mission
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold font-serif-heading">
                Give Hope. Transform Lives.
            </h1>
            <p class="text-sm sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Your generosity provides direct cash grants to elderly women, funds emergency medical treatments, and provides youth tech scholarships in Lagos, Nigeria.
            </p>
        </div>
    </section>

    <!-- Ways to Give Section -->
    <section class="py-16 bg-slate-50 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                
                <!-- Card 1: Official Bank Transfer (Lagos Nigeria) -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-md space-y-6">
                    <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl font-bold">
                            🏦
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 font-serif-heading">Direct Bank Transfer</h3>
                            <p class="text-xs text-slate-500">Official Foundation Accounts (Naira & USD)</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        
                        <!-- Account Details Box -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 space-y-2">
                            <span class="text-[10px] font-extrabold uppercase tracking-wider text-emerald-700 bg-emerald-100 px-2.5 py-0.5 rounded-full">
                                Nigerian Naira (NGN)
                            </span>
                            <div class="space-y-1 text-sm">
                                <p class="text-slate-600"><strong>Bank Name:</strong> Zenith Bank / GTBank</p>
                                <p class="text-slate-600"><strong>Account Name:</strong> LifeExtract Humanitarian Foundation</p>
                                <p class="text-slate-900 text-lg font-mono font-bold tracking-wider pt-1">0123456789</p>
                            </div>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-100 space-y-2">
                            <span class="text-[10px] font-extrabold uppercase tracking-wider text-purple-700 bg-purple-100 px-2.5 py-0.5 rounded-full">
                                Corporate & Project Sponsorship
                            </span>
                            <p class="text-xs text-slate-600 leading-relaxed">
                                For corporate partnerships, equipment donations, or international grants, please email <a href="mailto:partnerships@lifextract.org" class="text-emerald-700 font-bold underline">partnerships@lifextract.org</a>.
                            </p>
                        </div>

                    </div>

                    <div class="p-4 rounded-xl bg-emerald-50 text-emerald-800 text-xs flex items-center gap-2">
                        <span>🛡️</span>
                        <span>All donations are strictly audited and deployed directly to verified community beneficiaries.</span>
                    </div>
                </div>

                <!-- Card 2: Select an Outreach to Sponsor -->
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-md space-y-6">
                    <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                        <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-2xl font-bold">
                            🎯
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 font-serif-heading">Sponsor an Active Project</h3>
                            <p class="text-xs text-slate-500">Pick a specific outreach you wish to support</p>
                        </div>
                    </div>

                    <div class="space-y-3">
                        @foreach($programs as $prog)
                            <a href="{{ route('programs.show', $prog->slug) }}" class="flex items-center justify-between p-4 rounded-2xl border border-slate-100 hover:border-emerald-300 hover:bg-slate-50 transition group">
                                <div class="space-y-1">
                                    <h4 class="text-xs font-bold text-slate-900 group-hover:text-emerald-700 transition">{{ $prog->title }}</h4>
                                    <p class="text-[11px] text-slate-500">Goal: ₦{{ number_format($prog->target_amount) }}</p>
                                </div>
                                <span class="text-xs font-bold text-emerald-700 group-hover:translate-x-1 transition">Sponsor &rarr;</span>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </section>

</x-layout>