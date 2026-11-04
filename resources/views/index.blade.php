<x-layouts.app>
    @push('head')
        <title>Dealer Resmi Geely BSD Tangerang | Test Drive Geely EX5 & EX2</title>
        <meta name="description" content="Kunjungi Showroom Dealer Resmi Geely BSD City, Tangerang. Temukan era baru mobilitas elektrik premium, promo pembiayaan bunga rendah, dan booking test drive Geely EX5 & EX2 sekarang!">
        <meta name="keywords" content="Geely BSD, Dealer Geely Tangerang, Dealer Geely BSD City, Mobil Listrik Geely, Geely EX5, Geely EX2, Harga Geely, Test Drive Geely, Showroom Geely Banten, Geely Starray EM-i, Promo Geely Tangerang">
        <link rel="canonical" href="https://geelybsd.id/">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Geely BSD City Tangerang">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:locale" content="id_ID">
        <meta property="og:url" content="https://geelybsd.id/">
        <meta property="og:site_name" content="Dealer Resmi Geely BSD">
        <meta property="og:title" content="Dealer Resmi Geely BSD Tangerang | Kendaraan Listrik Premium">
        <meta property="og:description" content="Kunjungi Showroom Dealer Resmi Geely BSD City. Dapatkan promo terbaru, penawaran kredit bunga rendah, dan test drive Geely EX5 & EX2.">
        <meta property="og:image" content="{{ asset('assets/images/ex5/dama.jpeg') }}">
        <meta property="og:image:alt" content="Showroom Dealer Mobil Listrik Geely BSD Tangerang">

        <!-- Twitter Card -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://geelybsd.id/">
        <meta property="twitter:title" content="Dealer Resmi Geely BSD Tangerang | Kendaraan Listrik Premium">
        <meta property="twitter:description" content="Kunjungi Showroom Dealer Resmi Geely BSD City. Dapatkan promo terbaru dan test drive Geely EX5 & EX2.">
        <meta property="twitter:image" content="{{ asset('assets/images/ex5/dama.jpeg') }}">
    @endpush

    <style>
        html { 
            scroll-behavior: smooth; 
        }

        /* Subtle Crystalline Noise */
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: multiply;
        }

        /* Light Blue Glassmorphism Tokens */
        .glass-panel {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
            border: 1px solid rgba(186, 230, 253, 0.65);
            border-top: 1px solid rgba(255, 255, 255, 0.95);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.12), 0 4px 12px rgba(186, 230, 253, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.9);
        }

        .glass-panel-light {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(224, 242, 254, 0.9);
            box-shadow: 0 20px 45px -10px rgba(14, 165, 233, 0.1), inset 0 1px 0 rgba(255, 255, 255, 1);
        }

        /* Floating Nav Chip */
        .glass-chip-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(186, 230, 253, 0.85);
            border-top: 1px solid rgba(255, 255, 255, 1);
            box-shadow: 0 10px 25px -5px rgba(2, 132, 199, 0.15), inset 0 1px 1px rgba(255, 255, 255, 0.8);
        }

        /* Floating HUD Dock */
        .glass-island-dock {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.88) 0%, rgba(240, 249, 255, 0.92) 100%);
            backdrop-filter: blur(30px) saturate(190%);
            -webkit-backdrop-filter: blur(30px) saturate(190%);
            border: 1px solid rgba(186, 230, 253, 0.8);
            border-top: 1px solid rgba(255, 255, 255, 1);
            box-shadow: 0 25px 60px -15px rgba(2, 132, 199, 0.2), inset 0 1px 2px rgba(255, 255, 255, 0.95), 0 0 35px -5px rgba(56, 189, 248, 0.25);
        }

        .glass-island-cell {
            background: rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(186, 230, 253, 0.55);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-island-cell:hover {
            background: rgba(224, 242, 254, 0.95);
            border-color: rgba(14, 165, 233, 0.55);
            border-top-color: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(14, 165, 233, 0.25), inset 0 1px 0 rgba(255, 255, 255, 1);
        }

        /* Buttons */
        .glass-btn-primary {
            background: linear-gradient(135deg, #0284c7 0%, #2563eb 50%, #0ea5e9 100%);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 15px 35px -5px rgba(2, 132, 199, 0.4), inset 0 1px 1px rgba(255, 255, 255, 0.6);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-btn-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 20px 45px -5px rgba(2, 132, 199, 0.6), 0 0 30px rgba(56, 189, 248, 0.45), inset 0 1px 2px rgba(255, 255, 255, 0.85);
        }

        .glass-btn-secondary {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px) saturate(160%);
            -webkit-backdrop-filter: blur(24px) saturate(160%);
            border: 1px solid rgba(186, 230, 253, 0.8);
            border-top: 1px solid rgba(255, 255, 255, 1);
            box-shadow: 0 12px 30px rgba(14, 165, 233, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-btn-secondary:hover {
            background: rgba(240, 249, 255, 1);
            border-color: rgba(14, 165, 233, 0.5);
            border-top-color: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
            box-shadow: 0 16px 36px rgba(14, 165, 233, 0.2), 0 0 25px rgba(56, 189, 248, 0.25);
        }

        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer {
            100% { transform: rotate(45deg) translateX(100%); }
        }

        .animate-float-slow { animation: float 6s ease-in-out infinite; }
        .animate-float-fast { animation: float 4s ease-in-out infinite reverse; }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }

        .reveal-up { opacity: 0; transform: translateY(50px) scale(0.98); transition: all 1.1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-50px); transition: all 1.1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(50px); transition: all 1.1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-scale { opacity: 0; transform: scale(0.96); transition: all 1.1s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }

        /* Light Blue Liquid Typography */
        .text-liquid {
            background: linear-gradient(270deg, #0284c7, #2563eb, #0ea5e9, #0369a1);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: liquidText 8s ease infinite;
        }
        @keyframes liquidText {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .text-gradient-cyan {
            background: linear-gradient(135deg, #0284c7 0%, #0ea5e9 50%, #2563eb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        [data-slider] { cursor: grab; }
        [data-slider]:active { cursor: grabbing; }
        [data-slider] img { pointer-events: none; }

        #lineup-slider {
            touch-action: pan-y pinch-zoom;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 767px) {
            .mobile-bento-glass-light {
                background: rgba(255, 255, 255, 0.85) !important;
                backdrop-filter: blur(20px) !important;
                -webkit-backdrop-filter: blur(20px) !important;
                border: 1px solid rgba(186, 230, 253, 0.7) !important;
                box-shadow: 0 10px 25px rgba(14, 165, 233, 0.1) !important;
            }
            .mobile-bento-pill {
                background: rgba(255, 255, 255, 0.9) !important;
                backdrop-filter: blur(16px) !important;
                -webkit-backdrop-filter: blur(16px) !important;
                border: 1px solid rgba(186, 230, 253, 0.8) !important;
                border-radius: 20px !important;
            }
            .mobile-bento-p { padding: 12px !important; }
            .mobile-always-visible {
                opacity: 1 !important; 
                transform: translate(0) !important;
            }
            .mobile-soft-gradient { opacity: 0.3 !important; }
        }

        @media (min-width: 768px) {
            .premium-card-hover {
                transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.5s cubic-bezier(0.25, 1, 0.5, 1), border-color 0.5s ease;
                will-change: transform, box-shadow;
            }
            .premium-card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 30px 60px -12px rgba(14, 165, 233, 0.2), 0 15px 30px -15px rgba(2, 132, 199, 0.15);
                border-color: rgba(56, 189, 248, 0.6);
            }
            
            .glare-effect::after {
                content: '';
                position: absolute;
                top: 0; left: -150%; width: 50%; height: 100%;
                background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0) 100%);
                transform: skewX(-25deg);
                transition: left 0.8s ease-in-out;
                z-index: 20;
                pointer-events: none;
            }
            .glare-effect:hover::after {
                left: 200%;
            }
        }

        .lineup-card {
            flex: 0 0 85vw;
            width: 85vw;
            max-width: 85vw;
            height: 520px;
        }
        @media (min-width: 640px) {
            .lineup-card {
                flex: 0 0 calc((100% - 24px) / 2);
                width: calc((100% - 24px) / 2);
                max-width: calc((100% - 24px) / 2);
                height: 520px;
            }
        }
        @media (min-width: 1024px) {
            .lineup-card {
                flex: 0 0 calc((100% - 48px) / 3) !important;
                width: calc((100% - 48px) / 3) !important;
                max-width: calc((100% - 48px) / 3) !important;
                height: 600px !important;
            }
        }

        .cta-modal-pulse {
            box-shadow: 0 0 50px -10px rgba(56, 189, 248, 0.4), 0 25px 60px -12px rgba(2, 132, 199, 0.25);
        }
    </style>

    <!-- CINEMATIC LIGHT BLUE AUTOMOTIVE HERO HEADER -->
    <header class="relative min-h-[100svh] w-full flex flex-col justify-between items-center overflow-hidden bg-gradient-to-b from-[#e0f2fe] via-[#f0f9ff] to-[#e0f2fe] bg-noise pt-28 pb-12 md:pt-36 md:pb-16">
        <!-- Background Cinematic Video with Light Crystalline Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <video autoplay muted loop playsinline class="w-full h-full object-cover scale-105 filter brightness-[1.05] contrast-[1.02] opacity-75">
                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
            </video>
            
            <!-- Dynamic Light Blue Refractions & Soft Gradient Overlays -->
            <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[70vw] h-[340px] bg-gradient-to-b from-sky-400/35 via-cyan-300/25 to-transparent rounded-full blur-[140px] pointer-events-none mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(255,255,255,0.4)_10%,rgba(224,242,254,0.65)_70%,rgba(186,230,253,0.85)_100%)] pointer-events-none"></div>
            <div class="absolute inset-x-0 bottom-0 h-80 bg-gradient-to-t from-[#e0f2fe] via-[#f0f9ff]/80 to-transparent pointer-events-none"></div>
        </div>

        <!-- Top Floating Status Badge (Titik berkedip dihilangkan, menjadi solid dot bersih) -->
        <div class="relative z-20 reveal-up">
            <div class="inline-flex items-center gap-3 px-4 py-1.5 md:px-5 md:py-2 rounded-full glass-chip-nav border border-sky-300/60 shadow-sm">
                <span class="inline-flex rounded-full h-2 w-2 bg-sky-600"></span>
                <span class="text-[9px] md:text-[10px] font-bold tracking-[0.35em] uppercase text-sky-800 drop-shadow-sm">Geely Wonder • YENNI</span>
                <div class="w-[1px] h-3 bg-sky-300"></div>
                <span class="text-[8px] md:text-[9px] font-semibold tracking-[0.2em] uppercase text-slate-600 hidden sm:inline">+628170879315</span>
            </div>
        </div>

        <!-- Center Stage: Open Typography & Brand Narrative -->
        <div class="relative z-20 w-full max-w-5xl mx-auto px-6 text-center my-auto py-6">
            <h1 class="font-geely text-5xl sm:text-7xl md:text-8xl lg:text-[108px] text-slate-900 uppercase leading-[0.88] tracking-tighter drop-shadow-sm mb-6 reveal-up delay-100">
                <span class="sr-only">Temukan inovasi mobilitas masa depan dengan Geely EX2, Geely EX5, dan Geely Starray EM-i di BSD City Tangerang - </span>
                DRIVE THE <br>
                <span class="text-liquid drop-shadow-[0_0_35px_rgba(56,189,248,0.5)]">FUTURE</span>
            </h1>

            <p class="max-w-2xl mx-auto text-slate-700 text-xs sm:text-sm md:text-base font-normal tracking-wide leading-relaxed drop-shadow-sm mb-8 reveal-up delay-200">
                Rasakan era baru mobilitas premium bersama line-up kendaraan listrik cerdas Geely. Jelajahi kelincahan urban <strong class="text-slate-950 font-semibold">Geely EX2</strong>, inovasi elektrik tangguh <strong class="text-slate-950 font-semibold">Geely EX5</strong>, performa super hybrid mutakhir <strong class="text-slate-950 font-semibold">Geely Starray EM-i</strong>, serta performa dinamis <strong class="text-slate-950 font-semibold">Geely Coolray</strong>.
            </p>

            <!-- Primary Glass Action Controls -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 reveal-up delay-300">
                <a href="/test-drive" title="Booking Test Drive Mobil Geely di Showroom BSD" class="btn-shimmer glass-btn-primary flex items-center justify-center gap-3 text-white px-8 md:px-10 py-3.5 md:py-4 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase cursor-pointer w-full sm:w-auto shadow-lg hover:shadow-cyan-400/50">
                    <span>Book Test Drive</span>
                    <svg class="w-4 h-4 text-sky-100 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="#lineup" title="Eksplorasi Model Mobil Listrik Geely Terbaru" class="glass-btn-secondary group flex items-center justify-center gap-3 text-slate-800 hover:text-sky-600 px-7 py-3 md:py-3.5 rounded-full cursor-pointer w-full sm:w-auto border border-sky-200">
                    <div class="w-6 h-6 rounded-full bg-sky-100 flex items-center justify-center group-hover:bg-sky-200 transition-all">
                        <svg class="w-3 h-3 text-sky-700 transform group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase">Explore Models</span>
                </a>
            </div>
        </div>

        <!-- Bottom Floating HUD Island (Model Quick Spec Bar) -->
        <div class="relative z-20 w-full max-w-4xl mx-auto px-4 reveal-up delay-400">
            <div class="glass-island-dock rounded-2xl md:rounded-full p-2 md:p-2.5">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                    <a href="/models/ex5" class="glass-island-cell rounded-xl md:rounded-full py-2.5 px-4 flex flex-col items-center justify-center text-center group cursor-pointer shadow-sm">
                        <div class="flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                            <span class="text-slate-900 font-mono text-[11px] font-bold tracking-wider group-hover:text-sky-600 transition-colors">GEELY EX5</span>
                        </div>
                        <span class="text-slate-600 text-[9px] uppercase tracking-wider font-medium mt-0.5">600km Smart Range</span>
                    </a>
                    
                    <a href="/models/ex2" class="glass-island-cell rounded-xl md:rounded-full py-2.5 px-4 flex flex-col items-center justify-center text-center group cursor-pointer shadow-sm">
                        <div class="flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                            <span class="text-slate-900 font-mono text-[11px] font-bold tracking-wider group-hover:text-sky-600 transition-colors">GEELY EX2</span>
                        </div>
                        <span class="text-slate-600 text-[9px] uppercase tracking-wider font-medium mt-0.5">Urban Agility EV</span>
                    </a>

                    <a href="/models/starray-em-i" class="glass-island-cell rounded-xl md:rounded-full py-2.5 px-4 flex flex-col items-center justify-center text-center group cursor-pointer shadow-sm">
                        <div class="flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                            <span class="text-slate-900 font-mono text-[11px] font-bold tracking-wider group-hover:text-sky-600 transition-colors">STARRAY EM-i</span>
                        </div>
                        <span class="text-slate-600 text-[9px] uppercase tracking-wider font-medium mt-0.5">Super Hybrid Drive</span>
                    </a>

                    <a href="/models/coolray" class="glass-island-cell rounded-xl md:rounded-full py-2.5 px-4 flex flex-col items-center justify-center text-center group cursor-pointer shadow-sm">
                        <div class="flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-teal-500"></span>
                            <span class="text-slate-900 font-mono text-[11px] font-bold tracking-wider group-hover:text-sky-600 transition-colors">COOLRAY</span>
                        </div>
                        <span class="text-slate-600 text-[9px] uppercase tracking-wider font-medium mt-0.5">172 HP Turbo DCT</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- MASTERPIECE LINE-UP SECTION -->
    <section id="lineup" class="py-24 lg:py-40 bg-gradient-to-b from-[#e0f2fe] via-[#f0f8ff] to-[#e6f4fe] text-slate-900 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0 opacity-50">
            <div class="absolute top-[-20%] left-[-10%] w-[60vw] h-[60vw] bg-sky-300/30 rounded-full blur-[150px] animate-float-slow"></div>
            <div class="absolute bottom-[-20%] right-[-10%] w-[50vw] h-[50vw] bg-cyan-200/40 rounded-full blur-[150px] animate-float-fast"></div>
        </div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20 reveal-up">
                <div class="inline-flex items-center gap-4 mb-6">
                    <div class="w-12 h-[1px] bg-gradient-to-r from-transparent to-sky-500"></div>
                    <span class="text-sky-600 text-[10px] font-bold tracking-[0.4em] uppercase">Elevate Every Journey.</span>
                    <div class="w-12 h-[1px] bg-gradient-to-l from-transparent to-sky-500"></div>
                </div>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-slate-900 leading-none mb-6">
                    MASTERPIECE <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 via-blue-600 to-cyan-600">IN MOTION</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed font-normal">
                    Koleksi kendaraan EV unggulan yang dirancang tanpa kompromi. Memadukan estetika aerodinamis kelas dunia dengan arsitektur elektrik paling canggih di industri otomotif Indonesia.
                </p>
            </div>

            <div class="relative w-full" id="lineup-slider-wrapper">
                @php
                    $showcase = [
                        [
                            'name' => 'Geely EX5',
                            'type' => 'Premium Smart SUV',
                            'stats' => ['AWD Dual Motor', '600km Range'],
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-16-YyvDPj63y9fNXbar.webp',
                            'link' => '/models/ex5',
                            'delay' => ''
                        ],
                        [
                            'name' => 'Geely EX2',
                            'type' => 'Urban Electric Crossover',
                            'stats' => ['Agile Dynamics', 'Ultra Fast Charge'],
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/rdspace-6fdMIYg90CYd8lJd.webp',
                            'link' => '/models/ex2',
                            'delay' => 'delay-100'
                        ],
                        [
                            'name' => 'Starray EM-i',
                            'type' => 'The Future Sedan',
                            'stats' => ['Hybrid Gen-X', '0.22 Cd Aero'],
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/02-exterior-geely-starray-em-i-geely-ambara-group-2-AVLxzgj4K6TXQRbW.webp',
                            'link' => '/models/starray-em-i',
                            'delay' => 'delay-200'
                        ],
                        [
                            'name' => 'Geely Coolray',
                            'type' => 'Dynamic Sport SUV',
                            'stats' => ['1.5L Turbo 172 HP', '7-Speed DCT'],
                            'img' => asset('assets/coolray/hero.webp'),
                            'link' => '/models/coolray',
                            'delay' => 'delay-300'
                        ]
                    ];
                @endphp

                <!-- Showcase Cards Slider Track -->
                <div id="lineup-slider" class="flex items-stretch overflow-x-auto hide-scrollbar snap-x snap-mandatory gap-5 md:gap-6 pb-6 pt-2 scroll-smooth -mx-6 px-[7.5vw] md:mx-0 md:px-0">
                    @foreach($showcase as $index => $car)
                    <div data-lineup-card="{{ $index }}" class="lineup-card flex-shrink-0 snap-center md:snap-start group relative rounded-[24px] md:rounded-[32px] overflow-hidden reveal-up {{ $car['delay'] }} border border-sky-200/80 premium-card-hover glare-effect bg-slate-900 transition-all duration-500 shadow-xl">
                        <div class="absolute inset-0 w-full h-full overflow-hidden">
                            <img src="{{ $car['img'] }}" alt="Mobil Listrik {{ $car['name'] }} - {{ $car['type'] }} tersedia di Dealer Geely BSD" class="w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-[1.5s] ease-out brightness-90 group-hover:brightness-100">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/45 to-transparent opacity-90 group-hover:opacity-85 transition-opacity duration-500"></div>
                        </div>
                        
                        <div class="relative z-10 w-full h-full p-6 md:p-8 flex flex-col justify-end">
                            <div class="transform translate-y-0 md:translate-y-4 md:group-hover:translate-y-0 transition-transform duration-500 ease-out">
                                <span class="text-sky-300 text-[10px] md:text-[9px] font-bold tracking-[0.3em] uppercase mb-2 block drop-shadow-md">
                                    {{ $car['type'] }}
                                </span>
                                <h3 class="font-geely text-3xl md:text-4xl uppercase tracking-tighter text-white mb-3 md:mb-4 drop-shadow-lg">
                                    {{ $car['name'] }}
                                </h3>
                                
                                <div class="flex flex-wrap gap-2 md:gap-3 mb-4 md:mb-6 opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                    @foreach($car['stats'] as $stat)
                                    <span class="px-3 py-1 md:px-3 md:py-1.5 rounded-full border border-sky-300/30 bg-sky-950/60 backdrop-blur-md text-sky-100 text-[9px] md:text-[8px] tracking-[0.15em] font-medium uppercase whitespace-nowrap">
                                        {{ $stat }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="pt-4 md:pt-6 border-t border-white/20 flex justify-between items-center opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-500 delay-200">
                                <a href="{{ $car['link'] }}" title="Spesifikasi Detail {{ $car['name'] }}" class="text-white hover:text-sky-300 text-[10px] font-bold tracking-[0.2em] uppercase transition-colors flex items-center gap-2">
                                    Discover Details <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Showcase Pagination Controls -->
                <div class="mt-8 md:mt-12 flex flex-col sm:flex-row items-center justify-between gap-6 reveal-up">
                    <div class="flex items-center gap-3">
                        <span class="text-sky-700 text-xs font-mono font-bold tracking-widest" id="lineup-page-indicator">01</span>
                        <div class="w-24 md:w-32 h-[4px] bg-sky-200 rounded-full overflow-hidden relative">
                            <div id="lineup-progress-bar" class="h-full bg-gradient-to-r from-sky-500 to-blue-600 rounded-full transition-all duration-300" style="width: 50%;"></div>
                        </div>
                        <span class="text-slate-400 text-xs font-mono font-bold tracking-widest" id="lineup-page-total">02</span>
                    </div>

                    <div class="flex items-center gap-2 md:gap-3">
                        <button id="lineup-prev" type="button" aria-label="Previous Page" class="w-10 h-10 md:w-12 md:h-12 rounded-full glass-panel border border-sky-200 flex items-center justify-center text-slate-700 hover:text-sky-700 hover:border-sky-400 hover:bg-sky-50 transition-all duration-300 disabled:opacity-30 disabled:pointer-events-none cursor-pointer shadow-sm">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>

                        <div id="lineup-pagination-dots" class="flex items-center gap-2 px-1"></div>

                        <button id="lineup-next" type="button" aria-label="Next Page" class="w-10 h-10 md:w-12 md:h-12 rounded-full glass-panel border border-sky-200 flex items-center justify-center text-slate-700 hover:text-sky-700 hover:border-sky-400 hover:bg-sky-50 transition-all duration-300 disabled:opacity-30 disabled:pointer-events-none cursor-pointer shadow-sm">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="text-center mt-3 flex md:hidden justify-center items-center gap-2 text-sky-600 text-[9px] font-bold uppercase tracking-widest">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    Swipe to explore more models
                </div>
            </div>            
        </div>
    </section>

    <!-- PROMO & CREDIT SIMULATION SECTION -->
    <section class="py-24 lg:py-32 bg-gradient-to-b from-[#e6f4fe] to-[#dbeafe] relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-sky-300/30 rounded-full blur-[160px] pointer-events-none"></div>

        <div class="max-w-[1400px] mx-auto px-6 md:px-12 relative z-10">
            <div class="glass-panel mobile-bento-glass-light rounded-[24px] md:rounded-[40px] overflow-hidden relative shadow-[0_30px_70px_-15px_rgba(2,132,199,0.2)] group reveal-up premium-card-hover border border-sky-200">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
                    <div class="p-8 md:p-12 lg:p-24 relative z-10">
                        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-sky-300/60 bg-sky-500/10 mb-6 md:mb-8">
                            <div class="w-2 h-2 rounded-full bg-sky-600"></div>
                            <span class="text-sky-700 text-[8px] md:text-[9px] font-bold tracking-[0.3em] uppercase">Promo & Pembiayaan Geely BSD</span>
                        </div>
                        
                        <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl text-slate-900 uppercase tracking-tighter mb-4 md:mb-6 leading-[1.1]">
                            Miliki <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 via-blue-600 to-cyan-600">Geely Impian</span>
                        </h2>
                        
                        <p class="text-slate-600 text-sm md:text-base font-normal leading-relaxed mb-8 md:mb-12 max-w-md">
                            Dapatkan penawaran harga terbaik dan akses kebebasan finansial dengan program pembiayaan premium yang 100% transparan di wilayah Tangerang dan Jakarta. Gunakan kalkulator pintar bertenaga AI kami.
                        </p>

                        <a href="/credit-simulation" title="Kalkulator Simulasi Kredit Mobil Geely" class="btn-shimmer inline-flex items-center justify-center gap-4 bg-gradient-to-r from-sky-600 to-blue-600 text-white px-8 md:px-10 py-4 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-all duration-500 hover:scale-105 shadow-[0_15px_35px_rgba(2,132,199,0.35)] w-full sm:w-auto">
                            <span>Mulai Simulasi Kredit</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>                    
                    <div class="h-56 md:h-64 lg:h-full relative overflow-hidden block">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-14-mxB2lNnxMqfjr7pG.webp" alt="Simulasi Kredit dan Harga Pembiayaan Mobil Geely Tangerang Banten" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-90">
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-[#e6f4fe] via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FLYME AUTO VIDEO & PERFORMANCE HIGHLIGHT -->
    <section class="py-16 md:py-24 lg:py-40 bg-gradient-to-b from-[#dbeafe] via-white to-[#e0f2fe] relative overflow-hidden">
        <div class="absolute top-32 right-[-10%] w-[600px] h-[600px] bg-sky-200/50 rounded-full blur-[140px] pointer-events-none z-0"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-200/50 rounded-full blur-[140px] pointer-events-none z-0"></div>

        <div class="max-w-[1600px] mx-auto px-0 md:px-12 lg:px-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 lg:gap-20 items-center">
                
                <div class="lg:col-span-7 order-1 lg:order-2 reveal-right h-full px-4 md:px-0">
                    <div class="relative rounded-[24px] md:rounded-[32px] overflow-hidden shadow-[0_25px_50px_rgba(2,132,199,0.18)] border border-sky-200 group video-feature w-full h-[45vh] md:h-[50vh] lg:h-full bg-slate-900">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2.5s] ease-out">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-85 group-hover:opacity-95 transition-opacity duration-500"></div>
                        <div class="absolute bottom-16 lg:bottom-12 left-6 md:left-12 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out">
                            <span class="text-sky-300 text-[9px] md:text-[10px] tracking-[0.3em] font-bold uppercase block mb-2 drop-shadow-md">Flyme Auto</span>
                            <h4 class="font-geely text-2xl md:text-4xl uppercase tracking-tight text-white drop-shadow-lg leading-none">Future in Motion.</h4>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 order-2 lg:order-1 reveal-left relative z-20 -mt-10 md:-mt-16 lg:mt-0 px-6 lg:px-0">
                    <div class="glass-panel-light p-8 md:p-10 lg:p-12 rounded-[32px] lg:rounded-[40px] shadow-[0_20px_50px_rgba(2,132,199,0.12)] border border-sky-200">
                        <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-sky-300 bg-sky-50 shadow-sm">
                            <span class="text-sky-700 text-[9px] font-bold tracking-[0.4em] uppercase">Redefining Joyful Rides</span>
                        </div>
                        
                        <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-slate-900 mb-6 md:mb-8 leading-[1.1] drop-shadow-sm">
                            Keseimbangan <br> <span class="text-gradient-cyan">Sempurna</span>
                        </h2>
                        
                        <div class="space-y-4 md:space-y-6 text-slate-600 text-sm md:text-base font-normal leading-relaxed">
                            <p>Geely EX5 hadir sebagai pilihan terbaik bagi Anda yang mencari SUV dengan performa tangguh, desain elegan, serta teknologi canggih. Ditenagai mesin efisien dan fitur keselamatan lengkap.</p>
                            <p>Desain eksterior modern aerodinamis menawarkan efisiensi optimal. Interior dirancang untuk kenyamanan maksimal dengan material premium dan layar infotainment cerdas berkecepatan tinggi.</p>
                            <p>Dilengkapi sistem keamanan tingkat tinggi seperti Adaptive Cruise Control dan Blind Spot Monitoring untuk perlindungan ekstra di setiap perjalanan Anda.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TECH SPECS & READY TO CONQUER SECTION (SESUAI FOTO KEDUA) -->
    <section class="py-16 md:py-24 lg:py-36 relative w-full overflow-hidden bg-gradient-to-b from-[#e0f2fe] via-[#ecf6fd] to-[#e0f2fe]">
        <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-white/70 to-transparent pointer-events-none z-10"></div>

        <div class="relative z-20 w-full max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
                
                <!-- SISI KIRI: Cockpit Video/Media & 3 Kartu Spesifikasi (Sesuai Foto Kedua) -->
                <div class="order-1 lg:col-span-7 flex flex-col justify-between gap-5 md:gap-6 reveal-left">
                    <!-- Kartu Atas: Cockpit Command Preview Media -->
                    <div class="bg-white/90 backdrop-blur-xl p-2.5 sm:p-3 rounded-[24px] sm:rounded-[32px] md:rounded-[36px] border border-sky-200/90 shadow-[0_20px_45px_-10px_rgba(14,165,233,0.15)] overflow-hidden group">
                        <div class="relative w-full aspect-[16/9] sm:aspect-[16/9.2] rounded-[18px] sm:rounded-[26px] md:rounded-[30px] overflow-hidden bg-slate-950">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-[4s] ease-out opacity-95 group-hover:scale-105 z-0">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                            </video>
                            
                            <!-- Soft Gradient Vignette -->
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/25 to-transparent pointer-events-none z-10"></div>
                            
                            <!-- Caption Cockpit Command -->
                            <div class="absolute bottom-5 sm:bottom-7 md:bottom-8 left-5 sm:left-7 md:left-9 z-20 pointer-events-none">
                                <h3 class="font-geely text-2xl sm:text-3xl md:text-4xl text-white uppercase tracking-tight font-bold drop-shadow-md mb-1 leading-tight">
                                    Cockpit Command
                                </h3>
                                <p class="text-sky-300 text-[8px] sm:text-[9px] md:text-[10px] tracking-[0.25em] uppercase font-bold drop-shadow-sm">
                                    Premium Cabin Experience • Geely BSD
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Kartu Bawah: 3 Kolom Metrik Tanpa Garis Pemisah (Sesuai Foto Kedua) -->
                    <div class="grid grid-cols-3 gap-3 sm:gap-4 md:gap-5">
                        <!-- Stat 1: Range -->
                        <div class="bg-white/95 backdrop-blur-md p-4 sm:p-5 md:p-6 rounded-[20px] sm:rounded-[26px] md:rounded-[30px] border border-sky-100 shadow-[0_12px_30px_rgba(14,165,233,0.08)] flex flex-col justify-center items-center text-center transition-all duration-300 hover:border-sky-300 hover:-translate-y-1">
                            <span class="text-slate-400 text-[8px] sm:text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-1.5 sm:mb-2 whitespace-nowrap">
                                Up To
                            </span>
                            <div class="flex items-baseline justify-center mb-1.5 sm:mb-2">
                                <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black leading-none" style="color: #0284c7 !important; -webkit-text-fill-color: #0284c7 !important;">
                                    495
                                </span>
                                <span class="text-[10px] sm:text-xs md:text-sm font-bold text-slate-500 ml-1 leading-none" style="color: #64748b !important; -webkit-text-fill-color: #64748b !important;">
                                    km*
                                </span>
                            </div>
                            <span class="text-slate-400 text-[7px] sm:text-[8px] md:text-[9px] tracking-wider font-bold uppercase">
                                NEDC Range
                            </span>
                        </div>

                        <!-- Stat 2: Charging -->
                        <div class="bg-white/95 backdrop-blur-md p-4 sm:p-5 md:p-6 rounded-[20px] sm:rounded-[26px] md:rounded-[30px] border border-sky-100 shadow-[0_12px_30px_rgba(14,165,233,0.08)] flex flex-col justify-center items-center text-center transition-all duration-300 hover:border-sky-300 hover:-translate-y-1">
                            <span class="text-slate-400 text-[8px] sm:text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-1.5 sm:mb-2 whitespace-nowrap">
                                Fast Charge
                            </span>
                            <div class="flex items-baseline justify-center mb-1.5 sm:mb-2">
                                <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black leading-none" style="color: #0284c7 !important; -webkit-text-fill-color: #0284c7 !important;">
                                    20
                                </span>
                                <span class="text-[10px] sm:text-xs md:text-sm font-bold text-slate-500 ml-1 leading-none" style="color: #64748b !important; -webkit-text-fill-color: #64748b !important;">
                                    mins**
                                </span>
                            </div>
                            <span class="text-slate-400 text-[7px] sm:text-[8px] md:text-[9px] tracking-wider font-bold uppercase">
                                30% - 80%
                            </span>
                        </div>

                        <!-- Stat 3: Acceleration -->
                        <div class="bg-white/95 backdrop-blur-md p-4 sm:p-5 md:p-6 rounded-[20px] sm:rounded-[26px] md:rounded-[30px] border border-sky-100 shadow-[0_12px_30px_rgba(14,165,233,0.08)] flex flex-col justify-center items-center text-center transition-all duration-300 hover:border-sky-300 hover:-translate-y-1">
                            <span class="text-slate-400 text-[8px] sm:text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-1.5 sm:mb-2 whitespace-nowrap">
                                Acceleration
                            </span>
                            <div class="flex items-baseline justify-center mb-1.5 sm:mb-2">
                                <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black leading-none" style="color: #4f46e5 !important; -webkit-text-fill-color: #4f46e5 !important;">
                                    6.9
                                </span>
                                <span class="text-[10px] sm:text-xs md:text-sm font-bold text-slate-500 ml-1 leading-none" style="color: #64748b !important; -webkit-text-fill-color: #64748b !important;">
                                    sec
                                </span>
                            </div>
                            <span class="text-slate-400 text-[7px] sm:text-[8px] md:text-[9px] tracking-wider font-bold uppercase">
                                0-100 KM/H
                            </span>
                        </div>
                    </div>
                </div>

                <!-- SISI KANAN: Kartu Ready to Conquer (Sesuai Foto Kedua) -->
                <div class="order-2 lg:col-span-5 flex flex-col justify-center reveal-right">
                    <div class="bg-white/95 backdrop-blur-xl p-8 sm:p-10 md:p-12 lg:p-14 rounded-[24px] sm:rounded-[32px] md:rounded-[40px] border border-sky-100 shadow-[0_25px_55px_-12px_rgba(14,165,233,0.15)] relative overflow-hidden group hover:border-sky-300 transition-all duration-500 h-full flex flex-col justify-center">
                        <div class="relative z-10">
                            <span class="text-[#0284c7] text-[10px] sm:text-xs tracking-[0.3em] font-bold uppercase mb-4 block" style="color: #0284c7 !important; -webkit-text-fill-color: #0284c7 !important;">
                                All-New Geely EX5
                            </span>
                            
                            <h2 class="font-geely text-4xl sm:text-5xl lg:text-6xl uppercase tracking-tighter mb-6 md:mb-8 leading-[0.92]">
                                <span class="block" style="color: #0f172a !important; -webkit-text-fill-color: #0f172a !important;">Ready To</span>
                                <span class="block font-black tracking-tight" style="color: #1e293b !important; -webkit-text-fill-color: #1e293b !important;">
                                    Conquer
                                </span>
                            </h2>
                            
                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal mb-8 md:mb-12">
                                Rasakan akselerasi responsif dan kestabilan sasis superior berkat teknologi baterai mutakhir Geely. Kunjungi dealer resmi Geely BSD untuk konsultasi dan merasakan langsung sensasi berkendara.
                            </p>
                            
                            <div class="pt-1">
                                <a href="/test-drive" class="inline-flex items-center gap-3 text-sky-700 text-[11px] sm:text-xs font-bold tracking-[0.2em] uppercase hover:text-blue-800 transition-all pb-1.5 border-b-2 border-sky-400 hover:border-blue-700 w-max group/btn">
                                    <span>Book Test Drive Geely</span>
                                    <svg class="w-4 h-4 transform group-hover/btn:translate-x-1.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SPOTLIGHT GEELY EX2 BENTO GALLERY -->
    <section class="py-24 lg:py-40 bg-gradient-to-b from-[#e0f2fe] via-white to-[#e8f4fd] relative overflow-hidden">
        <div class="absolute top-1/4 right-0 w-64 h-64 bg-sky-200/50 rounded-full blur-[80px] pointer-events-none md:hidden"></div>
        <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-cyan-200/50 rounded-full blur-[80px] pointer-events-none md:hidden"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16 gap-6 reveal-up">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-4 mb-4 md:mb-6">
                        <div class="w-10 h-[2px] bg-sky-600"></div>
                        <span class="text-sky-700 text-[9px] md:text-[10px] font-bold tracking-[0.4em] uppercase">Spotlight Geely EX2</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-slate-900 leading-[0.9]">
                        EX2 <span class="text-sky-500">URBAN</span> <br> BLUEPRINT
                    </h2>
                </div>
                <div class="md:text-right pb-2">
                    <p class="text-slate-600 text-sm md:text-base font-normal max-w-sm ml-auto">
                        Manifestasi arsitektural antara dinamika perkotaan dan tata ruang kabin futuristik pada lini mobil listrik Geely terbaru.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 grid-rows-none md:grid-rows-2 gap-3 md:gap-5 h-auto md:h-[700px] lg:h-[800px] reveal-up delay-100">
                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg', '01 // Exterior - Aero Stance')" class="col-span-2 md:col-span-2 md:row-span-2 group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-slate-950 cursor-pointer h-[280px] md:h-auto premium-card-hover border border-sky-200 glare-effect shadow-xl">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg" alt="Eksterior Depan Geely EX2 EV dengan Desain Aerodinamis Tercanggih" class="absolute inset-0 w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-[2s] ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-85 group-hover:opacity-95 transition-opacity duration-500"></div>
                    
                    <div class="absolute bottom-4 left-4 right-4 md:bottom-10 md:left-10 md:right-10 flex justify-between items-end z-10">
                        <div>
                            <span class="text-sky-300 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase block mb-2 drop-shadow-md">Exterior</span>
                            <h3 class="font-geely text-3xl md:text-5xl text-white uppercase tracking-tight leading-none drop-shadow-lg">Designed for the City</h3>
                        </div>
                        <div class="w-10 h-10 md:w-14 md:h-14 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white transform scale-0 group-hover:scale-100 transition-transform duration-500 shadow-lg border border-white/30">
                            <svg class="w-5 h-5 md:w-6 md:h-6 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_01-mjE49a4pNXu7kyQv.jpg', '02 // Cockpit - Digital Oasis')" class="col-span-2 md:col-span-2 md:row-span-1 group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-slate-950 cursor-pointer h-[220px] md:h-auto premium-card-hover border border-sky-200 glare-effect shadow-xl">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_ex2_01-mjE49a4pNXu7kyQv.jpg" alt="Desain Interior Kabin Premium Futuristik Geely EX2 Indonesia" class="absolute inset-0 w-full h-full object-cover object-[center_60%] transform group-hover:scale-105 transition-transform duration-[2s] ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/30 to-transparent opacity-85 group-hover:opacity-95 transition-opacity duration-500"></div>
                    
                    <div class="absolute bottom-4 left-4 md:bottom-8 md:left-8 z-10">
                        <span class="text-sky-300 text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase block mb-2 drop-shadow-md">Cockpit</span>
                        <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight leading-tight drop-shadow-lg">Built Around You</h3>
                    </div>
                </div>

                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_05-A1azJbNx5vfMLwxk.webp', '03 // Lifestyle - Agility')" class="col-span-1 md:col-span-1 md:row-span-1 group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-slate-950 cursor-pointer h-[180px] md:h-auto premium-card-hover border border-sky-200 glare-effect shadow-xl">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_05-A1azJbNx5vfMLwxk.webp" alt="Gaya Hidup Berkendara EV di Perkotaan dengan Mobil Geely EX2" class="absolute inset-0 w-full h-full object-cover object-center transform group-hover:scale-110 transition-transform duration-[2s] ease-out opacity-90 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 to-transparent opacity-85 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="absolute bottom-3 left-3 md:bottom-6 md:left-6 z-10">
                        <span class="text-sky-300 text-[8px] md:text-[9px] font-bold tracking-[0.3em] uppercase block mb-1 drop-shadow-md">Lifestyle</span>
                        <h3 class="font-geely text-lg md:text-2xl text-white uppercase tracking-tight leading-none drop-shadow-lg">Effortless Mobility</h3>
                    </div>
                </div>

                <div onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/ldspace-B4XeAula05tXqaeN.png', '04 // Utility - Max Cargo', true)" class="col-span-1 md:col-span-1 md:row-span-1 group relative rounded-[20px] md:rounded-[32px] overflow-hidden cursor-pointer h-[180px] md:h-auto premium-card-hover border border-sky-200 shadow-xl bg-gradient-to-br from-[#f0f9ff] to-[#e0f2fe] flex flex-col justify-between p-4 md:p-6 transition-colors hover:from-white hover:to-[#bae6fd]">
                    <div class="z-10">
                        <span class="text-sky-700 text-[8px] md:text-[9px] font-bold tracking-[0.3em] uppercase block mb-1">Utility</span>
                        <h3 class="font-geely text-lg md:text-2xl text-slate-900 uppercase tracking-tight leading-none">Space Reimagined</h3>
                    </div>
                    <div class="relative w-full h-[65%] mt-auto flex items-end justify-center">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ldspace-B4XeAula05tXqaeN.png" alt="Kapasitas Bagasi Luas Mobil Listrik Keluarga Geely EX2" class="w-full h-full object-contain transform group-hover:scale-110 group-hover:-translate-y-2 transition-transform duration-[1.5s] ease-out mix-blend-darken origin-bottom">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GEA INTELLIGENT PLATFORM SECTION -->
    <section class="py-24 lg:py-40 bg-gradient-to-b from-[#e8f4fd] via-[#f0f9ff] to-[#e2f0fd] bg-noise overflow-hidden relative">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 md:mb-20 reveal-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-sky-300 bg-sky-100/60 mb-6">
                    <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <span class="text-sky-700 text-[8px] md:text-[9px] font-bold tracking-[0.4em] uppercase">Teknologi Baterai Mobil Listrik</span>
                </div>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-slate-900 leading-[1] md:leading-[0.9] mb-6">
                    GEA PLATFORM <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 via-blue-600 to-indigo-600">NEURAL CORE</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base font-normal leading-relaxed">
                    Arsitektur elektrik cerdas global (GEA) mengintegrasikan superkomputer on-board dengan sasis baja boron untuk menghadirkan tingkat keselamatan dan efisiensi mobilitas EV tertinggi di kelasnya.
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-12 gap-3 md:gap-6">
                <div class="col-span-2 lg:col-span-8 aspect-video md:aspect-auto md:h-[600px] group relative rounded-[20px] md:rounded-[32px] overflow-hidden bg-slate-950 reveal-scale border border-sky-200 shadow-2xl premium-card-hover glare-effect">
                    <video autoplay muted loop playsinline aria-label="Simulasi Platform GEA Cerdas Geely" class="w-full h-full object-cover opacity-85">
                        <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-inside-the-gea-intelligent-electric-platform---geely-auto-720p-h264-tjCY49tcStbBVMrV.mp4" type="video/mp4">
                    </video>
                    
                    <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-32 md:h-32 text-sky-400/40 pointer-events-none animate-[spin_20s_linear_infinite] z-10" fill="none" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="48" stroke="currentColor" stroke-width="0.75" stroke-dasharray="4 4"/>
                        <circle cx="50" cy="50" r="30" stroke="currentColor" stroke-width="0.75"/>
                    </svg>
                </div>

                <div class="col-span-2 lg:col-span-4 grid grid-cols-2 lg:flex lg:flex-col gap-3 md:gap-6">
                    <div class="col-span-1 glass-panel mobile-bento-glass-light rounded-[20px] md:rounded-[32px] p-4 md:p-10 flex flex-col justify-center relative overflow-hidden group reveal-right delay-100 premium-card-hover border border-sky-200">
                        <div class="absolute top-0 right-0 w-24 h-24 md:w-32 md:h-32 bg-sky-400/15 rounded-full blur-[30px] md:blur-[40px] group-hover:bg-sky-400/25 transition-colors duration-500"></div>
                        <div class="w-8 h-8 md:w-14 md:h-14 rounded-full bg-sky-100 flex items-center justify-center text-sky-600 border border-sky-200 mb-3 md:mb-6 group-hover:scale-110 transition-transform duration-500 shrink-0 z-10 shadow-sm">
                            <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div class="z-10">
                            <h3 class="font-geely text-sm md:text-3xl text-slate-900 uppercase mb-1 md:mb-3 tracking-tight">AI Integration</h3>
                            <p class="text-slate-600 text-[8px] md:text-sm font-normal leading-relaxed hidden md:block">
                                Penyelarasan milidetik antara sensor Lidar, Radar, dan otak komputasi pusat mobil Geely Anda.
                            </p>
                        </div>
                    </div>

                    <div class="col-span-1 glass-panel mobile-bento-glass-light rounded-[20px] md:rounded-[32px] p-4 md:p-10 flex flex-col justify-center relative overflow-hidden group reveal-right delay-200 premium-card-hover border border-sky-200">
                        <div class="absolute bottom-0 right-0 w-24 h-24 md:w-32 md:h-32 bg-blue-400/15 rounded-full blur-[30px] md:blur-[40px] group-hover:bg-blue-400/25 transition-colors duration-500"></div>
                        <div class="w-8 h-8 md:w-14 md:h-14 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 border border-blue-200 mb-3 md:mb-6 group-hover:scale-110 transition-transform duration-500 shrink-0 z-10 shadow-sm">
                            <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div class="z-10">
                            <h3 class="font-geely text-sm md:text-3xl text-slate-900 uppercase mb-1 md:mb-3 tracking-tight leading-tight">Hyper Efficiency</h3>
                            <p class="text-slate-600 text-[8px] md:text-sm font-normal leading-relaxed hidden md:block">
                                Manajemen termal pintar yang melindungi baterai mobil listrik dan memaksimalkan jangkauan tempuh hingga 600km.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- EM-I SUPER HYBRID SECTION -->
    <div class="relative w-full pb-10 bg-gradient-to-b from-[#e2f0fd] via-[#f0f9ff] to-[#e8f4fc]">
        <div class="sticky top-[25vh] md:top-0 w-full aspect-video md:h-[100vh] overflow-hidden z-0">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely---coming-soon-starray-em-i---geely-epping-1080p-h264-YZ9EbbbjRws55ErL.mp4" type="video/mp4">
            </video>
            
            <div class="absolute inset-x-0 top-0 h-16 md:h-36 bg-gradient-to-b from-[#e2f0fd] to-transparent pointer-events-none z-10"></div>
            <div class="absolute inset-x-0 bottom-0 h-16 md:h-36 bg-gradient-to-t from-[#e8f4fc] to-transparent pointer-events-none z-10"></div>
        </div>

        <section class="mt-[40vh] md:mt-[70vh] py-16 md:py-24 lg:py-32 bg-gradient-to-b from-[#e8f4fc]/95 via-white/95 to-[#e0f2fe]/95 backdrop-blur-md relative z-30 shadow-[0_-25px_60px_rgba(2,132,199,0.12)] min-h-[100vh] rounded-t-[2.5rem] md:rounded-none border-t border-sky-200">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-400/20 rounded-full blur-[160px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-400/20 rounded-full blur-[140px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-x-20 lg:gap-y-10 items-center lg:items-start">
                <div class="order-1 lg:col-start-1 lg:row-start-1 flex flex-col justify-center">
                    <h3 class="text-sky-600 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Efficiency meets intelligent
                    </h3>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-slate-900 mb-6 reveal-up delay-100 leading-tight">
                        EM-i <span class="text-gradient-cyan">super hybrid</span>
                    </h2>
                    <p class="text-slate-600 text-xs sm:text-sm md:text-base lg:text-lg font-normal leading-relaxed mb-4 lg:mb-10 reveal-up delay-200">
                        EM-i or E-Motive intelligence is Geely's advanced hybrid technology, combining the benefits of fuel and battery for greater efficiency, capability, and lower emissions.
                    </p>
                </div>

                <div class="order-2 lg:col-start-2 lg:row-start-1 relative reveal-left delay-300">
                    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/4 w-[80%] h-[60%] bg-sky-400/25 rounded-full blur-[100px] pointer-events-none z-0"></div>
                    <div class="glass-panel p-2.5 md:p-3 rounded-[1.5rem] md:rounded-[2rem] relative z-10 border border-sky-200 shadow-xl">
                        <div class="relative w-full aspect-video rounded-[1rem] md:rounded-[1.5rem] overflow-hidden bg-slate-900">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform md:hover:scale-105 transition-transform duration-700">
                                <source src="{{ asset('assets/videos/benefits-of-em-i.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="order-3 lg:col-start-2 lg:row-start-2 glass-panel p-5 sm:p-6 md:p-8 rounded-2xl md:rounded-3xl reveal-up delay-400 relative z-10 group overflow-hidden border border-sky-200 shadow-lg">
                    <div class="absolute -right-10 -top-10 w-32 h-32 bg-sky-400/25 rounded-full blur-[40px] group-hover:bg-sky-400/40 transition-colors duration-500"></div>
                    <h4 class="text-slate-900 font-bold text-base sm:text-lg md:text-2xl mb-2 md:mb-4 relative z-10 group-hover:text-sky-600 transition-colors drop-shadow-sm">
                        Highest Thermal Efficiency (46.5%)
                    </h4>
                    <p class="text-slate-600 text-xs sm:text-sm md:text-base lg:text-lg relative z-10 leading-relaxed group-hover:text-slate-800 transition-colors">
                        Globally leading platform thermal efficiency, surpassing industry standards.
                    </p>
                </div>

                <div class="order-4 lg:col-start-1 lg:row-start-2 glass-panel p-5 sm:p-6 md:p-8 rounded-2xl md:rounded-3xl reveal-up delay-300 relative group overflow-hidden border border-sky-200 shadow-lg">
                    <div class="absolute -right-10 -top-10 w-32 h-32 bg-blue-400/25 rounded-full blur-[40px] group-hover:bg-blue-400/40 transition-colors duration-500"></div>
                    <h4 class="text-slate-900 font-bold text-base sm:text-lg md:text-2xl mb-2 md:mb-4 relative z-10 group-hover:text-blue-600 transition-colors drop-shadow-sm">
                        High Efficiency Electric Drive
                    </h4>
                    <p class="text-slate-600 text-xs sm:text-sm md:text-base lg:text-lg relative z-10 leading-relaxed group-hover:text-slate-800 transition-colors">
                        Class-leading PHEV with high-efficiency drive and continuous variable voltage performance.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!-- GEELY APP REMOTE CONTROL SECTION -->
    <section id="app-remote" class="py-16 md:py-24 lg:py-32 relative z-30 bg-gradient-to-b from-[#e0f2fe] via-[#f0f9ff] to-[#e8f4fc] border-t border-sky-200">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-300/30 rounded-full blur-[150px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-300/20 rounded-full blur-[130px] pointer-events-none z-0"></div>

        <div class="max-w-[1600px] w-full mx-auto px-0 sm:px-8 md:px-12 lg:px-16 relative z-10">
            <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4">
                <h3 class="text-sky-600 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                    Effortless Convenience
                </h3>
                <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-slate-900 mb-6 reveal-up delay-100 leading-tight">
                    Geely App <span class="text-gradient-cyan">Remote Control</span>
                </h2>
                <p class="text-slate-600 text-xs sm:text-sm md:text-base lg:text-lg font-normal leading-relaxed reveal-up delay-200">
                    Geely App Remote Control puts effortless convenience in your hands. Drive with confidence knowing you’re always connected.
                </p>
            </div>

            <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-6 md:grid md:grid-cols-3 lg:gap-8 pb-8 md:pb-0 px-4 md:px-0">
                <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-100 group shadow-lg border border-sky-200 overflow-hidden">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/always-carghed.jpg-sPvzxctIegkiPhzC.webp" alt="Always Charged - Geely Smart Charging Management" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                    </div>
                    <div class="p-6 md:p-8">
                        <h4 class="text-slate-900 font-geely text-xl md:text-2xl mb-3 group-hover:text-sky-600 transition-colors">Always Charged</h4>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Schedule and monitor charging remotely to ensure your car is powered up when you need it. More convenience, more efficiency, all at your fingertips.
                        </p>
                    </div>
                </div>

                <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-200 group shadow-lg border border-sky-200 overflow-hidden">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/never-lost.jpg-9JUUSHg9iMEbQsEN.webp" alt="Never Lost - Geely GPS Car Finder" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                    </div>
                    <div class="p-6 md:p-8">
                        <h4 class="text-slate-900 font-geely text-xl md:text-2xl mb-3 group-hover:text-sky-600 transition-colors">Never Lost</h4>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Precision map positioning with a one-tap “Find my Car” feature. No more lost cars, park with confidence, locate with ease.
                        </p>
                    </div>
                </div>

                <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-300 group shadow-lg border border-sky-200 overflow-hidden">
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-slate-100">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/full-control.jpg-ycOYdP2jZuNB3u9w.webp" alt="Full Control - Smart Climate & Cabin Access" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                    </div>
                    <div class="p-6 md:p-8">
                        <h4 class="text-slate-900 font-geely text-xl md:text-2xl mb-3 group-hover:text-sky-600 transition-colors">Full Control</h4>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Pre-cool or warm up your car for ultimate comfort. Remotely unlock the doors for family. Check and control windows, doors, and vehicle status anytime.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-3 flex md:hidden justify-center items-center gap-2 text-sky-600 text-[9px] font-bold uppercase tracking-widest">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <!-- CUSTOMER DELIVERY MOMENTS SECTION -->
    <section id="customer-gallery" class="py-16 md:py-24 lg:py-32 relative z-30 bg-gradient-to-b from-[#e8f4fc] via-[#f0f8ff] to-[#e0f2fe] border-t border-sky-200 overflow-hidden">
        <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-sky-400/15 rounded-full blur-[150px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-blue-400/15 rounded-full blur-[150px] pointer-events-none z-0"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16 reveal-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-sky-300 bg-sky-100/60 mb-4 shadow-sm">
                    <span class="text-sky-700 text-[9px] md:text-[10px] font-bold tracking-[0.4em] uppercase">Happy Customers</span>
                </div>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-slate-900 leading-none">
                    Delivery <span class="text-gradient-cyan">Moments</span>
                </h2>
                <p class="mt-4 text-slate-600 text-sm md:text-base font-normal leading-relaxed">
                    Bergabunglah dengan keluarga besar Geely BSD. Berikut adalah momen bahagia para pelanggan setia kami saat menerima kendaraan impian mereka.
                </p>
            </div>

            <div class="relative w-full group" data-slider-wrapper>
                <button data-prev aria-label="Previous Slide" class="absolute left-2 md:-left-4 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/90 backdrop-blur-md border border-sky-200 text-sky-600 flex items-center justify-center hover:bg-sky-500 hover:text-white transition-all shadow-xl z-20 opacity-0 group-hover:opacity-100 hidden md:flex cursor-pointer disabled:opacity-0">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button data-next aria-label="Next Slide" class="absolute right-2 md:-right-4 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/90 backdrop-blur-md border border-sky-200 text-sky-600 flex items-center justify-center hover:bg-sky-500 hover:text-white transition-all shadow-xl z-20 opacity-0 group-hover:opacity-100 hidden md:flex cursor-pointer disabled:opacity-0">
                    <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <div data-slider class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-4 md:gap-6 pt-4 pb-12 px-4 md:px-0 -mx-4 md:mx-0 scroll-smooth">
                    @php
                        $customers = [
                            'assets/images/customer/IMG_4242.PNG',
                            'assets/images/customer/IMG_4243.PNG',
                        ];
                    @endphp

                    @foreach($customers as $index => $img)
                    @php $delayClass = $index % 3 == 0 ? 'delay-100' : ($index % 3 == 1 ? 'delay-200' : 'delay-300'); @endphp
                    <div class="flex-shrink-0 w-[75vw] sm:w-[45vw] md:w-[30vw] lg:w-[22vw] snap-center glass-panel rounded-[1.5rem] p-2.5 group cursor-pointer reveal-up {{ $delayClass }} transition-all duration-500 shadow-md hover:shadow-2xl hover:border-sky-400 border border-sky-200" onclick="openLightbox('{{ asset($img) }}', 'Delivery Moment {{ $index + 1 }}')">
                        <div class="relative w-full aspect-[4/5] rounded-[1rem] overflow-hidden bg-slate-100">
                            <img src="{{ asset($img) }}" alt="Customer Serah Terima Mobil Baru Geely BSD {{ $index + 1 }}" draggable="false" loading="lazy" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105 pointer-events-none select-none">
                            <div class="absolute inset-0 bg-sky-500/15 mix-blend-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-2 flex justify-center items-center gap-2 text-sky-600 text-[9px] font-bold uppercase tracking-widest">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe or drag to view
            </div>
        </div>
    </section>

    <!-- LATEST NEWS & INSIGHTS SECTION -->
    @php
        $latestArticles = \App\Models\Article::published()->take(3)->get();
    @endphp

    @if($latestArticles->isNotEmpty())
    <section id="news-insights" class="py-16 md:py-24 lg:py-32 relative z-30 bg-gradient-to-b from-[#e0f2fe] via-white to-[#e8f4fd] border-t border-sky-200 overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-sky-300/20 rounded-full blur-[140px] pointer-events-none z-0"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6 reveal-up">
                <div>
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-sky-300 bg-sky-100/60 mb-4 shadow-sm">
                        <span class="text-sky-700 text-[9px] md:text-[10px] font-bold tracking-[0.4em] uppercase">Berita & Informasi Geely</span>
                    </div>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-6xl uppercase tracking-tighter text-slate-900 leading-none">
                        Latest <span class="text-gradient-cyan">Articles & Insights</span>
                    </h2>
                </div>
                <div class="text-right">
                    <p class="text-slate-600 text-xs sm:text-sm max-w-sm ml-auto font-normal mb-3">
                        Dapatkan ulasan terkini seputar inovasi kendaraan listrik, promo dealer BSD, dan tips teknologi otomotif masa depan.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($latestArticles as $art)
                    <article class="glass-panel rounded-[24px] overflow-hidden group hover:border-sky-400 transition-all duration-500 shadow-xl flex flex-col justify-between border border-sky-200">
                        <div>
                            <div class="relative w-full aspect-[16/10] overflow-hidden bg-slate-100">
                                <img src="{{ $art->image_url }}" alt="{{ $art->title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md border border-sky-200 text-[9px] font-bold uppercase tracking-wider text-sky-800 shadow-sm">
                                    {{ $art->category }}
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="text-[10px] text-slate-500 mb-2">{{ $art->formatted_date }} &bull; {{ $art->reading_time }} mnt baca</div>
                                <h3 class="font-geely text-xl text-slate-900 group-hover:text-sky-600 transition-colors line-clamp-2 uppercase tracking-tight mb-2">
                                    {{ $art->title }}
                                </h3>
                                <p class="text-slate-600 text-xs line-clamp-3 leading-relaxed font-normal">
                                    {{ $art->excerpt }}
                                </p>
                            </div>
                        </div>

                        <div class="p-6 pt-0">
                            <a href="{{ route('news.show', $art->slug) }}" class="inline-flex items-center gap-2 text-xs font-bold tracking-wider text-sky-600 group-hover:text-blue-700 uppercase transition-colors">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- FIRST VISIT PROMO MODAL -->
    <div id="first-visit-cta-modal" class="fixed inset-0 z-[9990] hidden items-center justify-center bg-slate-900/60 backdrop-blur-md opacity-0 transition-opacity duration-500 p-4 sm:p-6" onclick="closeFirstVisitCta(event)">
        <div class="relative w-full max-w-lg md:max-w-xl bg-gradient-to-b from-white to-[#f0f9ff] border border-sky-300 rounded-3xl p-3 sm:p-4 cta-modal-pulse transform scale-95 transition-all duration-500 shadow-2xl" onclick="event.stopPropagation()">
            <button onclick="closeFirstVisitCta(null)" aria-label="Tutup Promo" class="absolute -top-3 -right-3 md:-top-4 md:-right-4 w-10 h-10 md:w-11 md:h-11 rounded-full bg-white border border-sky-200 text-slate-700 flex items-center justify-center hover:text-sky-600 hover:border-sky-400 hover:scale-110 transition-all z-20 shadow-xl cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="absolute -top-10 -left-10 w-40 h-40 bg-sky-400/20 rounded-full blur-[50px] pointer-events-none"></div>
            <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-blue-500/20 rounded-full blur-[50px] pointer-events-none"></div>

            <a href="/test-drive" onclick="setPromoCookie();" title="Penawaran Eksklusif Geely BSD" class="block relative w-full overflow-hidden rounded-2xl group border border-sky-100 hover:border-sky-400 transition-colors duration-300">
                <img src="{{ asset('assets/a.png') }}" alt="Promo Spesial Pengunjung Baru Geely BSD" class="w-full h-auto max-h-[75vh] object-contain mx-auto transform group-hover:scale-[1.02] transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-sky-950/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center p-4">
                    <span class="text-white text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase bg-sky-600/90 backdrop-blur-md px-6 py-2.5 rounded-full border border-sky-300/50 shadow-lg">
                        Klaim Promo Sekarang &rarr;
                    </span>
                </div>
            </a>
        </div>
    </div>

    <!-- LIGHTBOX PREVIEW MODAL -->
    <div id="lightbox" class="fixed inset-0 hidden items-center justify-center bg-slate-950/85 backdrop-blur-md opacity-0 transition-opacity duration-300" style="z-index: 9999;" onclick="closeLightbox(event)">
        <button onclick="closeLightbox(event)" aria-label="Close Preview" class="absolute top-6 right-6 md:top-10 md:right-10 text-white/70 hover:text-white transition-colors bg-black/40 p-2.5 rounded-full border border-white/20 hover:bg-white/20 cursor-pointer" style="z-index: 10000;">
            <svg class="w-7 h-7 md:w-9 md:h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div class="relative w-full max-w-7xl h-full flex flex-col items-center justify-center p-4 md:p-12 pointer-events-none">
            <div class="relative max-h-[80vh] w-full flex justify-center items-center group pointer-events-auto">
                <img id="lightbox-img" src="" alt="Fullscreen preview" class="max-w-full max-h-[75vh] md:max-h-[85vh] object-contain rounded-2xl shadow-2xl transition-transform duration-300 transform scale-95 border border-white/10">
                <div id="lightbox-loader" class="absolute inset-0 flex items-center justify-center -z-10">
                    <div class="w-10 h-10 border-4 border-sky-300/30 border-t-sky-400 rounded-full animate-spin"></div>
                </div>
            </div>
            
            <div class="mt-6 md:mt-8 pointer-events-auto text-center">
                <p id="lightbox-caption" class="font-geely text-sky-300 text-lg md:text-2xl tracking-widest uppercase drop-shadow-md font-semibold"></p>
            </div>
        </div>
    </div>

    <script>
        const PROMO_COOKIE_NAME = 'geely_bsd_promo_seen';
        const PROMO_STORAGE_KEY = 'geely_bsd_has_seen_first_visit_cta';

        function setPromoCookie(days = 30) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = `${PROMO_COOKIE_NAME}=true; expires=${date.toUTCString()}; path=/; SameSite=Lax`;
            
            try {
                localStorage.setItem(PROMO_STORAGE_KEY, 'true');
            } catch (e) {}
        }

        function getPromoCookie() {
            const match = document.cookie.match(new RegExp('(^| )' + PROMO_COOKIE_NAME + '=([^;]+)'));
            if (match) return match[2];

            try {
                return localStorage.getItem(PROMO_STORAGE_KEY);
            } catch (e) {
                return null;
            }
        }

        function showFirstVisitCta() {
            const modal = document.getElementById('first-visit-cta-modal');
            if (!modal) return;

            const modalDialog = modal.querySelector('div');
            modal.classList.remove('hidden');
            modal.classList.add('flex');

            requestAnimationFrame(() => {
                modal.classList.remove('opacity-0');
                modal.classList.add('opacity-100');
                if (modalDialog) {
                    modalDialog.classList.remove('scale-95');
                    modalDialog.classList.add('scale-100');
                }
            });

            document.body.classList.add('cta-modal-open');
            setPromoCookie();
        }

        function closeFirstVisitCta(e) {
            if (e && e.target !== e.currentTarget && !e.target.closest('button')) return;

            const modal = document.getElementById('first-visit-cta-modal');
            if (!modal) return;

            const modalDialog = modal.querySelector('div');
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0');

            if (modalDialog) {
                modalDialog.classList.remove('scale-100');
                modalDialog.classList.add('scale-95');
            }

            setPromoCookie();

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.classList.remove('cta-modal-open');
            }, 500);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const hasSeenPromo = getPromoCookie();
            if (!hasSeenPromo) {
                setTimeout(() => {
                    showFirstVisitCta();
                }, 1200);
            }

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-scale');
            revealElements.forEach(el => revealObserver.observe(el));

            // Slider drag & navigation logic
            document.querySelectorAll('[data-slider-wrapper]').forEach(wrapper => {
                const slider = wrapper.querySelector('[data-slider]');
                const prevBtn = wrapper.querySelector('[data-prev]');
                const nextBtn = wrapper.querySelector('[data-next]');

                if (slider && prevBtn && nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: slider.clientWidth * 0.8, behavior: 'smooth' });
                    });
                    prevBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: -slider.clientWidth * 0.8, behavior: 'smooth' });
                    });
                    
                    let isDown = false;
                    let startX;
                    let scrollLeft;
                    let isDragging = false;

                    slider.addEventListener('mousedown', (e) => {
                        isDown = true;
                        isDragging = false;
                        slider.style.cursor = 'grabbing';
                        startX = e.pageX - slider.offsetLeft;
                        scrollLeft = slider.scrollLeft;
                    });
                    
                    slider.addEventListener('mouseleave', () => {
                        isDown = false;
                        slider.style.cursor = 'grab';
                    });
                    
                    slider.addEventListener('mouseup', () => {
                        isDown = false;
                        slider.style.cursor = 'grab';
                    });
                    
                    slider.addEventListener('mousemove', (e) => {
                        if (!isDown) return;
                        e.preventDefault();
                        isDragging = true;
                        const x = e.pageX - slider.offsetLeft;
                        const walk = (x - startX) * 2;
                        slider.scrollLeft = scrollLeft - walk;
                    });

                    const clickableItems = slider.querySelectorAll('[onclick], a');
                    clickableItems.forEach(item => {
                        item.addEventListener('click', (e) => {
                            if (isDragging) {
                                e.preventDefault();
                                e.stopPropagation();
                            }
                        }, true);
                    });
                }
            });

            // Lineup Slider Logic
            const lineupSlider = document.getElementById('lineup-slider');
            const lineupPrev = document.getElementById('lineup-prev');
            const lineupNext = document.getElementById('lineup-next');
            const lineupDots = document.getElementById('lineup-pagination-dots');
            const lineupIndicator = document.getElementById('lineup-page-indicator');
            const lineupTotal = document.getElementById('lineup-page-total');
            const lineupProgress = document.getElementById('lineup-progress-bar');

            if (lineupSlider && lineupPrev && lineupNext) {
                const cards = lineupSlider.querySelectorAll('[data-lineup-card]');
                
                function getPagesCount() {
                    if (window.innerWidth < 768) {
                        return cards.length;
                    }
                    const sliderWidth = lineupSlider.clientWidth;
                    const scrollWidth = lineupSlider.scrollWidth;
                    const maxScroll = scrollWidth - sliderWidth;
                    if (maxScroll <= 10) return 1;
                    const cardWidth = cards[0] ? cards[0].offsetWidth + 24 : sliderWidth;
                    const visibleCards = Math.max(1, Math.round((sliderWidth + 24) / cardWidth));
                    return Math.max(1, Math.ceil(cards.length / visibleCards));
                }

                let totalPages = getPagesCount();

                function renderPagination() {
                    totalPages = getPagesCount();
                    if (lineupTotal) lineupTotal.textContent = String(totalPages).padStart(2, '0');
                    if (!lineupDots) return;

                    lineupDots.innerHTML = '';
                    for (let i = 0; i < totalPages; i++) {
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = `lineup-page-btn w-8 h-8 md:w-9 md:h-9 rounded-full text-[11px] font-mono font-bold transition-all duration-300 flex items-center justify-center cursor-pointer ${
                            i === 0 
                                ? 'bg-sky-500 text-white shadow-[0_0_15px_rgba(14,165,233,0.5)] font-extrabold' 
                                : 'text-slate-600 hover:text-slate-900 bg-white/70 border border-sky-200 hover:border-sky-400'
                        }`;
                        btn.textContent = String(i + 1).padStart(2, '0');
                        btn.setAttribute('aria-label', `Halaman ${i + 1}`);
                        btn.addEventListener('click', () => goToPage(i));
                        lineupDots.appendChild(btn);
                    }
                    updateControls();
                }

                function getCurrentPage() {
                    if (window.innerWidth < 768) {
                        const sliderCenter = lineupSlider.scrollLeft + lineupSlider.clientWidth / 2;
                        let closestIdx = 0;
                        let minDiff = Infinity;
                        cards.forEach((card, idx) => {
                            const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                            const diff = Math.abs(sliderCenter - cardCenter);
                            if (diff < minDiff) {
                                minDiff = diff;
                                closestIdx = idx;
                            }
                        });
                        return closestIdx;
                    }
                    const maxScroll = lineupSlider.scrollWidth - lineupSlider.clientWidth;
                    if (maxScroll <= 10) return 0;
                    const scrollLeft = lineupSlider.scrollLeft;
                    if (scrollLeft >= maxScroll - 20) return totalPages - 1;
                    const cardWidth = cards[0] ? cards[0].offsetWidth + 24 : lineupSlider.clientWidth;
                    const visibleCards = Math.max(1, Math.round((lineupSlider.clientWidth + 24) / cardWidth));
                    const page = Math.floor((scrollLeft + 20) / (visibleCards * cardWidth));
                    return Math.min(Math.max(0, page), totalPages - 1);
                }

                function updateControls() {
                    const currentPage = getCurrentPage();
                    if (lineupIndicator) lineupIndicator.textContent = String(currentPage + 1).padStart(2, '0');
                    
                    if (lineupProgress) {
                        const progress = totalPages > 1 ? ((currentPage + 1) / totalPages) * 100 : 100;
                        lineupProgress.style.width = `${progress}%`;
                    }

                    const buttons = lineupDots ? lineupDots.querySelectorAll('.lineup-page-btn') : [];
                    buttons.forEach((btn, idx) => {
                        if (idx === currentPage) {
                            btn.className = 'lineup-page-btn w-8 h-8 md:w-9 md:h-9 rounded-full text-[11px] font-mono font-extrabold bg-sky-500 text-white shadow-[0_0_15px_rgba(14,165,233,0.5)] transition-all duration-300 flex items-center justify-center cursor-pointer';
                        } else {
                            btn.className = 'lineup-page-btn w-8 h-8 md:w-9 md:h-9 rounded-full text-[11px] font-mono font-bold text-slate-600 hover:text-slate-900 bg-white/70 border border-sky-200 hover:border-sky-400 transition-all duration-300 flex items-center justify-center cursor-pointer';
                        }
                    });

                    lineupPrev.disabled = currentPage === 0;
                    lineupNext.disabled = currentPage >= totalPages - 1;
                }

                function goToPage(pageIndex) {
                    if (!cards[pageIndex]) return;
                    if (window.innerWidth < 768) {
                        const targetCard = cards[pageIndex];
                        const targetLeft = targetCard.offsetLeft - (lineupSlider.clientWidth - targetCard.offsetWidth) / 2;
                        lineupSlider.scrollTo({ left: targetLeft, behavior: 'smooth' });
                    } else {
                        const maxScroll = lineupSlider.scrollWidth - lineupSlider.clientWidth;
                        if (pageIndex >= totalPages - 1) {
                            lineupSlider.scrollTo({ left: maxScroll, behavior: 'smooth' });
                        } else {
                            const cardWidth = cards[0] ? cards[0].offsetWidth + 24 : lineupSlider.clientWidth;
                            const visibleCards = Math.max(1, Math.round((lineupSlider.clientWidth + 24) / cardWidth));
                            const targetScroll = Math.min(pageIndex * visibleCards * cardWidth, maxScroll);
                            lineupSlider.scrollTo({ left: targetScroll, behavior: 'smooth' });
                        }
                    }
                }

                lineupPrev.addEventListener('click', () => {
                    const current = getCurrentPage();
                    if (current > 0) goToPage(current - 1);
                });

                lineupNext.addEventListener('click', () => {
                    const current = getCurrentPage();
                    if (current < totalPages - 1) goToPage(current + 1);
                });

                lineupSlider.addEventListener('scroll', () => {
                    requestAnimationFrame(updateControls);
                });

                if (window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
                    let isDown = false;
                    let startX;
                    let scrollLeft;
                    let isDragging = false;

                    lineupSlider.addEventListener('mousedown', (e) => {
                        isDown = true;
                        isDragging = false;
                        startX = e.pageX - lineupSlider.offsetLeft;
                        scrollLeft = lineupSlider.scrollLeft;
                    });

                    lineupSlider.addEventListener('mouseleave', () => { isDown = false; });
                    lineupSlider.addEventListener('mouseup', () => { isDown = false; });

                    lineupSlider.addEventListener('mousemove', (e) => {
                        if (!isDown) return;
                        e.preventDefault();
                        isDragging = true;
                        const x = e.pageX - lineupSlider.offsetLeft;
                        const walk = (x - startX) * 1.5;
                        lineupSlider.scrollLeft = scrollLeft - walk;
                    });

                    const clickableLinks = lineupSlider.querySelectorAll('a');
                    clickableLinks.forEach(item => {
                        item.addEventListener('click', (e) => {
                            if (isDragging) {
                                e.preventDefault();
                                e.stopPropagation();
                            }
                        }, true);
                    });
                }

                window.addEventListener('resize', renderPagination);
                renderPagination();
            }
        });

        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');

        function openLightbox(imgSrc, caption, isLightImage = false) {
            lightboxImg.src = imgSrc;
            lightboxCaption.textContent = caption;
            
            if(isLightImage) {
                lightboxImg.classList.add('bg-white', 'p-8');
            } else {
                lightboxImg.classList.remove('bg-white', 'p-8');
            }

            lightboxImg.classList.replace('scale-95', 'scale-100');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            
            requestAnimationFrame(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.classList.add('opacity-100');
            });

            document.body.classList.add('lightbox-open');
        }

        function closeLightbox(e) {
            if (e && e.target === lightboxImg) return;

            lightboxImg.classList.replace('scale-100', 'scale-95');
            lightbox.classList.remove('opacity-100');
            lightbox.classList.add('opacity-0');

            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lightboxImg.src = '';
                document.body.classList.remove('lightbox-open');
            }, 300);
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (!lightbox.classList.contains('hidden')) {
                    closeLightbox();
                }
                const firstVisitModal = document.getElementById('first-visit-cta-modal');
                if (firstVisitModal && !firstVisitModal.classList.contains('hidden')) {
                    closeFirstVisitCta(null);
                }
            }
        });
    </script>

    <!-- SCHEMA JSON-LD STRUCTURED DATA -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "AutoDealer",
          "name": "Dealer Resmi Geely BSD City",
          "image": "{{ asset('assets/images/ex5/dama.jpeg') }}",
          "@@id": "https://geelybsd.id",
          "url": "https://geelybsd.id",
          "telephone": "+6281214112446", 
          "description": "Dealer mobil listrik resmi Geely BSD Tangerang. Melayani test drive, pembelian tunai/kredit dengan simulasi instan, promo bunga spesial, dan servis resmi Geely EX5, EX2, dan Starray EM-i.",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "BSD City",
            "addressLocality": "Tangerang Selatan",
            "addressRegion": "Banten",
            "postalCode": "15322",
            "addressCountry": "ID"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": -6.3023, 
            "longitude": 106.6521
          },
          "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:30",
            "closes": "17:30"
          },
          "priceRange": "$$$"
        },
        {
          "@@type": "ItemList",
          "itemListElement": [
            {
              "@@type": "ListItem",
              "position": 1,
              "name": "Geely EX5",
              "url": "https://geelybsd.id/models/ex5"
            },
            {
              "@@type": "ListItem",
              "position": 2,
              "name": "Geely EX2",
              "url": "https://geelybsd.id/models/ex2"
            },
            {
              "@@type": "ListItem",
              "position": 3,
              "name": "Starray EM-i",
              "url": "https://geelybsd.id/models/starray-em-i"
            },
            {
              "@@type": "ListItem",
              "position": 4,
              "name": "Geely Coolray",
              "url": "https://geelybsd.id/models/coolray"
            }
          ]
        }
      ]
    }
    </script>
</x-layouts.app>