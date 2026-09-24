<x-layout>
    <x-slot:title>{{ $program->title }} — LifeExtract Foundation</x-slot:title>

    @php
        $target = $program->target_amount ?? 0;
        $raised = $program->raised_amount ?? 0;
        $percentage = $target > 0 ? min(100, round(($raised / $target) * 100)) : 0;
    @endphp

    <article class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <span>&rsaquo;</span>
                <a href="{{ route('programs.index') }}" class="hover:underline">Programs</a>
                <span>&rsaquo;</span>
                <span class="text-slate-900 font-semibold truncate">{{ $program->title }}</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- Left Main Content (Span 8) -->
                <div class="lg:col-span-8 space-y-8">
                    
                    <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200 shadow-sm space-y-6">
                        
                        <span class="text-xs font-bold uppercase tracking-wider px-3.5 py-1.5 rounded-full bg-emerald-100 text-emerald-800 border border-emerald-200">
                            {{ ucfirst(str_replace('_', ' ', $program->category)) }} Outreach
                        </span>

                        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-serif-heading leading-tight">
                            {{ $program->title }}
                        </h1>

                        <!-- Featured Image / Placeholder -->
                        <div class="w-full h-80 sm:h-96 rounded-2xl overflow-hidden bg-gradient-to-br from-emerald-800 to-slate-900 flex items-center justify-center text-white text-center p-6">
                            @if($program->image_path)
                                <img src="{{ asset($program->image_path) }}" alt="{{ $program->title }}" class="w-full h-full object-cover">
                            @else
                                <span class="text-2xl font-bold font-serif-heading text-white/90">{{ $program->title }}</span>
                            @endif
                        </div>

                        <!-- Story & Description -->
                        <div class="prose max-w-none text-slate-700 text-sm sm:text-base leading-relaxed space-y-4 pt-4 border-t border-slate-100">
                            <p class="font-semibold text-slate-900 text-base">
                                {{ $program->summary }}
                            </p>
                            <div class="whitespace-pre-line text-slate-600">
                                {{ $program->description }}
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Right Sidebar: Donation & Bank Card (Span 4) -->
                <div class="lg:col-span-4 space-y-6">
                    
                    <!-- Funding Progress Card -->
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200 shadow-md space-y-6 sticky top-28">
                        
                        <h3 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">Outreach Support</h3>

                        @if($target > 0)
                            <div class="space-y-2">
                                <div class="flex justify-between items-baseline">
                                    <span class="text-2xl font-extrabold text-emerald-700 font-serif-heading">₦{{ number_format($raised) }}</span>
                                    <span class="text-xs text-slate-500 font-semibold">Goal: ₦{{ number_format($target) }}</span>
                                </div>
                                <div class="w-full h-3 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full" style="width: {{ $percentage }}%"></div>
                                </div>
                                <p class="text-right text-xs font-bold text-slate-500">{{ $percentage }}% funded by generous donors</p>
                            </div>
                        @endif

                        <div class="pt-2 space-y-3">
                            <a href="{{ route('donate') }}" class="block w-full text-center py-3.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md hover:shadow-lg transition">
                                <i class="bi bi-heart-fill mr-2"></i> 
                                Donate to this Outreach
                            </a>
                            <a href="{{ route('volunteer.create') }}" class="block w-full text-center py-3 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 font-semibold text-xs transition">
                                <i class="bi bi-hand-index-fill mr-2"></i> 
                                Volunteer for this Outreach
                            </a>
                        </div>

                        <!-- Bank Details Card -->
                        <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 text-xs space-y-2">
                            <span class="font-bold text-slate-900 uppercase tracking-wider block">Direct Bank Transfer:</span>
                            <p class="text-slate-600"><strong>Bank:</strong> Zenith Bank / GTBank</p>
                            <p class="text-slate-600"><strong>Account:</strong> 1234567890</p>
                            <p class="text-slate-600"><strong>Name:</strong> LifeExtract Humanitarian Foundation</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </article>
</x-layout>