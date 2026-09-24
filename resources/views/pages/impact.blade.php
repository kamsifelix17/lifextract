<x-layout>
    <x-slot:title>Our Impact & Success Stories — LifeExtract Foundation</x-slot:title>

    <!-- Header Banner -->
    <section class="bg-gradient-to-b from-slate-950 to-emerald-950 text-white py-16 text-center">
        <div class="max-w-4xl mx-auto px-4 space-y-4">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-400 bg-emerald-900/60 border border-emerald-500/30 px-4 py-1.5 rounded-full mb-4">
                Measurable Transparency
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold font-serif-heading">
                The Lives We Have Touched
            </h1>
            <p class="text-sm sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Putting people before publicity. Every donation directly funds life-saving medical bills, elderly dignity, and youth employment in Lagos, Nigeria.
            </p>
        </div>
    </section>

    <!-- Key Statistics Grid -->
    <section class="py-12 bg-white border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                    <span class="text-3xl font-extrabold text-emerald-600 font-serif-heading">₦6.7M+</span>
                    <p class="text-xs font-semibold text-slate-500 uppercase">Direct Aid Disbursed</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                    <span class="text-3xl font-extrabold text-slate-900 font-serif-heading">150+</span>
                    <p class="text-xs font-semibold text-slate-500 uppercase">Elderly Women Supported</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                    <span class="text-3xl font-extrabold text-purple-600 font-serif-heading">500+</span>
                    <p class="text-xs font-semibold text-slate-500 uppercase">Free Medical Vitals</p>
                </div>

                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 space-y-1">
                    <span class="text-3xl font-extrabold text-amber-600 font-serif-heading">100%</span>
                    <p class="text-xs font-semibold text-slate-500 uppercase">Accountability</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Real Beneficiary Stories -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <div class="text-center max-w-2xl mx-auto space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-700">Real Testimonials</span>
                <h2 class="text-3xl font-extrabold text-slate-900 font-serif-heading">Stories of Restoration</h2>
                <p class="text-sm text-slate-600">Real stories from the individuals and families whose lives have been transformed.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($stories as $story)
                    <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col space-y-4 hover:shadow-lg transition">
                        <span class="text-4xl text-emerald-500 font-serif">“</span>
                        <p class="text-slate-700 text-sm leading-relaxed italic flex-grow">
                            {{ $story->story }}
                        </p>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">{{ $story->name }}</h4>
                                <p class="text-xs text-slate-500">{{ $story->title }}</p>
                            </div>
                            <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-3 py-1 rounded-full uppercase">
                                {{ str_replace('_', ' ', $story->category) }}
                            </span>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 bg-white rounded-2xl border border-slate-100">
                        <p class="text-slate-500 text-sm">No stories published yet.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

</x-layout>