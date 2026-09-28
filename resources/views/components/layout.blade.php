<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Lifextract Humanitarian Foundation & TalksWithMrDee' }}</title>
    
    <!-- Meta Descriptions for SEO -->
    <meta name="description" content="Lifextract Humanitarian Foundation supports vulnerable elderly women, youth empowerment, and healthcare in Nigeria, alongside TALKSWITHMRDEE podcast.">
    
    <!-- Google Fonts: Plus Jakarta Sans for exact Carenest typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Tailwind CSS & Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            letter-spacing: -0.015em;
        }
    </style>
</head>
<body class="bg-[#FBFBFC] text-[#1E2024] antialiased flex flex-col min-h-screen">

    <!-- 1. Carenest Floating Top Navigation Bar -->
    <x-navbar />

    <!-- 2. Flash Notification Banner -->
    @if(session('success'))
        <div class="bg-[#181A20] text-[#F3C63F] text-center py-3 px-4 font-semibold text-xs border-b border-white/10 flex items-center justify-center gap-2">
            <i class="bi bi-check-circle-fill text-[#F3C63F]"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- 3. Dynamic Page Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- 4. Floating WhatsApp Quick Contact Button -->
    <x-whatsapp-button />

    <!-- 5. Carenest High-Contrast Modern Footer -->
    <x-footer />

</body>
</html>