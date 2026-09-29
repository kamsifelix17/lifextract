@props(['program'])

@php
    $target = $program->target_amount ?? 0;
    $raised = $program->raised_amount ?? 0;
    $percentage = $target > 0 ? min(100, round(($raised / $target) * 100)) : 0;
    
    // Category icon mapping using Bootstrap Icons
    $categoryIcons = [
        'elderly' => 'bi-heart-pulse-fill text-rose-400',
        'youth' => 'bi-lightning-charge-fill text-amber-400',
        'health' => 'bi-shield-plus text-emerald-400',
        'scholarship' => 'bi-mortarboard-fill text-blue-400',
        'community' => 'bi-people-fill text-indigo-400',
    ];
    $catIcon = $categoryIcons[$program->category] ?? 'bi-tag-fill text-[#F3C63F]';
    $defaultCategoryImages = [
        'elderly' => 'images/program-elderly-traders.jpg',
        'youth' => 'images/program-youth-tech.jpg',
        'health' => 'images/program-health-outreach.jpg',
        'scholarship' => 'images/program-youth-tech.jpg',
        'community' => 'images/program-elderly-traders.jpg',
    ];
    $cardImage = $defaultCategoryImages[$program->category] ?? ($program->image_path ?: 'images/lifextract-community-outreach.jpg');
@endphp

<div class="bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-[#F3C63F]/60 transition-all duration-300 flex flex-col group hover:-translate-y-1">
    
    <!-- Image Header with Category Badge -->
    <div class="relative h-60 bg-[#181A20] overflow-hidden">
        @if($cardImage)
            <img src="{{ asset($cardImage) }}" alt="{{ $program->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
        @else
            <!-- Brand Aesthetic Pattern with 3D slate emblem fallback -->
            <div class="w-full h-full relative overflow-hidden bg-gradient-to-br from-[#181A20] via-[#22252D] to-[#121418] flex items-center justify-center p-6 text-center">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#F3C63F_1px,transparent_1px)] [background-size:16px_16px]"></div>
                <div class="space-y-2 relative z-10">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-[#F3C63F] text-xl">
                        <i class="bi {{ $catIcon }}"></i>
                    </div>
                    <span class="text-[#F3C63F] font-bold text-sm tracking-wide uppercase block line-clamp-1">{{ $program->title }}</span>
                </div>
            </div>
        @endif
        
        <div class="absolute top-4 left-4">
            <span class="inline-flex items-center gap-1.5 text-[11px] font-bold tracking-wider uppercase px-3.5 py-1.5 rounded-full bg-[#181A20]/85 backdrop-blur-md text-[#F3C63F] border border-white/10 shadow-lg">
                <i class="bi {{ $catIcon }}"></i>
                <span>{{ ucfirst(str_replace('_', ' ', $program->category)) }}</span>
            </span>
        </div>
    </div>

    <!-- Content Body -->
    <div class="p-6 sm:p-7 flex flex-col flex-grow space-y-4">
        <div>
            <h3 class="text-lg sm:text-xl font-extrabold text-[#181A20] group-hover:text-amber-600 transition tracking-tight leading-snug line-clamp-2">
                <a href="{{ route('programs.show', $program->slug) }}">
                    {{ $program->title }}
                </a>
            </h3>
            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 font-normal mt-2.5">
                {{ $program->summary }}
            </p>
        </div>

        <!-- Donation Progress Section -->
        @if($target > 0)
            <div class="space-y-2.5 pt-4 border-t border-slate-100 mt-auto">
                <div class="flex justify-between items-center text-xs">
                    <span class="font-extrabold text-[#181A20]">₦{{ number_format($raised) }} <span class="font-normal text-slate-400">raised</span></span>
                    <span class="text-slate-400 font-medium">Goal: ₦{{ number_format($target) }}</span>
                </div>

                <!-- Progress Bar Track -->
                <div class="w-full h-2.5 bg-slate-100 rounded-full overflow-hidden p-0.5">
                    <div class="h-full bg-[#F3C63F] rounded-full transition-all duration-500" style="width: {{ $percentage }}%"></div>
                </div>

                <div class="flex justify-between items-center text-[11px] text-slate-500 font-medium">
                    <span class="inline-flex items-center gap-1 text-emerald-600 font-semibold">
                        <i class="bi bi-shield-check"></i> Verified Ground Need
                    </span>
                    <span class="font-bold text-[#181A20]">{{ $percentage }}% Funded</span>
                </div>
            </div>
        @endif

        <!-- Action Button (Carenest style) -->
        <div class="pt-2">
            <a href="{{ route('programs.show', $program->slug) }}" class="inline-flex items-center justify-between w-full text-xs sm:text-sm font-bold text-[#181A20] bg-slate-100 hover:bg-[#F3C63F] py-3.5 px-5 rounded-2xl transition-all duration-200 group/btn">
                <span>View Program Details</span>
                <span class="w-7 h-7 rounded-full bg-white text-[#181A20] flex items-center justify-center text-xs font-black group-hover/btn:translate-x-0.5 group-hover/btn:-translate-y-0.5 transition-transform shadow-sm">
                    <i class="bi bi-arrow-up-right"></i>
                </span>
            </a>
        </div>
    </div>
</div>