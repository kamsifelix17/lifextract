<x-layout>
    <x-slot:title>Volunteer With Us — LifeExtract Humanitarian Foundation</x-slot:title>

    <section class="bg-gradient-to-b from-slate-950 to-emerald-950 text-white py-16 text-center">
        <div class="max-w-3xl mx-auto px-4 space-y-4">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-400 bg-emerald-900/60 border border-emerald-500/30 px-3.5 py-1.5 rounded-full mb-4">
                Join Our Movement
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-serif-heading">
                Volunteer Your Time & Skills
            </h1>
            <p class="text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
                Whether you are a healthcare professional, digital trainer, youth mentor, or community worker in Lagos — your skills can save lives.
            </p>
        </div>
    </section>

    <section class="py-16 bg-slate-50 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200 shadow-xl space-y-6">
                
                <h3 class="text-xl font-bold text-slate-900 font-serif-heading border-b border-slate-100 pb-4">
                    Volunteer Application
                </h3>

                <form action="{{ route('volunteer.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Full Name *</label>
                            <input type="text" name="full_name" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-emerald-600">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Email Address *</label>
                            <input type="email" name="email" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-emerald-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Phone / WhatsApp *</label>
                            <input type="text" name="phone" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-emerald-600">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">Skills / Profession *</label>
                            <input type="text" name="skills" placeholder="e.g. Nurse, Doctor, Software Trainer, Driver" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-emerald-600">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-800 uppercase tracking-wider">How Would You Like to Contribute? *</label>
                        <textarea name="details" rows="5" required placeholder="Tell us about your availability, previous volunteer experience, or areas you are passionate about..." class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 text-slate-900 focus:outline-none focus:border-emerald-600"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md transition">
                        Submit Volunteer Application &rarr;
                    </button>
                </form>

            </div>
        </div>
    </section>
</x-layout>