@props(['program'])

@php
    // Calculate percentage of donation goal reached
    $target = $program->target_amount ?? 0;
    $raised = $program->raised_amount ?? 0;
    $percentage = $target > 0 ? min(100, round(($raised / $target) * 100)) : 0;
    
    // Category colors
    $categoryColors = [
        'elderly' => 'bg-amber-100 text-amber-800 border-amber-200',
        'youth' => 'bg-blue-100 text-blue-800 border-blue-200',
        'health' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
        'scholarship' => 'bg-purple-100 text-purple-800 border-purple-200',
    ];
    $badgeClass = $categoryColors[$program->category] ?? 'bg-slate-100 text-slate-800 border-slate-200';
@endphp

<div class="bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group hover:-translate-y-1">
    
    <!-- Image Header with Category Badge -->
    <div class="relative h-52 bg-slate-100 overflow-hidden">
        @if($program->image_path)
            <img src="{{ asset($program->image_path) }}" alt="{{ $program->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
        @else
            <!-- Default Aesthetic Pattern if no image -->
            <div class="w-full h-full bg-gradient-to-br from-emerald-700 via-teal-800 to-slate-900 flex items-center justify-center p-6 text-center">
                <span class="text-white/80 font-bold text-lg tracking-wide uppercase font-serif-heading">{{ $program->title }}</span>
            </div>
        @endif
        
        <div class="absolute top-3 left-3">
            <span class="text-[11px] font-bold tracking-wider uppercase px-3 py-1 rounded-full border shadow-sm {{ $badgeClass }}">
                {{ ucfirst(str_replace('_', ' ', $program->category)) }}
            </span>
        </div>
    </div>

    <!-- Content Body -->
    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-lg font-bold text-slate-900 group-hover:text-emerald-700 transition leading-snug line-clamp-2 mb-2">
            <a href="{{ route('programs.show', $program->slug) }}">
                {{ $program->title }}
            </a>
        </h3>

        <p class="text-slate-600 text-xs leading-relaxed line-clamp-3 mb-6 flex-grow">
            {{ $program->summary }}
        </p>

        <!-- Donation Progress Section -->
        @if($target > 0)
            <div class="space-y-2 pt-4 border-t border-slate-100 mt-auto">
                <div class="flex justify-between text-xs font-semibold">
                    <span class="text-emerald-700">Raised: ₦{{ number_format($raised) }}</span>
                    <span class="text-slate-400 font-normal">Goal: ₦{{ number_format($target) }}</span>
                </div>

                <!-- Progress Bar Track -->
                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full transition-all duration-500" style="width: {{ $percentage }}%"></div>
                </div>

                <div class="text-right">
                    <span class="text-[10px] font-bold text-slate-500">{{ $percentage }}% Funded</span>
                </div>
            </div>
        @endif

        <!-- Action Button -->
        <div class="pt-4 mt-2">
            <a href="{{ route('programs.show', $program->slug) }}" class="block w-full text-center text-xs font-bold text-emerald-700 hover:text-white bg-emerald-50 hover:bg-emerald-600 border border-emerald-200 hover:border-emerald-600 py-2.5 rounded-xl transition">
                View Outreach Details &rarr;
            </a>
        </div>
    </div>
</div>