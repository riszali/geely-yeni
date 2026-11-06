<x-layouts.app>
    <!-- ==========================================
         ULTRA-PREMIUM LIGHT GLASSMORPHISM STYLES
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
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

        /* Light Blue Automotive Glassmorphism */
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
            border: 1px solid rgba(186, 230, 253, 0.7);
            border-top: 1px solid rgba(255, 255, 255, 0.95);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.12), 0 4px 12px rgba(186, 230, 253, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.9);
        }

        /* Liquid Text Gradient */
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

        /* Custom Range Slider */
        input[type=range] {
            -webkit-appearance: none;
            background: rgba(186, 230, 253, 0.7);
            border-radius: 8px;
            height: 6px;
        }
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 22px;
            width: 22px;
            border-radius: 50%;
            background: #0284c7;
            cursor: pointer;
            box-shadow: 0 0 14px rgba(2, 132, 199, 0.5);
            border: 2px solid #ffffff;
            transition: transform 0.2s;
        }
        input[type=range]::-webkit-slider-thumb:hover {
            transform: scale(1.15);
        }

        /* Form Inputs Customization for Light Theme */
        .light-input {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(186, 230, 253, 0.9);
            color: #0f172a;
        }
        .light-input:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.18);
            outline: none;
        }
        .light-input option {
            background-color: #ffffff;
            color: #0f172a;
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
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer {
            100% { transform: rotate(45deg) translateX(100%); }
        }
    </style>

    <div class="relative min-h-screen bg-gradient-to-b from-[#e0f2fe] via-[#f0f9ff] to-[#e0f2fe] overflow-hidden pb-24">
        <!-- Ambient Background Orbs -->
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-sky-300/30 rounded-full blur-[150px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-cyan-200/35 rounded-full blur-[150px] pointer-events-none z-0"></div>
        <div class="absolute inset-0 z-0 bg-noise"></div>

        <!-- ==========================================
             HERO & CAR SELECTOR SECTION
        =========================================== -->
        <section class="relative z-10 pt-24 md:pt-32 pb-12 max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full border border-sky-300/70 bg-sky-500/10 text-sky-700 shadow-sm backdrop-blur-md">
                <span class="text-[10px] font-bold tracking-[0.3em] uppercase">Financial Services • Geely Wonder Alam Sutera</span>
            </div>
            <h1 class="font-geely text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-tighter mb-4 text-slate-900 drop-shadow-sm">
                Simulasi <span class="text-liquid">Kredit</span>
            </h1>
            <p class="text-slate-600 text-sm md:text-base font-normal max-w-2xl mx-auto leading-relaxed mb-10">
                Rencanakan kepemilikan kendaraan Geely Anda dengan kalkulator pintar kami. Pilih model favorit Anda, putar 360°, dan dapatkan estimasi cicilan serta penawaran terbaik.
            </p>

            <!-- Model Selection Pills -->
            <div class="flex flex-wrap justify-center gap-3 sm:gap-4 mb-8">
                <button type="button" class="model-select-btn active px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border-2 border-sky-500 bg-sky-500/15 text-sky-700 shadow-[0_4px_15px_rgba(14,165,233,0.25)]" data-model="ex5">
                    Geely EX5
                </button>
                <button type="button" class="model-select-btn px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border border-sky-200/80 bg-white/80 text-slate-600 hover:text-sky-700 hover:border-sky-300 shadow-sm" data-model="ex2">
                    Geely EX2
                </button>
                <button type="button" class="model-select-btn px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border border-sky-200/80 bg-white/80 text-slate-600 hover:text-sky-700 hover:border-sky-300 shadow-sm" data-model="starray">
                    Starray EM-i
                </button>
                <button type="button" class="model-select-btn px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border border-sky-200/80 bg-white/80 text-slate-600 hover:text-sky-700 hover:border-sky-300 shadow-sm" data-model="coolray">
                    Geely Coolray
                </button>
            </div>

            <!-- 360 Viewer / Visual Preview Area -->
            <div class="glass-panel p-2 md:p-4 rounded-[2rem] md:rounded-[2.5rem] w-full max-w-5xl mx-auto h-[40vh] md:h-[50vh] min-h-[300px] relative overflow-hidden shadow-[0_25px_60px_-15px_rgba(2,132,199,0.2)] mb-16 border border-sky-200 bg-white/70">
                <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-b from-sky-100/30 via-transparent to-transparent pointer-events-none z-20"></div>
                <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden flex items-center justify-center bg-gradient-to-b from-sky-50/50 to-white/90">
                    <!-- 360 Spin Iframe -->
                    <iframe id="car-spin-iframe" src="https://riszali.sirv.com/Spins/ex5/white.spin" class="absolute top-1/2 left-1/2 w-[120%] h-[120%] -translate-x-1/2 -translate-y-1/2 border-0" allowfullscreen></iframe>
                    <!-- High-Res Preview for Coolray -->
                    <img id="car-preview-img" src="{{ asset('assets/coolray/hero.webp') }}" class="hidden max-h-[85%] max-w-[85%] object-contain z-10 drop-shadow-[0_20px_35px_rgba(2,132,199,0.25)] transition-all duration-500" alt="Geely Coolray Preview">
                </div>
            </div>
        </section>

        <!-- ==========================================
             CALCULATOR SECTION
        =========================================== -->
        <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- Left Column: Form Inputs -->
                <div class="lg:col-span-7 glass-panel rounded-[2rem] p-6 sm:p-8 md:p-10 border border-sky-200 shadow-[0_20px_50px_rgba(14,165,233,0.1)]">
                    <h2 class="font-geely text-2xl md:text-3xl font-bold mb-8 border-b border-sky-200/70 pb-4 text-slate-900 tracking-tight">Parameter Pembiayaan</h2>
                    
                    <form id="creditForm" class="space-y-8">
                        
                        <!-- Pilih Varian Kendaraan -->
                        <div>
                            <label for="carVariant" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-slate-500 mb-3">Varian Kendaraan</label>
                            <div class="relative">
                                <select id="carVariant" class="w-full rounded-xl py-4 px-4 light-input font-medium transition-colors cursor-pointer appearance-none shadow-sm">
                                    <!-- Options populated by JS -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Harga OTR (Readonly/Auto updated) -->
                        <div>
                            <label for="otrPrice" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-slate-500 mb-3">Harga OTR (Jakarta / Tangerang)</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-sky-600 font-bold">Rp</span>
                                <input type="text" id="otrPriceDisplay" readonly class="w-full pl-12 pr-4 py-4 rounded-xl light-input font-geely text-xl font-bold text-slate-800 bg-slate-50/80 cursor-not-allowed shadow-sm" value="0">
                                <input type="hidden" id="otrPriceValue" value="0">
                            </div>
                            <p class="text-[9px] text-slate-500 mt-2 tracking-widest uppercase">*Harga estimasi resmi, dapat berubah sewaktu-waktu sesuai program berjalan.</p>
                        </div>

                        <!-- Pilih Leasing -->
                        <div>
                            <label for="leasing" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-slate-500 mb-3">Mitra Pembiayaan / Leasing</label>
                            <div class="relative">
                                <select id="leasing" class="w-full rounded-xl py-4 px-4 light-input font-medium transition-colors cursor-pointer appearance-none shadow-sm">
                                    <option value="bca">BCA Finance (Rate Bunga Kompetitif)</option>
                                    <option value="mtf">Mandiri Tunas Finance (MTF)</option>
                                    <option value="adira">Adira Finance</option>
                                    <option value="maybank">Maybank Finance</option>
                                    <option value="cnaf">CIMB Niaga Auto Finance (CNAF)</option>
                                    <option value="muf">Mandiri Utama Finance (MUF)</option>
                                    <option value="clipan">Clipan Finance</option>
                                    <option value="bfi">BFI Finance</option>
                                    <option value="oto">Oto Multiartha</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Uang Muka (DP) -->
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <label for="dpPercent" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-slate-500">Uang Muka (DP)</label>
                                <span id="dpPercentLabel" class="text-sky-600 font-geely text-2xl font-bold">20%</span>
                            </div>
                            <input type="range" id="dpPercent" min="15" max="50" step="5" value="20" class="w-full cursor-pointer">
                            <div class="flex justify-between text-[10px] font-bold tracking-widest text-slate-400 mt-3 uppercase">
                                <span>15% (Min)</span>
                                <span>50% (Max)</span>
                            </div>
                        </div>

                        <!-- Tenor -->
                        <div>
                            <label class="block text-[11px] font-bold tracking-[0.2em] uppercase text-slate-500 mb-4">Tenor (Jangka Waktu)</label>
                            <div class="grid grid-cols-5 gap-2 sm:gap-4">
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="1" class="peer sr-only">
                                    <div class="text-center py-3 border border-sky-200/90 rounded-xl bg-white/70 peer-checked:bg-sky-500/15 peer-checked:border-sky-500 peer-checked:text-sky-700 text-slate-600 hover:bg-sky-50 transition-all font-bold text-sm shadow-sm">1 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="2" class="peer sr-only">
                                    <div class="text-center py-3 border border-sky-200/90 rounded-xl bg-white/70 peer-checked:bg-sky-500/15 peer-checked:border-sky-500 peer-checked:text-sky-700 text-slate-600 hover:bg-sky-50 transition-all font-bold text-sm shadow-sm">2 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="3" class="peer sr-only">
                                    <div class="text-center py-3 border border-sky-200/90 rounded-xl bg-white/70 peer-checked:bg-sky-500/15 peer-checked:border-sky-500 peer-checked:text-sky-700 text-slate-600 hover:bg-sky-50 transition-all font-bold text-sm shadow-sm">3 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="4" class="peer sr-only">
                                    <div class="text-center py-3 border border-sky-200/90 rounded-xl bg-white/70 peer-checked:bg-sky-500/15 peer-checked:border-sky-500 peer-checked:text-sky-700 text-slate-600 hover:bg-sky-50 transition-all font-bold text-sm shadow-sm">4 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="5" class="peer sr-only" checked>
                                    <div class="text-center py-3 border border-sky-200/90 rounded-xl bg-white/70 peer-checked:bg-sky-500/15 peer-checked:border-sky-500 peer-checked:text-sky-700 text-slate-600 hover:bg-sky-50 transition-all font-bold text-sm shadow-sm">5 Thn</div>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right Column: Result Card (Sticky) -->
                <div class="lg:col-span-5 relative">
                    <!-- Glow behind result card -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-sky-300/30 rounded-[3rem] blur-[90px] pointer-events-none z-0"></div>
                    
                    <div class="glass-panel rounded-[2rem] p-6 sm:p-8 md:p-10 sticky top-24 z-10 shadow-[0_25px_60px_-15px_rgba(2,132,199,0.22)] border border-sky-300/70 bg-white/90">
                        <h3 class="text-sky-600 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase mb-6 block">Estimasi Pembiayaan</h3>
                        
                        <div class="space-y-8">
                            <!-- Cicilan Per Bulan -->
                            <div>
                                <p class="text-xs text-slate-500 mb-2 uppercase tracking-widest font-bold">Angsuran per Bulan</p>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold text-slate-500">Rp</span>
                                    <span id="resultInstallment" class="text-4xl sm:text-5xl lg:text-6xl font-geely text-slate-900 font-bold drop-shadow-sm">0</span>
                                </div>
                            </div>

                            <!-- Total DP -->
                            <div class="bg-sky-50/90 rounded-[1.5rem] p-5 border border-sky-200/80 shadow-sm">
                                <p class="text-[10px] text-slate-500 mb-2 uppercase tracking-widest font-bold">Total Uang Muka (TDP)</p>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-lg font-bold text-sky-600">Rp</span>
                                    <span id="resultTdp" class="text-2xl sm:text-3xl font-geely text-sky-600 font-bold">0</span>
                                </div>
                                <p class="text-[9px] text-slate-500 mt-3 tracking-wider leading-relaxed">*TDP sudah termasuk DP Murni, Estimasi Asuransi, Biaya Admin, dan Angsuran Bulan Pertama (ADDM).</p>
                            </div>

                            <!-- Rincian -->
                            <div class="space-y-4 pt-4 border-t border-sky-200/70">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-500 font-medium">Harga Kendaraan</span>
                                    <span id="detailOtr" class="font-bold text-slate-800 tracking-wide">Rp 0</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-500 font-medium">Pokok Hutang</span>
                                    <span id="detailPrincipal" class="font-bold text-slate-800 tracking-wide">Rp 0</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-500 font-medium">Suku Bunga (Flat)</span>
                                    <span id="detailRate" class="font-bold text-sky-700 tracking-wide bg-sky-500/10 border border-sky-200 px-2.5 py-1 rounded-md">0% p.a</span>
                                </div>
                            </div>

                            <button onclick="window.location.href='/test-drive'" class="btn-shimmer w-full mt-8 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 text-white font-bold py-4 px-6 rounded-full transition-all duration-300 text-xs tracking-[0.2em] uppercase shadow-[0_10px_25px_rgba(14,165,233,0.35)] hover:shadow-[0_15px_35px_rgba(14,165,233,0.5)] transform hover:-translate-y-0.5">
                                Ajukan Test Drive Sekarang
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- Logika Kalkulator (Vanilla JS) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // Data Terpadu: Model, Varian, Harga OTR & URL Sirv Spin / Gambar Preview
            const carData = {
                'ex5': {
                    spin: 'https://riszali.sirv.com/Spins/ex5/white.spin',
                    variants: [
                        { name: 'PRO (2026 Special Price)', price: 465000000 },
                        { name: 'MAX (2026 Special Price)', price: 505000000 }
                    ]
                },
                'ex2': {
                    spin: 'https://riszali.sirv.com/Spins/ex2/White.spin',
                    variants: [
                        { name: 'PRO', price: 229900000 },
                        { name: 'MAX', price: 259900000 }
                    ]
                },
                'starray': {
                    spin: 'https://riszali.sirv.com/Spins/starray/alphine-white.spin',
                    variants: [
                        { name: 'EM-i Hybrid', price: 499000000 }
                    ]
                },
                'coolray': {
                    image: '{{ asset('assets/coolray/hero.webp') }}',
                    variants: [
                        { name: 'Coolray Standard', price: 333000000 },
                        { name: 'Coolray Flagship', price: 377000000 }
                    ]
                }
            };

            // Data Suku Bunga Leasing Up-to-date (Flat p.a berdasarkan tenor tahun)
            const rates = {
                'bca': { 1: 2.77, 2: 3.33, 3: 3.39, 4: 3.99, 5: 4.99 },
                'mtf': { 1: 3.00, 2: 3.50, 3: 3.75, 4: 4.25, 5: 5.25 },
                'adira': { 1: 3.50, 2: 4.00, 3: 4.50, 4: 5.00, 5: 6.00 },
                'maybank': { 1: 2.98, 2: 3.48, 3: 3.68, 4: 4.18, 5: 5.28 },
                'cnaf': { 1: 2.88, 2: 3.38, 3: 3.58, 4: 4.08, 5: 5.18 },
                'muf': { 1: 2.99, 2: 3.49, 3: 3.79, 4: 4.19, 5: 5.19 },
                'clipan': { 1: 3.10, 2: 3.80, 3: 4.10, 4: 4.90, 5: 5.90 },
                'bfi': { 1: 3.75, 2: 4.25, 3: 4.75, 4: 5.50, 5: 6.50 },
                'oto': { 1: 3.60, 2: 4.10, 3: 4.60, 4: 5.20, 5: 6.10 }
            };

            // DOM Elements
            const modelBtns = document.querySelectorAll('.model-select-btn');
            const spinIframe = document.getElementById('car-spin-iframe');
            const previewImg = document.getElementById('car-preview-img');
            const variantSelect = document.getElementById('carVariant');
            const otrDisplay = document.getElementById('otrPriceDisplay');
            const otrValue = document.getElementById('otrPriceValue');
            const leasingSelect = document.getElementById('leasing');
            const dpPercentSlider = document.getElementById('dpPercent');
            const dpPercentLabel = document.getElementById('dpPercentLabel');
            const tenorRadios = document.querySelectorAll('input[name="tenor"]');

            // Format Rupiah
            const formatRupiah = (number) => {
                return new Intl.NumberFormat('id-ID', { maximumFractionDigits: 0 }).format(number);
            };

            // Memuat Varian ke dalam Dropdown Select
            const populateVariants = (modelKey) => {
                const variants = carData[modelKey].variants;
                variantSelect.innerHTML = '';
                
                variants.forEach((variant, index) => {
                    const option = document.createElement('option');
                    option.value = index;
                    option.textContent = variant.name;
                    variantSelect.appendChild(option);
                });
                
                // Set harga berdasarkan varian pertama (index 0) secara otomatis
                updatePriceFromVariant(modelKey, 0);
            };

            // Memperbarui Harga Berdasarkan Varian
            const updatePriceFromVariant = (modelKey, variantIndex) => {
                const price = carData[modelKey].variants[variantIndex].price;
                otrValue.value = price;
                otrDisplay.value = formatRupiah(price);
                calculateKKB();
            };

            // Fungsi Kalkulasi Utama KKB
            const calculateKKB = () => {
                const price = parseFloat(otrValue.value);
                const dpPercent = parseFloat(dpPercentSlider.value);
                const leasing = leasingSelect.value;
                const tenor = parseInt(document.querySelector('input[name="tenor"]:checked').value);
                
                const interestRate = rates[leasing][tenor];

                const dpPure = price * (dpPercent / 100);
                const principal = price - dpPure; 
                const totalInterest = principal * (interestRate / 100) * tenor; 
                const totalDebt = principal + totalInterest; 
                
                const months = tenor * 12;
                const installment = totalDebt / months; 

                // Estimasi Biaya Admin & Asuransi (ADDM)
                const adminFee = 2500000; 
                const insurance = price * 0.025 * tenor; 
                const totalDp = dpPure + adminFee + insurance + installment; 

                // Update UI dengan animasi halus
                const resultElements = ['resultInstallment', 'resultTdp', 'detailOtr', 'detailPrincipal', 'detailRate'];
                resultElements.forEach(id => {
                    const el = document.getElementById(id);
                    el.style.opacity = '0';
                });

                setTimeout(() => {
                    document.getElementById('resultInstallment').innerText = formatRupiah(installment);
                    document.getElementById('resultTdp').innerText = formatRupiah(totalDp);
                    document.getElementById('detailOtr').innerText = 'Rp ' + formatRupiah(price);
                    document.getElementById('detailPrincipal').innerText = 'Rp ' + formatRupiah(principal);
                    document.getElementById('detailRate').innerText = interestRate.toFixed(2) + '% p.a';

                    resultElements.forEach(id => {
                        const el = document.getElementById(id);
                        el.style.transition = 'opacity 0.3s ease';
                        el.style.opacity = '1';
                    });
                }, 150);
            };

            // Event Listeners untuk Tombol Pemilihan Model
            modelBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    // Reset styling semua tombol ke light inactive
                    modelBtns.forEach(b => {
                        b.classList.remove('active', 'border-2', 'border-sky-500', 'bg-sky-500/15', 'text-sky-700', 'shadow-[0_4px_15px_rgba(14,165,233,0.25)]');
                        b.classList.add('border', 'border-sky-200/80', 'bg-white/80', 'text-slate-600');
                    });
                    
                    // Set styling tombol yang aktif ke light active
                    const target = e.currentTarget;
                    target.classList.add('active', 'border-2', 'border-sky-500', 'bg-sky-500/15', 'text-sky-700', 'shadow-[0_4px_15px_rgba(14,165,233,0.25)]');
                    target.classList.remove('border-sky-200/80', 'bg-white/80', 'text-slate-600');

                    // Ambil data kendaraan
                    const modelKey = target.getAttribute('data-model');
                    const selectedCar = carData[modelKey];

                    // Update Media Tampilan (360 Spin atau Hero Preview Image)
                    if (selectedCar.image) {
                        spinIframe.style.opacity = '0';
                        setTimeout(() => {
                            spinIframe.classList.add('hidden');
                            previewImg.src = selectedCar.image;
                            previewImg.classList.remove('hidden');
                            previewImg.style.opacity = '0';
                            previewImg.style.transform = 'scale(0.95)';
                            setTimeout(() => {
                                previewImg.style.transition = 'all 0.5s ease';
                                previewImg.style.opacity = '1';
                                previewImg.style.transform = 'scale(1)';
                            }, 50);
                        }, 200);
                    } else {
                        previewImg.classList.add('hidden');
                        spinIframe.classList.remove('hidden');
                        spinIframe.style.opacity = '0';
                        setTimeout(() => {
                            spinIframe.src = selectedCar.spin;
                            spinIframe.style.transition = 'opacity 0.5s ease';
                            spinIframe.style.opacity = '1';
                        }, 300);
                    }

                    // Memuat varian yang sesuai
                    populateVariants(modelKey);
                });
            });

            // Event Listener untuk Dropdown Varian
            variantSelect.addEventListener('change', (e) => {
                const activeModelBtn = document.querySelector('.model-select-btn.active');
                const modelKey = activeModelBtn.getAttribute('data-model');
                updatePriceFromVariant(modelKey, e.target.value);
            });

            // Event Listeners Parameter Kalkulator lainnya
            leasingSelect.addEventListener('change', calculateKKB);

            dpPercentSlider.addEventListener('input', (e) => {
                dpPercentLabel.innerText = e.target.value + '%';
                calculateKKB();
            });

            tenorRadios.forEach(radio => {
                radio.addEventListener('change', calculateKKB);
            });

            // Inisialisasi Pertama Kali (Pilih EX5 sebagai default)
            spinIframe.src = carData['ex5'].spin;
            populateVariants('ex5');
        });
    </script>
</x-layouts.app>