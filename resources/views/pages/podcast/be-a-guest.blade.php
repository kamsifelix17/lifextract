<x-layout>
    <x-slot:title>Be a Guest / Share Your Story — TALKSWITHMRDEE Podcast</x-slot:title>

    <section class="bg-gradient-to-b from-slate-950 via-purple-950 to-slate-950 text-white py-16 text-center">
        <div class="max-w-3xl mx-auto px-4 space-y-4">
            <span class="inline-block text-xs font-mono font-bold uppercase tracking-widest text-amber-400 bg-amber-500/20 border border-amber-500/40 px-3.5 py-1.5 rounded-full mb-4">
                <i class="bi bi-mic-fill"></i> “TALK AM AS E BE!”
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-serif-heading">
                Share Your Story on TALKSWITHMRDEE
            </h1>
            <p class="text-sm text-slate-300 max-w-xl mx-auto leading-relaxed">
                Whether you have an inspiring story of overcoming life struggles, or you are a certified therapist, lawyer, or life coach — we invite you to join the conversation.
            </p>
        </div>
    </section>

    <!-- Guest Pitch Form Section -->
    <section class="py-16 bg-slate-900 text-white min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="bg-slate-950 rounded-3xl p-8 sm:p-10 border border-slate-800 shadow-2xl space-y-6">
                
                <h3 class="text-xl font-bold text-white font-serif-heading border-b border-slate-800 pb-4">
                    Guest Speaker Application Form
                </h3>

                <form action="{{ route('podcast.guest.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Full Name *</label>
                            <input type="text" name="full_name" required class="w-full text-xs px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-amber-400">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Email Address *</label>
                            <input type="email" name="email" required class="w-full text-xs px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-amber-400">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Phone / WhatsApp *</label>
                            <input type="text" name="phone" required class="w-full text-xs px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-amber-400">
                        </div>

                        <div class="space-y-1.5">
                            <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Profession / Background *</label>
                            <input type="text" name="profession" placeholder="e.g. Therapist, Entrepreneur, Survivor" required class="w-full text-xs px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-amber-400">
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Proposed Discussion Topic *</label>
                        <input type="text" name="topic" placeholder="e.g. Navigating Divorce Peacefully" required class="w-full text-xs px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-amber-400">
                    </div>

                    <div class="space-y-1.5">
                        <label class="text-xs font-bold text-slate-300 uppercase tracking-wider">Summary of Your Story / Key Insights *</label>
                        <textarea name="details" rows="5" required placeholder="Tell us briefly about your experience, what lessons listeners will learn, and any social media handles..." class="w-full text-xs px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white focus:outline-none focus:border-amber-400"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-amber-400 to-amber-500 hover:from-amber-500 hover:to-amber-600 text-slate-950 font-bold text-sm shadow-lg transition">
                        Submit Guest Pitch &rarr;
                    </button>
                </form>

            </div>
        </div>
    </section>
</x-layout>