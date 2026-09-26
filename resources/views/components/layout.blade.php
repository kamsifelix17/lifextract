<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'LifeExtract Humanitarian Foundation & TalksWithMrDee' }}</title>
    
    <!-- Meta Descriptions for SEO -->
    <meta name="description" content="LifeExtract Humanitarian Foundation supports vulnerable elderly, youth empowerment, and healthcare in Nigeria, alongside TALKSWITHMRDEE podcast.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS & Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .font-serif-heading {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

    <!-- 1. The Dual-Brand Navigation Bar -->
    <x-navbar />

    <!-- 2. Flash Notification Banner (Success/Error Toasts) -->
    @if(session('success'))
        <div class="bg-emerald-600 text-white text-center py-3 px-4 font-semibold shadow-md flex items-center justify-center gap-2">
            <i class="bi bi-check-circle-fill text-lg"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- 3. The Dynamic Page Canvas -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- 4. Floating WhatsApp Quick Contact Button -->
    <x-whatsapp-button />

    <!-- 5. The Shared Footer -->
    <x-footer />

</body>
</html>