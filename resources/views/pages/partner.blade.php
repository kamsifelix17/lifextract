<x-layout>
    <x-slot:title>Partner With Us — LifeExtract Humanitarian Foundation</x-slot:title>

    <section class="bg-gradient-to-b from-slate-950 to-teal-950 text-white py-16 text-center">
        <div class="max-w-3xl mx-auto px-4 space-y-4">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-400 bg-teal-900/60 border border-teal-500/30 px-3.5 py-1.5 rounded-full mb-6">
                Strategic Collaboration
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-serif-heading">
                Partner With LifeExtract
            </h1>
            <p class="text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
                We partner with corporate organizations, international NGOs, healthcare institutions, and philanthropists to multiply grassroots impact.
            </p>
        </div>
    </section>

    <section class="py-16 bg-slate-50 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-xl space-y-6">
                
                <h3 class="text-xl font-bold text-slate-900 font-serif-heading border-b border-slate-100 pb-4">
                    Partnership Enquiry Form
                </h3>

                <form action="{{ route('partner.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Contact Person Name *</label>
                            <input type="text" name="full_name" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-teal-600">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Organization / Foundation Name *</label>
                            <input type="text" name="organization" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-teal-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Official Email Address *</label>
                            <input type="email" name="email" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-teal-600">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Phone Number *</label>
                            <input type="text" name="phone" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-teal-600">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Partnership Proposal / Details *</label>
                        <textarea name="details" rows="5" required placeholder="Describe the nature of partnership (CSR project, joint outreach, sponsorship, medical equipment supply)..." class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-teal-600"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-bold text-sm shadow-md transition">
                        Submit Partnership Proposal &rarr;
                    </button>
                </form>

            </div>
        </div>
    </section>
</x-layout>