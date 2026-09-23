<x-layout>
    <x-slot:title>Contact Us — LifeExtract Humanitarian Foundation & TalksWithMrDee</x-slot:title>

    <section class="bg-gradient-to-b from-slate-950 to-emerald-950 text-white py-16 text-center">
        <div class="max-w-3xl mx-auto px-4 space-y-4">
            <span class="text-xs font-bold uppercase tracking-widest text-emerald-400 bg-emerald-900/60 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                Get In Touch
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-serif-heading">
                We’d Love to Hear From You
            </h1>
            <p class="text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
                Have questions about our outreaches, podcast episodes, or how you can collaborate? Reach out to our team in Lagos, Nigeria.
            </p>
        </div>
    </section>

    <section class="py-16 bg-slate-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Info Column (Span 5) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-md space-y-6">
                    <h3 class="text-lg font-bold text-slate-900 font-serif-heading">Our Contact Info</h3>
                    
                    <div class="space-y-4 text-xs text-slate-600">
                        <div class="flex items-start gap-3">
                            <span class="text-lg">📍</span>
                            <div>
                                <strong class="text-slate-900 block">Location:</strong>
                                <span>Lagos State, Nigeria</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="text-lg">✉️</span>
                            <div>
                                <strong class="text-slate-900 block">Email:</strong>
                                <span>info@lifextract.org</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="text-lg">💬</span>
                            <div>
                                <strong class="text-slate-900 block">WhatsApp:</strong>
                                <span>+234 800 000 0000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form Column (Span 7) -->
            <div class="lg:col-span-7">
                <div class="bg-white p-8 sm:p-10 rounded-3xl border border-slate-200 shadow-md space-y-6">
                    <h3 class="text-lg font-bold text-slate-900 font-serif-heading">Send Us a Quick Message</h3>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-800">Your Name *</label>
                            <input type="text" name="full_name" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-800">Email Address *</label>
                            <input type="email" name="email" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600">
                        </div>

                        <div class="space-y-1">
                            <label class="text-xs font-bold text-slate-800">Your Message *</label>
                            <textarea name="details" rows="4" required class="w-full text-xs px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-emerald-600"></textarea>
                        </div>

                        <button type="submit" class="w-full py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md transition">
                            Send Message &rarr;
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</x-layout>