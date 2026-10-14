<x-podcast-layout>
    <x-slot:title>Tell Us Your Type — TalksWithMrDee</x-slot:title>

    <!-- Global Success Toast -->
    @if(session('success'))
        <div id="toast-success" class="fixed top-24 right-4 sm:right-8 z-[100] transition-opacity duration-500 ease-in-out">
            <div class="bg-white border-l-4 border-[#F3C63F] p-4 rounded-xl shadow-2xl flex items-start gap-3 min-w-[300px]">
                <i class="bi bi-check-circle-fill text-[#F3C63F] text-xl"></i>
                <div class="flex-1">
                    <h4 class="text-sm font-black text-[#181A20]">Success</h4>
                    <p class="text-xs font-semibold text-slate-600 mt-0.5">{{ session('success') }}</p>
                </div>
                <button onclick="closeToast()" class="text-slate-400 hover:text-slate-600 transition">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
        <script>
            function closeToast() {
                const toast = document.getElementById('toast-success');
                if (toast) {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 500);
                }
            }
            setTimeout(closeToast, 5000);
        </script>
    @endif

    <section class="min-h-screen bg-slate-50 py-12 sm:py-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Back Button -->
            <a href="{{ route('podcast.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-[#181A20] transition">
                <i class="bi bi-arrow-left"></i> Back to Podcast Home
            </a>

            <div class="bg-[#181A20] p-8 sm:p-12 rounded-[36px] shadow-2xl relative overflow-hidden border border-slate-800">
                <div class="absolute top-0 right-0 p-8 opacity-5 pointer-events-none">
                    <i class="bi bi-hearts text-9xl text-white"></i>
                </div>
                
                <div class="relative z-10 space-y-8">
                    <div class="space-y-2 border-b border-white/10 pb-6">
                        <span class="text-[#F3C63F] text-xs font-black tracking-widest uppercase">Strictly Confidential</span>
                        <h1 class="text-3xl sm:text-4xl font-black text-white">Tell Us Your Type</h1>
                        <p class="text-sm text-slate-400 leading-relaxed">
                            Complete the form below to submit your preferences. We handle all submissions with strict privacy to help connect individuals who share compatible relationship goals.
                        </p>
                    </div>

                    <form action="{{ route('podcast.matchmaking.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Your Full Name</label>
                                <input type="text" name="name" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none focus:bg-white/10 transition">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Email Address</label>
                                <input type="email" name="email" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none focus:bg-white/10 transition">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Your Age</label>
                                <input type="number" name="age" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none focus:bg-white/10 transition">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-white uppercase tracking-wider">Preferred Age Range</label>
                                <input type="text" name="preferred_age" placeholder="e.g., 28 - 35" required class="w-full text-sm px-4 py-3.5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none focus:bg-white/10 transition">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-white uppercase tracking-wider">Describe Your Ideal Partner</label>
                            <textarea name="preferences" rows="5" placeholder="Values, traits, goals, and expectations..." required class="w-full text-sm p-4 rounded-xl bg-white/5 border border-white/10 text-white placeholder-slate-500 focus:border-[#F3C63F] focus:outline-none focus:bg-white/10 transition"></textarea>
                        </div>

                        <div class="flex items-start gap-3 bg-white/5 p-4 rounded-xl border border-white/10">
                            <input type="checkbox" name="consent" required id="consent" class="mt-1 w-4 h-4 rounded border-white/20 bg-[#181A20] text-[#F3C63F] focus:ring-[#F3C63F]">
                            <label for="consent" class="text-xs text-slate-300 leading-relaxed">
                                I consent to TalksWithMrDee securely storing this information for potential connection opportunities. I understand this is not a matchmaking guarantee and is handled with strict confidentiality.
                            </label>
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl font-bold text-[#181A20] bg-[#F3C63F] hover:bg-white transition flex justify-center items-center gap-2 shadow-lg">
                            <span>Submit Preferences Privately</span> <i class="bi bi-send-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-podcast-layout>