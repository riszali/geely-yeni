<x-layouts.app>
    @push('head')
        <title>Trade-In Mobil Geely Wonder Alam Sutera | Tukar Tambah Semua Merk Mobil ke Geely EX5, EX2 & Coolray</title>
        <meta name="description" content="Tukar tambah mobil lama semua merk dengan mobil listrik & hybrid Geely baru. Dapatkan appraisal transparan, subsidi cashback trade-in, dan inspeksi gratis bersama Sales YENNI.">
        <meta name="keywords" content="Trade in Geely, Tukar Tambah Mobil Bekas Geely, Trade In Geely Alam Sutera, Jual Mobil Beli Geely EX5, Trade in EX2 Tangerang, Promo Trade in Geely Coolray">
        <link rel="canonical" href="https://geelybsd.id/trade-in">
    @endpush

    <style>
        html, body { 
            scroll-behavior: smooth; 
            background: #f0f9ff; 
            color: #0f172a;
            overflow-x: hidden; 
        }

        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: multiply;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
            border: 1px solid rgba(186, 230, 253, 0.75);
            border-top: 1px solid rgba(255, 255, 255, 0.95);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.12), 0 4px 12px rgba(186, 230, 253, 0.2);
        }

        .glass-panel-light {
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(224, 242, 254, 0.9);
            box-shadow: 0 15px 35px -10px rgba(14, 165, 233, 0.08);
        }

        .light-input {
            background: #ffffff;
            border: 1px solid rgba(186, 230, 253, 0.9);
            color: #0f172a;
            transition: all 0.2s ease;
        }
        .light-input:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.18);
            outline: none;
        }

        .text-liquid {
            background: linear-gradient(270deg, #0284c7, #2563eb, #0ea5e9, #0369a1);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>

    <div class="relative min-h-screen bg-gradient-to-b from-[#e0f2fe] via-[#f0f9ff] to-[#e0f2fe] overflow-hidden pb-24">
        <div class="absolute inset-0 z-0 bg-noise"></div>

        <!-- HERO HEADER -->
        <section class="relative z-10 pt-28 sm:pt-32 md:pt-36 pb-10 max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full border border-sky-300 bg-sky-50 text-sky-800 text-[10px] font-bold tracking-[0.25em] uppercase shadow-xs">
                <span>Official Trade-In Center • Geely Wonder Alam Sutera</span>
            </div>
            
            <h1 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold uppercase tracking-tighter mb-4 text-slate-900 leading-[1.05]">
                TUKAR TAMBAH <br>
                <span class="text-liquid">MOBIL LAMA KE GEELY</span>
            </h1>
            
            <p class="text-slate-600 text-xs sm:text-sm md:text-base font-normal max-w-2xl mx-auto leading-relaxed mb-8">
                Upgrade kendaraan Anda ke teknologi mobilitas elektrik Geely. Dapatkan penawaran taksasi transparan, subsidi cashback promo trade-in, serta kemudahan inspeksi langsung di showroom atau di rumah Anda.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-4xl mx-auto text-left">
                <div class="p-4 rounded-2xl glass-panel-light border border-sky-200 flex items-center gap-3 shadow-xs">
                    <span class="w-8 h-8 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold shrink-0">✓</span>
                    <div>
                        <h4 class="text-xs font-bold text-slate-900">Semua Merk & Tahun</h4>
                        <p class="text-[10px] text-slate-500">Jepang, Eropa, Korea & EV</p>
                    </div>
                </div>
                <div class="p-4 rounded-2xl glass-panel-light border border-sky-200 flex items-center gap-3 shadow-xs">
                    <span class="w-8 h-8 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold shrink-0">✓</span>
                    <div>
                        <h4 class="text-xs font-bold text-slate-900">Taksasi Transparan</h4>
                        <p class="text-[10px] text-slate-500">Inspeksi detail dan adil</p>
                    </div>
                </div>
                <div class="p-4 rounded-2xl glass-panel-light border border-sky-200 flex items-center gap-3 shadow-xs">
                    <span class="w-8 h-8 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold shrink-0">✓</span>
                    <div>
                        <h4 class="text-xs font-bold text-slate-900">Subsidi Tambahan</h4>
                        <p class="text-[10px] text-slate-500">Ekstra cashback trade-in</p>
                    </div>
                </div>
                <div class="p-4 rounded-2xl glass-panel-light border border-sky-200 flex items-center gap-3 shadow-xs">
                    <span class="w-8 h-8 rounded-xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold shrink-0">✓</span>
                    <div>
                        <h4 class="text-xs font-bold text-slate-900">Home Inspection</h4>
                        <p class="text-[10px] text-slate-500">Inspeksi unit ke rumah</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FORM TRADE-IN -->
        <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <div class="lg:col-span-8 glass-panel rounded-[28px] p-6 sm:p-10 border border-sky-200 shadow-xl">
                    <div class="flex items-center justify-between mb-8 pb-4 border-b border-sky-100">
                        <div>
                            <span class="text-sky-600 text-[10px] font-bold tracking-[0.25em] uppercase block mb-1">Online Valuation Form</span>
                            <h2 class="font-geely text-2xl sm:text-3xl text-slate-900 uppercase font-bold tracking-tight">Formulir Taksasi Mobil</h2>
                        </div>
                        <span class="px-3 py-1 bg-sky-100 text-sky-700 text-xs font-semibold rounded-full">
                            Estimasi 1x24 Jam
                        </span>
                    </div>

                    <form id="tradeInForm" class="space-y-8" onsubmit="handleTradeInSubmit(event)">
                        @csrf

                        <!-- LANGKAH 1 -->
                        <div>
                            <div class="flex items-center gap-3 mb-5">
                                <span class="w-7 h-7 rounded-full bg-sky-600 text-white font-bold text-xs flex items-center justify-center shadow-xs">1</span>
                                <h3 class="font-geely text-lg sm:text-xl text-slate-900 uppercase tracking-tight font-bold">Informasi Mobil Lama Anda</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="oldBrand" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Merk Mobil Lama <span class="text-rose-500">*</span></label>
                                    <select id="oldBrand" required class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium cursor-pointer">
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
                                        <option value="Lainnya">Merk Lainnya</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="oldModel" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Tipe / Model Mobil <span class="text-rose-500">*</span></label>
                                    <input type="text" id="oldModel" required placeholder="Contoh: Innova Zenix / HR-V Prestige / Ioniq 5" class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium">
                                </div>

                                <div>
                                    <label for="oldYear" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Tahun Pembuatan <span class="text-rose-500">*</span></label>
                                    <select id="oldYear" required class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium cursor-pointer">
                                        <option value="" disabled selected>Pilih Tahun...</option>
                                        @for ($year = 2026; $year >= 2012; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                        <option value="Sebelum 2012">Sebelum 2012</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Transmisi <span class="text-rose-500">*</span></label>
                                    <div class="grid grid-cols-2 gap-2">
                                        <label class="cursor-pointer">
                                            <input type="radio" name="oldTransmission" value="Automatic" class="peer sr-only" checked>
                                            <div class="text-center py-2.5 border border-sky-200 rounded-xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs font-bold transition-all shadow-xs">
                                                Automatic (AT)
                                            </div>
                                        </label>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="oldTransmission" value="Manual" class="peer sr-only">
                                            <div class="text-center py-2.5 border border-sky-200 rounded-xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs font-bold transition-all shadow-xs">
                                                Manual (MT)
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label for="oldMileage" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Jarak Tempuh (Odometer) <span class="text-rose-500">*</span></label>
                                    <select id="oldMileage" required class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium cursor-pointer">
                                        <option value="" disabled selected>Pilih Odometer...</option>
                                        <option value="< 20.000 km">&lt; 20.000 km</option>
                                        <option value="20.000 - 50.000 km">20.000 - 50.000 km</option>
                                        <option value="50.000 - 100.000 km">50.000 - 100.000 km</option>
                                        <option value="> 100.000 km">&gt; 100.000 km</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="oldCondition" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Kondisi Fisik & Mesin <span class="text-rose-500">*</span></label>
                                    <select id="oldCondition" required class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium cursor-pointer">
                                        <option value="Istimewa (Bebas Tabrak & Banjir)" selected>Istimewa (Bebas Tabrak & Banjir)</option>
                                        <option value="Sangat Baik Terawat">Sangat Baik Terawat (Service Record)</option>
                                        <option value="Standar Pemakaian Harian">Standar Pemakaian Harian</option>
                                        <option value="Ada Lecet / Perlu Perbaikan">Ada Lecet / Perlu Perbaikan</option>
                                    </select>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="oldExpectedPrice" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Ekspektasi Harga Mobil Anda (Opsional)</label>
                                    <div class="relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sky-700 font-bold text-sm">Rp</span>
                                        <input type="text" id="oldExpectedPrice" placeholder="Contoh: 250.000.000" class="w-full pl-12 pr-4 py-3 rounded-xl light-input text-xs sm:text-sm font-medium" onkeyup="formatCurrency(this)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LANGKAH 2 -->
                        <div class="pt-6 border-t border-sky-100">
                            <div class="flex items-center gap-3 mb-5">
                                <span class="w-7 h-7 rounded-full bg-sky-600 text-white font-bold text-xs flex items-center justify-center shadow-xs">2</span>
                                <h3 class="font-geely text-lg sm:text-xl text-slate-900 uppercase tracking-tight font-bold">Mobil Baru Geely Pilihan Anda</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="sm:col-span-2">
                                    <label for="targetGeely" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Model Geely yang Diminati <span class="text-rose-500">*</span></label>
                                    <select id="targetGeely" required class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium cursor-pointer">
                                        <option value="" disabled selected>Pilih Model Geely...</option>
                                        <optgroup label="Geely EX5 (Electric Smart SUV)">
                                            <option value="Geely EX5 PRO (Rp 465.000.000)">Geely EX5 PRO - Rp 465.000.000</option>
                                            <option value="Geely EX5 MAX (Rp 505.000.000)">Geely EX5 MAX - Rp 505.000.000</option>
                                        </optgroup>
                                        <optgroup label="Geely EX2 (Urban Electric Crossover)">
                                            <option value="Geely EX2 PRO (Rp 229.900.000)">Geely EX2 PRO - Rp 229.900.000</option>
                                            <option value="Geely EX2 MAX (Rp 259.900.000)">Geely EX2 MAX - Rp 259.900.000</option>
                                        </optgroup>
                                        <optgroup label="Geely Starray EM-i (Super Hybrid)">
                                            <option value="Geely Starray EM-i (Rp 499.000.000)">Geely Starray EM-i Hybrid - Rp 499.000.000</option>
                                        </optgroup>
                                        <optgroup label="Geely Coolray (Turbo Sport SUV)">
                                            <option value="Geely Coolray Standard (Rp 333.000.000)">Geely Coolray Standard - Rp 333.000.000</option>
                                            <option value="Geely Coolray Flagship (Rp 377.000.000)">Geely Coolray Flagship - Rp 377.000.000</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="sm:col-span-2">
                                    <label class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Rencana Pembayaran Selisih <span class="text-rose-500">*</span></label>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        <label class="cursor-pointer">
                                            <input type="radio" name="paymentPlan" value="Kredit / Nilai Mobil Jadi DP" class="peer sr-only" checked>
                                            <div class="p-3.5 border border-sky-200 rounded-xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs font-bold transition-all shadow-xs">
                                                Kredit (Mobil Lama Jadi DP Murni)
                                            </div>
                                        </label>
                                        <label class="cursor-pointer">
                                            <input type="radio" name="paymentPlan" value="Tunai / Cash Pelunasan" class="peer sr-only">
                                            <div class="p-3.5 border border-sky-200 rounded-xl bg-white peer-checked:bg-sky-100 peer-checked:border-sky-500 peer-checked:text-sky-800 text-slate-700 text-xs font-bold transition-all shadow-xs">
                                                Tunai / Cash (Pelunasan Selisih)
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LANGKAH 3 -->
                        <div class="pt-6 border-t border-sky-100">
                            <div class="flex items-center gap-3 mb-5">
                                <span class="w-7 h-7 rounded-full bg-sky-600 text-white font-bold text-xs flex items-center justify-center shadow-xs">3</span>
                                <h3 class="font-geely text-lg sm:text-xl text-slate-900 uppercase tracking-tight font-bold">Data Kontak & Jadwal Inspeksi</h3>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="custName" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Nama Lengkap <span class="text-rose-500">*</span></label>
                                    <input type="text" id="custName" required placeholder="Nama Anda" class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium">
                                </div>

                                <div>
                                    <label for="custPhone" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Nomor WhatsApp / HP <span class="text-rose-500">*</span></label>
                                    <input type="tel" id="custPhone" required placeholder="08xxxxxxxxxx" class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium">
                                </div>

                                <div>
                                    <label for="custCity" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Kota / Wilayah Domisili <span class="text-rose-500">*</span></label>
                                    <input type="text" id="custCity" required placeholder="Contoh: Tangerang / BSD / Jakarta" class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium">
                                </div>

                                <div>
                                    <label for="inspectionPlace" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Lokasi Inspeksi Mobil <span class="text-rose-500">*</span></label>
                                    <select id="inspectionPlace" required class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium cursor-pointer">
                                        <option value="Showroom Geely Alam Sutera" selected>Datang ke Showroom Geely Alam Sutera</option>
                                        <option value="Home Inspection (Di Rumah / Kantor Customer)">Home Inspection (Tim Datang ke Rumah/Kantor)</option>
                                    </select>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="notes" class="block text-[11px] font-bold tracking-[0.15em] uppercase text-slate-600 mb-2">Catatan Tambahan (Opsional)</label>
                                    <textarea id="notes" rows="3" placeholder="Sebutkan riwayat servis berkala, modifikasi ringan, atau pertanyaan lainnya..." class="w-full rounded-xl py-3 px-4 light-input text-xs sm:text-sm font-medium"></textarea>
                                </div>
                            </div>
                        </div>

                        <div id="formFeedback" class="hidden p-4 rounded-2xl text-xs sm:text-sm font-semibold"></div>

                        <div class="pt-2 flex flex-col sm:flex-row gap-4">
                            <button type="submit" id="submitBtn" class="flex-1 inline-flex items-center justify-center gap-3 bg-gradient-to-r from-sky-600 via-blue-600 to-cyan-600 hover:from-sky-700 hover:to-blue-700 text-white py-4 px-8 rounded-full font-bold text-xs sm:text-sm tracking-[0.15em] uppercase transition-all shadow-md cursor-pointer">
                                <span>Ajukan Taksasi Trade-In Sekarang</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- SIDEBAR INFO & PROFIL SALES -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="glass-panel rounded-[28px] p-6 sm:p-7 border border-sky-200 shadow-md">
                        <span class="text-sky-700 text-[10px] font-bold tracking-[0.25em] uppercase block mb-2">Keunggulan Layanan</span>
                        <h3 class="font-geely text-2xl text-slate-900 uppercase font-bold tracking-tight mb-4">Trade-In Resmi</h3>

                        <ul class="space-y-3.5 text-xs text-slate-600">
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">1</span>
                                <div><strong class="text-slate-900 block font-semibold">Harga Pasar Transparan</strong> Penilaian langsung tanpa potongan biaya administrasi.</div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">2</span>
                                <div><strong class="text-slate-900 block font-semibold">Mobil Lama Tetap Bisa Dipakai</strong> Gunakan mobil lama sampai serah terima unit Geely tiba.</div>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="w-5 h-5 rounded-full bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">3</span>
                                <div><strong class="text-slate-900 block font-semibold">Subsidi Tambahan Promo</strong> Dapatkan diskon cashback khusus permohonan trade-in.</div>
                            </li>
                        </ul>
                    </div>

                    <div class="glass-panel rounded-[28px] p-6 sm:p-7 border border-sky-200 shadow-md">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl overflow-hidden border border-sky-200 shrink-0 bg-slate-900">
                                <img src="{{ asset('assets/images/profile.jpeg') }}" alt="Yenni Sales Counter Geely Alam Sutera" class="w-full h-full object-cover object-top">
                            </div>
                            <div>
                                <h4 class="font-geely text-lg font-bold text-slate-900 uppercase tracking-tight">YENNI</h4>
                                <p class="text-sky-600 text-[10px] font-bold tracking-wider uppercase">Sales Counter & EV Consultant</p>
                                <p class="text-slate-500 text-[10px]">Geely Wonder Alam Sutera</p>
                            </div>
                        </div>

                        <p class="text-slate-600 text-xs leading-relaxed mb-4">
                            Butuh estimasi awal hari ini? Hubungi langsung via WhatsApp untuk konsultasi cepat.
                        </p>

                        <a href="https://wa.me/628170879315?text=Halo%20Yenni,%20bisa%20bantu%20estimasi%20taksasi%20trade-in%20mobil%20saya%20ke%20Geely?" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 text-white py-3 px-5 rounded-full font-bold text-xs tracking-wider uppercase transition-all shadow-sm">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            <span>Chat WhatsApp (+628170879315)</span>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>

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

            submitBtn.disabled = true;
            submitBtn.innerHTML = `<span>Mencatat ke Sistem & Menghubungkan WhatsApp...</span>`;

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
                console.warn('API sync warn:', err);
            }

            const waMessage = `Halo Yenni (Geely Wonder Alam Sutera), saya ingin mengajukan Trade-In:%0A%0A` +
                `*Data Mobil Lama:*%0A` +
                `- Merk / Model: ${encodeURIComponent(oldBrand)} ${encodeURIComponent(oldModel)}%0A` +
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

            feedback.classList.remove('hidden');
            feedback.classList.add('bg-emerald-50', 'text-emerald-800', 'border', 'border-emerald-200', 'block');
            feedback.innerHTML = `<div><strong>Permohonan Berhasil Dicatat!</strong> Membuka WhatsApp Sales YENNI...</div>`;

            setTimeout(() => {
                window.location.href = `https://wa.me/628170879315?text=${waMessage}`;
            }, 600);
        }
    </script>
</x-layouts.app>