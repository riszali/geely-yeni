<x-layouts.app>
    @push('head')
        <title>Trade-In Mobil Geely Wonder Alam Sutera | Tukar Tambah Semua Merk Mobil ke Geely EX5, EX2 & Coolray</title>
        <meta name="description" content="Program resmi tukar tambah (Trade-In) mobil lama semua merk ke unit Geely EX5, EX2, Starray EM-i, dan Coolray di Geely Wonder Alam Sutera. Dapatkan appraisal transparan 150+ titik inspeksi, subsidi cashback trade-in, dan layanan Free Home Inspection bersama Sales YENNI.">
        <meta name="keywords" content="Trade in Geely, Tukar Tambah Mobil Bekas Geely, Trade In Geely Alam Sutera, Jual Mobil Beli Geely EX5, Trade in EX2 Tangerang, Promo Trade in Geely Coolray, Appraisal Mobil Bekas Tangerang, Sales Geely Yenni">
        <link rel="canonical" href="https://geelybsd.id/trade-in">
        <meta name="robots" content="index, follow">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:locale" content="id_ID">
        <meta property="og:url" content="https://geelybsd.id/trade-in">
        <meta property="og:site_name" content="Geely Wonder Alam Sutera">
        <meta property="og:title" content="Trade-In Mobil Geely Wonder Alam Sutera | Tukar Tambah Semua Merk ke Unit Geely Baru">
        <meta property="og:description" content="Tukar mobil lama Anda sekarang dengan mobil listrik & hybrid Geely. Penilaian harga transparan, subsidi cashback trade-in, dan mobil lama tetap bisa Anda gunakan sampai mobil baru Geely Anda serah terima.">
        <meta property="og:image" content="{{ asset('assets/images/ex5/dama.jpeg') }}">

        <!-- Twitter Card -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://geelybsd.id/trade-in">
        <meta property="twitter:title" content="Trade-In Mobil Geely Wonder Alam Sutera">
        <meta property="twitter:description" content="Program Trade-In resmi Geely Wonder Alam Sutera bersama Sales Consultant YENNI. Taksasi cepat dan transparan untuk semua merk mobil.">
        <meta property="twitter:image" content="{{ asset('assets/images/ex5/dama.jpeg') }}">
    @endpush

    <style>
        html, body { 
            scroll-behavior: smooth; 
            background: #f0f9ff; 
            color: #0f172a;
            overflow-x: hidden; 
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

        /* Light Blue Glassmorphism Panel Tokens */
        .glass-panel {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
            border: 1px solid rgba(186, 230, 253, 0.75);
            border-top: 1px solid rgba(255, 255, 255, 0.95);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.12), 0 4px 12px rgba(186, 230, 253, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.9);
        }

        .glass-panel-light {
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(224, 242, 254, 0.9);
            box-shadow: 0 15px 35px -10px rgba(14, 165, 233, 0.08), inset 0 1px 0 rgba(255, 255, 255, 1);
        }

        /* Form Input Tokens */
        .light-input {
            background: #ffffff;
            border: 1px solid rgba(186, 230, 253, 0.9);
            color: #0f172a;
            transition: all 0.25s ease;
        }
        .light-input:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.18);
            outline: none;
        }

        /* Liquid Typography */
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

        /* Shimmer Button Effect */
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
            animation: shimmer 3.5s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer {
            100% { transform: rotate(45deg) translateX(100%); }
        }

        /* Clean Accordion Details */
        details summary::-webkit-details-marker {
            display: none;
        }
        details[open] summary svg {
            transform: rotate(180deg);
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <div class="relative min-h-screen bg-gradient-to-b from-[#e0f2fe] via-[#f0f9ff] to-[#e0f2fe] overflow-hidden pb-24">
        <!-- Ambient Background Orbs -->
        <div class="absolute top-10 left-1/4 w-[700px] h-[700px] bg-sky-300/30 rounded-full blur-[160px] pointer-events-none z-0"></div>
        <div class="absolute bottom-10 right-1/4 w-[600px] h-[600px] bg-cyan-200/35 rounded-full blur-[160px] pointer-events-none z-0"></div>
        <div class="absolute inset-0 z-0 bg-noise"></div>

        <!-- ==========================================
             HERO HEADER SECTION
        =========================================== -->
        <section class="relative z-10 pt-28 sm:pt-32 md:pt-36 pb-12 max-w-[1600px] mx-auto px-4 sm:px-8 md:px-12 lg:px-16 text-center">
            
            <h1 class="font-geely text-2xl sm:text-4xl md:text-5xl lg:text-[52px] xl:text-6xl font-black uppercase tracking-tight text-slate-900 leading-[1.15] mb-5 sm:mb-6 mx-auto">
                <span class="block sm:whitespace-nowrap">Tukar Tambah Mobil Lama</span>
                <span class="text-liquid block mt-1.5 sm:mt-2 sm:whitespace-nowrap">Ke Mobil Baru Geely</span>
            </h1>
            
            <p class="text-slate-600 text-sm sm:text-base md:text-lg font-normal max-w-3xl mx-auto leading-relaxed mb-10 sm:mb-12">
                Wujudkan mobilitas masa depan Anda bersama Geely. Nikmati proses appraisal transparan dengan 150+ titik inspeksi, penawaran harga kompetitif, subsidi cashback trade-in spesial, dan layanan Free Home Inspection langsung di kediaman Anda.
            </p>

            <!-- 4 Keunggulan Utama Bento Bar (Full-Width Grid) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 text-left">
                <div class="p-6 rounded-[24px] glass-panel-light border border-sky-200 shadow-sm flex items-start gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <div class="w-12 h-12 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-lg shrink-0 border border-sky-200">
                        ✓
                    </div>
                    <div>
                        <h4 class="text-sm sm:text-base font-bold text-slate-900">Semua Merk & Tipe</h4>
                        <p class="text-xs text-slate-500 leading-relaxed mt-1">Mobil Jepang, Eropa, Korea, hingga EV lama diterima dengan taksasi terbaik.</p>
                    </div>
                </div>

                <div class="p-6 rounded-[24px] glass-panel-light border border-sky-200 shadow-sm flex items-start gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <div class="w-12 h-12 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-lg shrink-0 border border-sky-200">
                        ✓
                    </div>
                    <div>
                        <h4 class="text-sm sm:text-base font-bold text-slate-900">Taksasi Transparan</h4>
                        <p class="text-xs text-slate-500 leading-relaxed mt-1">Standar inspeksi 150+ titik pada kondisi sasis, kelistrikan, dan mesin mobil.</p>
                    </div>
                </div>

                <div class="p-6 rounded-[24px] glass-panel-light border border-sky-200 shadow-sm flex items-start gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <div class="w-12 h-12 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-lg shrink-0 border border-sky-200">
                        ✓
                    </div>
                    <div>
                        <h4 class="text-sm sm:text-base font-bold text-slate-900">Subsidi Diskon Khusus</h4>
                        <p class="text-xs text-slate-500 leading-relaxed mt-1">Tambahan subsidi cashback dan paket pembiayaan bunga spesial trade-in Geely.</p>
                    </div>
                </div>

                <div class="p-6 rounded-[24px] glass-panel-light border border-sky-200 shadow-sm flex items-start gap-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                    <div class="w-12 h-12 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-lg shrink-0 border border-sky-200">
                        ✓
                    </div>
                    <div>
                        <h4 class="text-sm sm:text-base font-bold text-slate-900">Free Home Inspection</h4>
                        <p class="text-xs text-slate-500 leading-relaxed mt-1">Tim appraiser bersertifikasi siap datang langsung ke rumah atau kantor Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             WORKFLOW 4 LANGKAH TRADE-IN (LEGA)
        =========================================== -->
        <section class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-8 md:px-12 lg:px-16 mb-16 sm:mb-20">
            <div class="glass-panel rounded-[32px] md:rounded-[40px] p-6 sm:p-10 md:p-14 border border-sky-200 shadow-xl overflow-hidden">
                <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-12">
                    <span class="text-sky-700 text-xs font-bold tracking-[0.3em] uppercase block mb-2">Simple & Seamless Process</span>
                    <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl font-bold uppercase text-slate-900 tracking-tight">Alur Mudah Trade-In 4 Langkah</h2>
                </div>

                <!-- Slider di HP (Horizontal Swipe Snap), Grid di Tablet & Desktop -->
                <div class="flex sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 overflow-x-auto sm:overflow-x-visible overflow-y-hidden hide-scrollbar snap-x snap-mandatory -mx-3 px-3 sm:mx-0 sm:px-0 pb-3 sm:pb-0">
                    <div class="flex-shrink-0 w-[82vw] sm:w-auto snap-center p-6 rounded-[24px] bg-white/85 border border-sky-100 shadow-sm flex flex-col justify-between transition-transform duration-300">
                        <div>
                            <span class="text-3xl font-black font-geely text-sky-400 block mb-3">01</span>
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Isi Formulir Online</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Masukkan spesifikasi mobil lama Anda dan pilih varian Geely baru impian pada form di bawah.</p>
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-[82vw] sm:w-auto snap-center p-6 rounded-[24px] bg-white/85 border border-sky-100 shadow-sm flex flex-col justify-between transition-transform duration-300">
                        <div>
                            <span class="text-3xl font-black font-geely text-sky-400 block mb-3">02</span>
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Estimasi & Penjadwalan</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Sales YENNI akan mengonfirmasi estimasi taksasi awal dan mengatur jadwal inspeksi yang fleksibel.</p>
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-[82vw] sm:w-auto snap-center p-6 rounded-[24px] bg-white/85 border border-sky-100 shadow-sm flex flex-col justify-between transition-transform duration-300">
                        <div>
                            <span class="text-3xl font-black font-geely text-sky-400 block mb-3">03</span>
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Inspeksi Transparan</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Pengecekan fisik 150+ titik di Showroom Alam Sutera atau tim inspektur kami kunjungi rumah Anda.</p>
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-[82vw] sm:w-auto snap-center p-6 rounded-[24px] bg-white/85 border border-sky-100 shadow-sm flex flex-col justify-between transition-transform duration-300">
                        <div>
                            <span class="text-3xl font-black font-geely text-sky-400 block mb-3">04</span>
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider mb-2">Serah Terima Geely Baru</h4>
                            <p class="text-xs text-slate-600 leading-relaxed">Nilai mobil lama langsung jadi DP atau pelunasan. Mobil lama tetap bisa dipakai sampai unit Geely tiba!</p>
                        </div>
                    </div>
                </div>

                <!-- Petunjuk Swipe khusus di Layar Ponsel -->
                <div class="text-center mt-3 flex sm:hidden justify-center items-center gap-2 text-sky-600 text-[10px] font-bold uppercase tracking-widest">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    Geser untuk melihat langkah berikutnya
                </div>
            </div>
        </section>

        <!-- ==========================================
             FORM TRADE-IN & PROFIL SALES SECTION
        =========================================== -->
        <section class="relative z-10 max-w-[1600px] mx-auto px-4 sm:px-8 md:px-12 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- KOLOM KIRI: FORMULIR ONLINE LUAS & LEGA -->
                <div class="lg:col-span-8 glass-panel rounded-[32px] md:rounded-[40px] p-6 sm:p-10 md:p-14 border border-sky-200 shadow-xl">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-6 border-b border-sky-100 gap-4 mb-8 sm:mb-10">
                        <div>
                            <span class="text-sky-600 text-xs font-bold tracking-[0.25em] uppercase block mb-1">Online Valuation Form</span>
                            <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl text-slate-900 uppercase font-bold tracking-tight">Formulir Taksasi Mobil</h2>
                        </div>
                        <span class="inline-flex items-center px-4 py-2 bg-sky-100 text-sky-800 text-xs font-bold rounded-full w-max shadow-xs">
                            Estimasi Cepat 1x24 Jam
                        </span>
                    </div>

                    <form id="tradeInForm" class="space-y-10" onsubmit="handleTradeInSubmit(event)">
                        @csrf

                        <!-- LANGKAH 1: DATA MOBIL LAMA -->
                        <div>
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-8 h-8 rounded-full bg-sky-600 text-white font-bold text-sm flex items-center justify-center shadow-xs">1</span>
                                <h3 class="font-geely text-xl sm:text-2xl text-slate-900 uppercase tracking-tight font-bold">Informasi Mobil Lama Anda</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <!-- Merk -->
                                <div>
                                    <label for="oldBrand" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Merk Mobil Lama <span class="text-rose-500">*</span></label>
                                    <select id="oldBrand" required class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium cursor-pointer shadow-xs">
                                        <option value="" disabled selected>Pilih Merk Kendaraan...</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Mitsubishi">Mitsubishi</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Wuling">Wuling</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Daihatsu">Daihatsu</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="BYD">BYD</option>
                                        <option value="Chery">Chery</option>
                                        <option value="MG">MG</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Lainnya">Merk Lainnya</option>
                                    </select>
                                </div>

                                <!-- Model / Tipe -->
                                <div>
                                    <label for="oldModel" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Tipe / Model Mobil <span class="text-rose-500">*</span></label>
                                    <input type="text" id="oldModel" required placeholder="Contoh: Innova Zenix / HR-V Prestige / Ioniq 5" class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium shadow-xs">
                                </div>

                                <!-- Tahun Pembuatan -->
                                <div>
                                    <label for="oldYear" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Tahun Pembuatan <span class="text-rose-500">*</span></label>
                                    <select id="oldYear" required class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium cursor-pointer shadow-xs">
                                        <option value="" disabled selected>Pilih Tahun...</option>
                                        @for ($year = 2026; $year >= 2010; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                        <option value="Sebelum 2010">Sebelum 2010</option>
                                    </select>
                                </div>

                                <!-- Transmisi -->
                                <div>
                                    <label class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Transmisi <span class="text-rose-500">*</span></label>
                                    <div class="grid grid-cols-2 gap-3">
                                        <label class="cursor-pointer">
                                            <input type="radio" name="oldTransmission" value="Automatic" class="peer sr-only" checked>
                                            <div class="text-center py-3.5 border border-sky-200 rounded-2xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs sm:text-sm font-bold transition-all shadow-xs">
                                                Automatic (AT/CVT)
                                            </div>
                                        </label>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="oldTransmission" value="Manual" class="peer sr-only">
                                            <div class="text-center py-3.5 border border-sky-200 rounded-2xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs sm:text-sm font-bold transition-all shadow-xs">
                                                Manual (MT)
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <!-- Jarak Tempuh / Odometer -->
                                <div>
                                    <label for="oldMileage" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Jarak Tempuh (Odometer) <span class="text-rose-500">*</span></label>
                                    <select id="oldMileage" required class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium cursor-pointer shadow-xs">
                                        <option value="" disabled selected>Pilih Odometer...</option>
                                        <option value="< 20.000 km">&lt; 20.000 km (Sangat Rendah)</option>
                                        <option value="20.000 - 50.000 km">20.000 - 50.000 km (Rendah)</option>
                                        <option value="50.000 - 100.000 km">50.000 - 100.000 km (Sedang)</option>
                                        <option value="> 100.000 km">&gt; 100.000 km (Tinggi)</option>
                                    </select>
                                </div>

                                <!-- Kondisi Fisik & Mesin -->
                                <div>
                                    <label for="oldCondition" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Kondisi Fisik & Mesin <span class="text-rose-500">*</span></label>
                                    <select id="oldCondition" required class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium cursor-pointer shadow-xs">
                                        <option value="Istimewa (Bebas Tabrak & Banjir, Service Record)" selected>Istimewa (Bebas Tabrak & Banjir, Service Record)</option>
                                        <option value="Sangat Baik Terawat">Sangat Baik Terawat (Pemakaian Normal)</option>
                                        <option value="Standar Pemakaian Harian">Standar Pemakaian Harian</option>
                                        <option value="Ada Baret Halus / Lecet Pemakaian">Ada Baret Halus / Lecet Pemakaian</option>
                                        <option value="Perlu Perbaikan / Servis">Perlu Perbaikan / Servis Ringan</option>
                                    </select>
                                </div>

                                <!-- Ekspektasi Harga -->
                                <div class="sm:col-span-2">
                                    <label for="oldExpectedPrice" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Ekspektasi Harga Mobil Anda (Opsional)</label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sky-700 font-bold text-sm">Rp</span>
                                        <input type="text" id="oldExpectedPrice" placeholder="Contoh: 250.000.000" class="w-full pl-12 pr-4 py-3.5 rounded-2xl light-input text-sm font-medium shadow-xs" onkeyup="formatCurrency(this)">
                                    </div>
                                    <p class="text-xs text-slate-400 mt-1.5">Kosongkan jika Anda ingin mengandalkan taksasi pasar resmi dari tim appraiser Geely.</p>
                                </div>
                            </div>
                        </div>

                        <!-- LANGKAH 2: MOBIL BARU GEELY -->
                        <div class="pt-8 border-t border-sky-100">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-8 h-8 rounded-full bg-sky-600 text-white font-bold text-sm flex items-center justify-center shadow-xs">2</span>
                                <h3 class="font-geely text-xl sm:text-2xl text-slate-900 uppercase tracking-tight font-bold">Mobil Baru Geely Pilihan Anda</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="sm:col-span-2">
                                    <label for="targetGeely" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Pilih Model & Varian Geely <span class="text-rose-500">*</span></label>
                                    <select id="targetGeely" required class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium cursor-pointer shadow-xs">
                                        <option value="" disabled selected>Pilih Model Geely Impian Anda...</option>
                                        <optgroup label="Geely EX5 (Electric Smart SUV)">
                                            <option value="Geely EX5 PRO (Rp 465.000.000)">Geely EX5 PRO - Rp 465.000.000</option>
                                            <option value="Geely EX5 MAX (Rp 505.000.000)">Geely EX5 MAX - Rp 505.000.000</option>
                                        </optgroup>
                                        <optgroup label="Geely EX2 (Urban Electric Crossover)">
                                            <option value="Geely EX2 PRO (Rp 229.900.000)">Geely EX2 PRO - Rp 229.900.000</option>
                                            <option value="Geely EX2 MAX (Rp 259.900.000)">Geely EX2 MAX - Rp 259.900.000</option>
                                        </optgroup>
                                        <optgroup label="Geely Starray EM-i (Super Hybrid Platform)">
                                            <option value="Geely Starray EM-i (Rp 499.000.000)">Geely Starray EM-i Hybrid - Rp 499.000.000</option>
                                        </optgroup>
                                        <optgroup label="Geely Coolray (Turbo Dynamic SUV)">
                                            <option value="Geely Coolray Standard (Rp 333.000.000)">Geely Coolray Standard - Rp 333.000.000</option>
                                            <option value="Geely Coolray Flagship (Rp 377.000.000)">Geely Coolray Flagship - Rp 377.000.000</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="sm:col-span-2">
                                    <label class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Rencana Pembayaran Selisih <span class="text-rose-500">*</span></label>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <label class="cursor-pointer">
                                            <input type="radio" name="paymentPlan" value="Kredit / Mobil Lama Jadi DP" class="peer sr-only" checked>
                                            <div class="p-4 border border-sky-200 rounded-2xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs sm:text-sm font-bold transition-all shadow-xs">
                                                Kredit (Mobil Lama Jadi DP Murni)
                                                <span class="block text-xs font-normal text-slate-500 mt-1">Sisa selisih dicicil dengan bunga KKB rendah dan proses cepat.</span>
                                            </div>
                                        </label>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="paymentPlan" value="Tunai / Cash Pelunasan" class="peer sr-only">
                                            <div class="p-4 border border-sky-200 rounded-2xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs sm:text-sm font-bold transition-all shadow-xs">
                                                Tunai / Cash (Pelunasan Selisih)
                                                <span class="block text-xs font-normal text-slate-500 mt-1">Membayar langsung selisih harga secara tunai tanpa pembiayaan.</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LANGKAH 3: DATA KONTAK & JADWAL INSPEKSI -->
                        <div class="pt-8 border-t border-sky-100">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-8 h-8 rounded-full bg-sky-600 text-white font-bold text-sm flex items-center justify-center shadow-xs">3</span>
                                <h3 class="font-geely text-xl sm:text-2xl text-slate-900 uppercase tracking-tight font-bold">Data Kontak & Preferensi Inspeksi</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="custName" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Nama Lengkap <span class="text-rose-500">*</span></label>
                                    <input type="text" id="custName" required placeholder="Nama Anda" class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium shadow-xs">
                                </div>

                                <div>
                                    <label for="custPhone" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Nomor WhatsApp / HP <span class="text-rose-500">*</span></label>
                                    <input type="tel" id="custPhone" required placeholder="08xxxxxxxxxx" class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium shadow-xs">
                                </div>

                                <div>
                                    <label for="custCity" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Kota / Wilayah Domisili <span class="text-rose-500">*</span></label>
                                    <input type="text" id="custCity" required placeholder="Contoh: Tangerang / BSD / Alam Sutera / Jakarta" class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium shadow-xs">
                                </div>

                                <div>
                                    <label for="inspectionPlace" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Lokasi Pilihan Inspeksi <span class="text-rose-500">*</span></label>
                                    <select id="inspectionPlace" required class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium cursor-pointer shadow-xs">
                                        <option value="Showroom Geely Alam Sutera" selected>Datang ke Showroom Geely Alam Sutera</option>
                                        <option value="Home Inspection (Di Rumah / Kantor Customer)">Home Inspection (Tim Inspektur Datang ke Rumah/Kantor)</option>
                                    </select>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="notes" class="block text-xs font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Catatan Tambahan (Opsional)</label>
                                    <textarea id="notes" rows="3" placeholder="Sebutkan jika ada riwayat perawatan berkala, aksesoris terpasang, atau preferensi waktu appraisal..." class="w-full rounded-2xl py-3.5 px-4 light-input text-sm font-medium shadow-xs"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Feedback Message In-Page (Tanpa Alert) -->
                        <div id="formFeedback" class="hidden p-5 rounded-2xl text-sm font-semibold transition-all"></div>

                        <!-- Tombol Submit -->
                        <div class="pt-2">
                            <button type="submit" id="submitBtn" class="btn-shimmer w-full inline-flex items-center justify-center gap-3 bg-gradient-to-r from-sky-600 via-blue-600 to-cyan-600 hover:from-sky-700 hover:to-blue-700 text-white py-4 sm:py-5 px-8 rounded-full font-bold text-xs sm:text-sm tracking-[0.2em] uppercase transition-all shadow-lg cursor-pointer hover:shadow-cyan-400/40">
                                <span>Ajukan Taksasi Trade-In Sekarang</span>
                                <svg class="w-4 h-4 text-sky-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- KOLOM KANAN: SIDEBAR PROFIL SALES & FAQ -->
                <div class="lg:col-span-4 space-y-8">
                    
                    <!-- KARTU PROFIL SALES YENNI -->
                    <div class="glass-panel rounded-[32px] p-6 sm:p-8 border border-sky-200 shadow-lg">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-20 h-20 rounded-2xl overflow-hidden border-2 border-sky-200 shrink-0 bg-slate-900 shadow-sm">
                                <img src="{{ asset('assets/images/profile.jpeg') }}" alt="Yenni Sales Counter Geely Alam Sutera" class="w-full h-full object-cover object-top">
                            </div>
                            <div>
                                <h4 class="font-geely text-2xl font-bold text-slate-900 uppercase tracking-tight">YENNI</h4>
                                <p class="text-sky-600 text-xs font-bold tracking-wider uppercase mt-0.5">Sales Counter & EV Consultant</p>
                                <p class="text-slate-500 text-xs">Geely Wonder Alam Sutera</p>
                            </div>
                        </div>

                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mb-6">
                            Ingin konsultasi langsung terkait estimasi taksasi mobil lama Anda atau simulasi cicilan unit baru Geely? Hubungi saya kapan saja untuk fast response dan bantuan kalkulasi resmi.
                        </p>

                        <div class="space-y-3">
                            <a href="https://wa.me/628170879315?text=Halo%20Yenni,%20saya%20ingin%20konsultasi%20tukar%20tambah%20(trade-in)%20mobil%20saya%20ke%20Geely" target="_blank" rel="noopener noreferrer" class="btn-shimmer w-full inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 text-white py-3.5 px-6 rounded-full font-bold text-xs tracking-wider uppercase transition-all shadow-md">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                <span>WhatsApp (+628170879315)</span>
                            </a>

                            <a href="tel:+628170879315" class="w-full inline-flex items-center justify-center gap-2.5 bg-white hover:bg-sky-50 text-slate-800 border border-sky-200 py-3.5 px-6 rounded-full font-bold text-xs tracking-wider uppercase transition-all shadow-xs">
                                <svg class="w-4 h-4 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>Hubungi Langsung</span>
                            </a>
                        </div>
                    </div>

                    <!-- FAQ TRADE-IN -->
                    <div class="glass-panel rounded-[32px] p-6 sm:p-8 border border-sky-200 shadow-lg space-y-4">
                        <span class="text-sky-700 text-xs font-bold tracking-[0.25em] uppercase block mb-1">Pertanyaan Umum</span>
                        <h3 class="font-geely text-2xl font-bold text-slate-900 uppercase tracking-tight mb-5">FAQ Trade-In</h3>

                        <details class="group bg-white/80 rounded-2xl p-4 border border-sky-100 transition-all cursor-pointer">
                            <summary class="flex justify-between items-center font-bold text-xs sm:text-sm text-slate-800">
                                <span>Apakah mobil masih kredit bisa ditukar?</span>
                                <svg class="w-4 h-4 text-sky-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </summary>
                            <p class="text-xs text-slate-600 mt-3 leading-relaxed font-normal">
                                Bisa. Tim kami akan membantu proses pelunasan (over-kredit/take-over) sisa cicilan ke leasing lama Anda secara aman dan resmi.
                            </p>
                        </details>

                        <details class="group bg-white/80 rounded-2xl p-4 border border-sky-100 transition-all cursor-pointer">
                            <summary class="flex justify-between items-center font-bold text-xs sm:text-sm text-slate-800">
                                <span>Kapan mobil lama saya harus diserahkan?</span>
                                <svg class="w-4 h-4 text-sky-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </summary>
                            <p class="text-xs text-slate-600 mt-3 leading-relaxed font-normal">
                                Anda tetap dapat menggunakan mobil lama untuk aktivitas harian sampai kendaraan Geely baru Anda tiba dan siap serah terima.
                            </p>
                        </details>

                        <details class="group bg-white/80 rounded-2xl p-4 border border-sky-100 transition-all cursor-pointer">
                            <summary class="flex justify-between items-center font-bold text-xs sm:text-sm text-slate-800">
                                <span>Berapa lama proses appraisal selesai?</span>
                                <svg class="w-4 h-4 text-sky-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </summary>
                            <p class="text-xs text-slate-600 mt-3 leading-relaxed font-normal">
                                Estimasi awal keluar dalam waktu 1x24 jam setelah data dikirim. Inspeksi fisik unit hanya memakan waktu 30-45 menit.
                            </p>
                        </details>

                        <details class="group bg-white/80 rounded-2xl p-4 border border-sky-100 transition-all cursor-pointer">
                            <summary class="flex justify-between items-center font-bold text-xs sm:text-sm text-slate-800">
                                <span>Dokumen apa saja yang perlu disiapkan?</span>
                                <svg class="w-4 h-4 text-sky-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </summary>
                            <p class="text-xs text-slate-600 mt-3 leading-relaxed font-normal">
                                Cukup siapkan foto STNK, BPKB (jika sudah lunas), buku servis, dan KTP pemilik untuk verifikasi legalitas kendaraan.
                            </p>
                        </details>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <!-- SCRIPT SUBMIT & INTEGRASI DUAL-DISPATCH -->
    <script>
        function formatCurrency(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            input.value = value ? new Intl.NumberFormat('id-ID').format(value) : '';
        }

        async function handleTradeInSubmit(event) {
            event.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const feedback = document.getElementById('formFeedback');

            const oldBrand = document.getElementById('oldBrand').value;
            const oldModel = document.getElementById('oldModel').value;
            const oldYear = document.getElementById('oldYear').value;
            const oldTransmission = document.querySelector('input[name="oldTransmission"]:checked').value;
            const oldMileage = document.getElementById('oldMileage').value;
            const oldCondition = document.getElementById('oldCondition').value;
            const oldExpectedPrice = document.getElementById('oldExpectedPrice').value;
            const targetGeely = document.getElementById('targetGeely').value;
            const paymentPlan = document.querySelector('input[name="paymentPlan"]:checked').value;
            const custName = document.getElementById('custName').value;
            const custPhone = document.getElementById('custPhone').value;
            const custCity = document.getElementById('custCity').value;
            const inspectionPlace = document.getElementById('inspectionPlace').value;
            const notes = document.getElementById('notes').value;

            const payload = {
                name: custName,
                phone: custPhone,
                city: custCity,
                old_brand: oldBrand,
                old_model: oldModel,
                old_year: oldYear,
                old_transmission: oldTransmission,
                old_mileage: oldMileage,
                old_condition: oldCondition,
                old_expected_price: oldExpectedPrice,
                target_geely: targetGeely,
                payment_plan: paymentPlan,
                inspection_place: inspectionPlace,
                notes: notes,
                _token: '{{ csrf_token() }}'
            };

            // Loading state tombol submit
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-80', 'cursor-not-allowed');
            submitBtn.innerHTML = `<span>Mencatat ke Sistem & Menghubungkan WhatsApp...</span>`;

            // Kirim ke API internal CRM Backend
            try {
                await fetch('/api/leads/trade-in', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(payload)
                });
            } catch (err) {
                console.warn('Sync lead API info:', err);
            }

            // Susun Draf WhatsApp Resmi Sales YENNI
            const waMessage = `Halo Yenni (Geely Wonder Alam Sutera), saya ingin mengajukan Trade-In Mobil:%0A%0A` +
                `*Data Mobil Lama:*%0A` +
                `- Merk & Model: ${encodeURIComponent(oldBrand)} ${encodeURIComponent(oldModel)}%0A` +
                `- Tahun: ${encodeURIComponent(oldYear)}%0A` +
                `- Transmisi: ${encodeURIComponent(oldTransmission)}%0A` +
                `- Jarak Tempuh: ${encodeURIComponent(oldMileage)}%0A` +
                `- Kondisi: ${encodeURIComponent(oldCondition)}%0A` +
                (oldExpectedPrice ? `- Ekspektasi Harga: Rp ${encodeURIComponent(oldExpectedPrice)}%0A` : '') +
                `%0A*Mobil Baru Pilihan:*%0A` +
                `- Unit Geely: ${encodeURIComponent(targetGeely)}%0A` +
                `- Rencana Bayar: ${encodeURIComponent(paymentPlan)}%0A` +
                `%0A*Data Pemilik:*%0A` +
                `- Nama: ${encodeURIComponent(custName)}%0A` +
                `- No HP: ${encodeURIComponent(custPhone)}%0A` +
                `- Domisili: ${encodeURIComponent(custCity)}%0A` +
                `- Lokasi Inspeksi: ${encodeURIComponent(inspectionPlace)}%0A` +
                (notes ? `- Catatan: ${encodeURIComponent(notes)}%0A` : '');

            // Tampilkan Feedback visual sukses di form
            feedback.classList.remove('hidden');
            feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200', 'block');
            feedback.innerHTML = `<div><strong>Permohonan Berhasil Dicatat!</strong> Membuka aplikasi WhatsApp Sales YENNI...</div>`;

            // Buka WhatsApp resmi Sales YENNI
            setTimeout(() => {
                window.location.href = `https://wa.me/628170879315?text=${waMessage}`;
            }, 600);
        }
    </script>
</x-layouts.app>