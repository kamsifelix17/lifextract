<x-layout>
    <x-slot:title>{{ $program->title }} — LifeExtract Foundation</x-slot:title>

    @php
        $target = $program->target_amount ?? 0;
        $raised = $program->raised_amount ?? 0;
        $percentage = $target > 0 ? min(100, round(($raised / $target) * 100)) : 0;
        
        $categoryIcons = [
            'elderly' => 'bi-heart-pulse-fill text-rose-500',
            'youth' => 'bi-lightning-charge-fill text-amber-500',
            'health' => 'bi-shield-plus text-emerald-500',
            'scholarship' => 'bi-mortarboard-fill text-blue-500',
            'community' => 'bi-people-fill text-indigo-500',
        ];
        $catIcon = $categoryIcons[$program->category] ?? 'bi-tag-fill text-[#F3C63F]';
    @endphp

    <article class="py-10 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                <a href="{{ route('home') }}" class="hover:text-[#181A20] transition">Home</a>
                <i class="bi bi-chevron-right text-[10px] text-slate-400"></i>
                <a href="{{ route('programs.index') }}" class="hover:text-[#181A20] transition">Programs</a>
                <i class="bi bi-chevron-right text-[10px] text-slate-400"></i>
                <span class="text-[#181A20] font-bold truncate max-w-xs sm:max-w-md">{{ $program->title }}</span>
            </nav>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- Left Main Content (Span 8) -->
                <div class="lg:col-span-8 space-y-8">
                    
                    <div class="bg-white rounded-3xl sm:rounded-[36px] p-5 sm:p-10 border border-slate-200/80 shadow-sm space-y-6">
                        
                        <!-- Badges Header -->
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full bg-[#181A20] text-[#F3C63F] border border-white/10 shadow-sm">
                                <i class="bi {{ $catIcon }}"></i>
                                <span>{{ ucfirst(str_replace('_', ' ', $program->category)) }} Outreach</span>
                            </span>

                            <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 bg-emerald-50 border border-emerald-200/70 px-3 py-1 rounded-full">
                                <i class="bi bi-patch-check-fill text-emerald-600"></i>
                                <span>Verified Ground Intervention</span>
                            </span>

                            <span class="inline-flex items-center gap-1 text-xs text-slate-500 font-medium">
                                <i class="bi bi-geo-alt-fill text-[#F3C63F]"></i> Lagos, Nigeria
                            </span>
                        </div>

                        <!-- Title -->
                        <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-[#181A20] tracking-tight leading-[1.18]">
                            {{ $program->title }}
                        </h1>

                        <!-- Featured Media / Image Showcase -->
                        <div class="w-full h-56 sm:h-96 rounded-2xl sm:rounded-3xl overflow-hidden bg-[#181A20] relative border border-slate-200/80 shadow-inner flex items-center justify-center">
                            @if($program->image_path)
                                <img src="{{ asset($program->image_path) }}" alt="{{ $program->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full relative overflow-hidden bg-gradient-to-br from-[#181A20] via-[#22252D] to-[#121418] flex items-center justify-center p-8 text-center">
                                    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#F3C63F_1px,transparent_1px)] [background-size:20px_20px]"></div>
                                    <div class="space-y-4 relative z-10 max-w-md">
                                        <div class="w-16 h-16 mx-auto rounded-3xl bg-white/5 border border-white/10 flex items-center justify-center text-[#F3C63F] text-3xl shadow-xl">
                                            <i class="bi {{ $catIcon }}"></i>
                                        </div>
                                        <h3 class="text-white font-extrabold text-xl sm:text-2xl tracking-tight">{{ $program->title }}</h3>
                                        <span class="inline-block text-xs font-bold text-[#F3C63F] uppercase tracking-wider bg-white/5 px-3 py-1 rounded-full border border-white/10">
                                            Lifextract Humanitarian Foundation
                                        </span>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Summary Highlight Callout -->
                        <div class="p-6 rounded-2xl bg-amber-50/70 border border-amber-200/60 space-y-2">
                            <span class="text-xs font-extrabold text-[#181A20] uppercase tracking-wider flex items-center gap-1.5">
                                <i class="bi bi-info-circle-fill text-amber-600"></i> Outreach Executive Summary
                            </span>
                            <p class="text-slate-800 text-sm sm:text-base leading-relaxed font-semibold">
                                {{ $program->summary }}
                            </p>
                        </div>

                        <!-- Story & Description -->
                        <div class="text-slate-700 text-sm sm:text-base leading-relaxed space-y-5 pt-4 border-t border-slate-100">
                            <h2 class="text-xl font-extrabold text-[#181A20] tracking-tight">
                                Context, Strategy & Community Impact
                            </h2>
                            <div class="whitespace-pre-line text-slate-600 space-y-4 font-normal">
                                {{ $program->description }}
                            </div>
                        </div>

                        <!-- Key Pillars / Commitments -->
                        <div class="pt-6 border-t border-slate-100 space-y-4">
                            <h3 class="text-base font-extrabold text-[#181A20] tracking-tight">Our Operational Protocol for this Program:</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 flex items-start gap-3">
                                    <span class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                        <i class="bi bi-check2-circle"></i>
                                    </span>
                                    <div>
                                        <h4 class="text-xs font-bold text-[#181A20]">Direct Verification</h4>
                                        <p class="text-[11px] text-slate-500 leading-snug mt-0.5">Recipients are personally verified on the ground before any disbursement.</p>
                                    </div>
                                </div>

                                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 flex items-start gap-3">
                                    <span class="w-8 h-8 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                        <i class="bi bi-shield-lock"></i>
                                    </span>
                                    <div>
                                        <h4 class="text-xs font-bold text-[#181A20]">Zero Admin Overhead</h4>
                                        <p class="text-[11px] text-slate-500 leading-snug mt-0.5">100% of targeted donations go directly to purchasing aid and materials.</p>
                                    </div>
                                </div>

                                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 flex items-start gap-3">
                                    <span class="w-8 h-8 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                        <i class="bi bi-camera-video"></i>
                                    </span>
                                    <div>
                                        <h4 class="text-xs font-bold text-[#181A20]">Video Documentation</h4>
                                        <p class="text-[11px] text-slate-500 leading-snug mt-0.5">Documented respectfully on TalksWithMrDee to maintain public transparency.</p>
                                    </div>
                                </div>

                                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 flex items-start gap-3">
                                    <span class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center text-sm font-bold flex-shrink-0">
                                        <i class="bi bi-arrow-repeat"></i>
                                    </span>
                                    <div>
                                        <h4 class="text-xs font-bold text-[#181A20]">Post-Outreach Follow-up</h4>
                                        <p class="text-[11px] text-slate-500 leading-snug mt-0.5">Beneficiaries receive routine follow-up visits to ensure long-term stability.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Right Sidebar: Donation & Direct Bank Card (Span 4) -->
                <div class="lg:col-span-4 space-y-6">
                    
                    <!-- Funding & Action Card (Carenest Sticky Card) -->
                    <div class="bg-white rounded-3xl sm:rounded-[36px] p-6 sm:p-8 border border-slate-200/80 shadow-md space-y-6 sticky top-28">
                        
                        <div class="border-b border-slate-100 pb-4">
                            <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">Support This Cause</span>
                            <h3 class="text-xl font-extrabold text-[#181A20] tracking-tight">Outreach Target & Progress</h3>
                        </div>

                        <!-- Progress Bar & Target -->
                        @if($target > 0)
                            <div class="space-y-3">
                                <div class="flex justify-between items-baseline">
                                    <div>
                                        <span class="text-2xl sm:text-3xl font-black text-[#181A20] block tracking-tight">₦{{ number_format($raised) }}</span>
                                        <span class="text-xs text-slate-400 font-medium">Funds raised to date</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-sm font-bold text-slate-700 block">₦{{ number_format($target) }}</span>
                                        <span class="text-xs text-slate-400">Target Budget</span>
                                    </div>
                                </div>

                                <div class="w-full h-3 bg-slate-100 rounded-full overflow-hidden p-0.5">
                                    <div class="h-full bg-[#F3C63F] rounded-full transition-all duration-500" style="width: {{ $percentage }}%"></div>
                                </div>

                                <div class="flex justify-between items-center text-xs font-semibold">
                                    <span class="text-emerald-700 inline-flex items-center gap-1">
                                        <i class="bi bi-people"></i> Grassroots Partners
                                    </span>
                                    <span class="text-[#181A20] font-bold">{{ $percentage }}% Complete</span>
                                </div>
                            </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="pt-2 space-y-3">
                            <a href="{{ route('donate') }}" class="inline-flex items-center justify-between w-full text-sm font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] py-4 px-6 rounded-full shadow-lg transition-all duration-200 group text-center">
                                <span>Donate to this Program</span>
                                <span class="w-7 h-7 rounded-full bg-[#181A20] text-[#F3C63F] flex items-center justify-center text-xs font-black group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>
                            </a>

                            <a href="{{ route('volunteer.create') }}" class="inline-flex items-center justify-center gap-2 w-full text-xs sm:text-sm font-bold text-[#181A20] hover:text-[#181A20] bg-slate-100 hover:bg-slate-200 py-3.5 px-6 rounded-full transition">
                                <i class="bi bi-person-heart text-rose-500"></i>
                                <span>Volunteer for this Outreach</span>
                            </a>
                        </div>

                        <!-- Direct Bank Transfer Details -->
                        <div class="p-5 rounded-2xl bg-[#181A20] text-white border border-white/10 space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="font-extrabold text-[11px] text-[#F3C63F] uppercase tracking-wider">Direct Bank Transfer</span>
                                <i class="bi bi-bank2 text-slate-400"></i>
                            </div>

                            <div class="space-y-1.5 text-xs text-slate-300">
                                <div class="flex justify-between">
                                    <span class="text-slate-400">Bank:</span>
                                    <span class="font-bold text-white">Zenith Bank / GTBank</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-slate-400">Account:</span>
                                    <span class="font-mono font-bold text-[#F3C63F]">1234567890</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-0.5 sm:gap-2">
                                    <span class="text-slate-400">Account Name:</span>
                                    <span class="font-bold text-white sm:text-right">Lifextract Humanitarian Foundation</span>
                                </div>
                            </div>
                            
                            <p class="text-[10px] text-slate-400 pt-2 border-t border-white/10 leading-normal">
                                Use your name or program title as the transfer narration for transparent receipting.
                            </p>
                        </div>

                        <!-- Share Outreach on Socials -->
                        <div class="pt-2 text-center space-y-3">
                            <span class="text-xs font-bold text-slate-500 block uppercase tracking-wider">Share This Outreach</span>
                            <div class="flex items-center justify-center gap-2">
                                <a href="https://wa.me/?text={{ urlencode('Support this outreach on Lifextract: ' . $program->title . ' ' . url()->current()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-emerald-50 hover:bg-emerald-100 text-emerald-600 flex items-center justify-center text-base transition" title="Share on WhatsApp">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode('Support: ' . $program->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-900 flex items-center justify-center text-base transition" title="Share on X">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-blue-50 hover:bg-blue-100 text-blue-600 flex items-center justify-center text-base transition" title="Share on Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <button type="button" onclick="navigator.clipboard.writeText(window.location.href); alert('Link copied to clipboard!');" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center text-base transition" title="Copy Link">
                                    <i class="bi bi-link-45deg"></i>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- ========================================================= -->
            <!-- Related Programs Section                                  -->
            <!-- ========================================================= -->
            @if(isset($relatedPrograms) && $relatedPrograms->count() > 0)
                <div class="pt-16 border-t border-slate-200/80 space-y-8">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                        <div>
                            <span class="text-xs font-extrabold text-[#F3C63F] uppercase tracking-wider block">
                                / Ongoing Interventions /
                            </span>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#181A20] tracking-tight">
                                Explore Other Active Programs
                            </h2>
                        </div>
                        <a href="{{ route('programs.index') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#181A20] hover:text-amber-600 transition">
                            <span>Browse All Programs</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($relatedPrograms as $rel)
                            <x-program-card :program="$rel" />
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </article>
</x-layout>