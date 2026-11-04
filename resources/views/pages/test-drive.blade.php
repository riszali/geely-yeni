<x-layouts.app>
    <!-- ==========================================
         NEXT-GEN SPATIAL UI (INNOVATIVE HUD)
    =========================================== -->
    <style>
        /* Base Resets & Hide Scrollbar */
        html, body { 
            background-color: #030303; 
            color: #ffffff;
            overflow-x: hidden; 
        }
        
        ::-webkit-scrollbar { width: 0px; background: transparent; }

        /* Advanced Spatial Glassmorphism */
        .spatial-glass {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.02) 100%);
            backdrop-filter: blur(30px) saturate(120%);
            -webkit-backdrop-filter: blur(30px) saturate(120%);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        /* Sci-Fi Input Fields */
        .hud-input-group {
            position: relative;
            transition: all 0.3s ease;
        }
        .hud-input {
            width: 100%;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 1rem;
            padding: 1.25rem 1.25rem 1.25rem 3.5rem;
            color: #fff;
            font-size: 0.875rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hud-input:focus {
            background: rgba(34, 211, 238, 0.05);
            border-color: rgba(34, 211, 238, 0.5);
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.15);
            outline: none;
        }
        .hud-input::placeholder { color: rgba(255, 255, 255, 0.3); }
        .hud-input option { background-color: #0f172a; color: #fff; }
        
        .hud-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.4);
            transition: all 0.3s ease;
            pointer-events: none;
            width: 1.25rem;
            height: 1.25rem;
        }
        .hud-input:focus ~ .hud-icon {
            color: #22d3ee;
            filter: drop-shadow(0 0 8px rgba(34, 211, 238, 0.8));
        }

        /* Fix Webkit pickers */
        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
            opacity: 0.3;
            cursor: pointer;
        }
        ::-webkit-calendar-picker-indicator:hover { opacity: 1; }

        /* Dynamic Background Blurring */
        .bg-reactive {
            transition: all 1s ease-in-out;
            transform: scale(1.05);
        }

        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>

    <div class="relative min-h-screen flex items-center justify-center py-24 px-4 sm:px-6 lg:px-8 overflow-hidden">
        
        <!-- ==========================================
             REACTIVE CINEMATIC BACKGROUND
        =========================================== -->
        <div class="absolute inset-0 z-0">
            <img id="bg-visual" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" class="bg-reactive absolute inset-0 w-full h-full object-cover opacity-40 blur-[20px] scale-110">
            <!-- Vignette & Gradient Overlays -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-[#030303]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/20 to-black/80"></div>
            <!-- Grid overlay for HUD effect -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-50 mix-blend-overlay"></div>
        </div>

        <!-- ==========================================
             MAIN FLOATING SPATIAL PANEL
        =========================================== -->
        <div class="relative z-10 w-full max-w-[1260px] spatial-glass rounded-[2.5rem] md:rounded-[3rem] overflow-hidden flex flex-col lg:flex-row shadow-[0_0_100px_rgba(0,0,0,1)] ring-1 ring-white/10">
            
            <!-- LEFT: Showcase & Visuals -->
            <div class="w-full lg:w-5/12 p-6 sm:p-8 lg:p-12 relative flex flex-col justify-between overflow-hidden group bg-slate-950/40 lg:bg-transparent">
                <!-- Top: Badge & Header -->
                <div class="relative z-10">
                    <div class="inline-flex items-center mb-3 sm:mb-4 px-3.5 py-1 rounded-full border border-cyan-400/30 bg-black/40 backdrop-blur-md">
                        <span class="text-[8px] font-bold tracking-[0.25em] uppercase text-cyan-300">Geely Virtual Booking</span>
                    </div>
                    <h1 class="font-geely text-2xl sm:text-3xl lg:text-4xl text-white font-bold uppercase tracking-tight leading-[1.15] drop-shadow-xl">
                        Unlock<br class="hidden sm:inline"><span class="sm:hidden"> </span><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-500">The Future.</span>
                    </h1>
                </div>

                <!-- Middle: Dedicated Frame Foto Mobil (Tidak Tertimpa Tulisan) -->
                <div class="relative w-full aspect-[16/10] sm:aspect-[16/9] my-4 sm:my-6 rounded-2xl overflow-hidden border border-white/15 shadow-2xl bg-slate-950/80">
                    <img id="card-visual" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" alt="Geely Car Showcase" class="w-full h-full object-cover object-center transition-all duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent pointer-events-none"></div>
                </div>

                <!-- Bottom: Detail Spesifikasi Mobil -->
                <div class="relative z-10">
                    <div id="active-car-tag" class="text-cyan-400 text-[10px] font-bold tracking-[0.3em] uppercase mb-1.5 block transition-opacity duration-300">Smart SUV</div>
                    <h2 id="active-car-title" class="font-geely text-2xl sm:text-3xl text-white tracking-wide uppercase mb-2 transition-opacity duration-300">Geely EX5</h2>
                    <p id="active-car-desc" class="text-white/70 text-xs sm:text-sm font-light max-w-sm leading-relaxed transition-opacity duration-300">
                        Siap mengubah cara Anda memandang mobilitas. Konfirmasi jadwal test drive Anda dalam hitungan detik.
                    </p>
                </div>
            </div>

            <!-- RIGHT: Interactive Form -->
            <div class="w-full lg:w-7/12 p-8 md:p-12 bg-black/40 backdrop-blur-xl border-l border-white/5">
                
                <form id="testDriveForm" class="space-y-8">
                    @csrf
                    
                    <!-- 1. Model Selector (Pills) -->
                    <div class="space-y-3">
                        <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/50 flex items-center gap-2">
                            <span class="w-4 h-[1px] bg-cyan-500/50"></span> Pilih Model Kendaraan
                        </label>
                        <div class="flex flex-wrap gap-2.5 sm:gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="ex5" class="peer sr-only" checked>
                                <div class="px-5 sm:px-6 py-2.5 sm:py-3 rounded-full border border-white/10 bg-white/5 text-white/60 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-300 peer-checked:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-white/10">
                                    Geely EX5
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="ex2" class="peer sr-only">
                                <div class="px-5 sm:px-6 py-2.5 sm:py-3 rounded-full border border-white/10 bg-white/5 text-white/60 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-300 peer-checked:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-white/10">
                                    Geely EX2
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="starray" class="peer sr-only">
                                <div class="px-5 sm:px-6 py-2.5 sm:py-3 rounded-full border border-white/10 bg-white/5 text-white/60 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-300 peer-checked:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-white/10">
                                    Starray EM-i
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="coolray" class="peer sr-only">
                                <div class="px-5 sm:px-6 py-2.5 sm:py-3 rounded-full border border-white/10 bg-white/5 text-white/60 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-300 peer-checked:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-white/10">
                                    Geely Coolray
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- 2. Personal Info -->
                        <div class="space-y-4">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/50 flex items-center gap-2">
                                <span class="w-4 h-[1px] bg-cyan-500/50"></span> Data Diri
                            </label>
                            
                            <!-- Input with Icon -->
                            <div class="hud-input-group">
                                <input type="text" name="full_name" id="fullName" required placeholder="Nama Lengkap" class="hud-input peer">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            
                            <div class="hud-input-group">
                                <input type="tel" name="phone" id="phoneNumber" required placeholder="No. WhatsApp (cth: 08170879315)" class="hud-input peer">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                        </div>

                        <!-- 3. Scheduling -->
                        <div class="space-y-4">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/50 flex items-center gap-2">
                                <span class="w-4 h-[1px] bg-cyan-500/50"></span> Jadwal & Lokasi
                            </label>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div class="hud-input-group">
                                    <input type="date" name="preferred_date" id="prefDate" required class="hud-input peer !pl-4 text-white/80">
                                </div>
                                <div class="hud-input-group">
                                    <input type="time" name="preferred_time" id="prefTime" required class="hud-input peer !pl-4 text-white/80">
                                </div>
                            </div>
                            
                            <div class="hud-input-group">
                                <select name="dealer_location" id="dealerLocation" required class="hud-input peer !pl-11 appearance-none cursor-pointer">
                                    <option value="dealer" selected>Test Drive di Dealer (Geely Wonder Alam Sutera)</option>
                                    <option value="home">Test Drive di Rumah (Home Test Drive)</option>
                                </select>
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-white/30">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>

                            <!-- Input Alamat (Otomatis tampil saat memilih Test Drive di Rumah) -->
                            <div id="homeAddressWrapper" class="hud-input-group hidden">
                                <input type="text" name="address" id="homeAddress" placeholder="Alamat Lengkap / Domisili Pengantaran Unit" class="hud-input peer !pl-11 text-white/90">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Error Alert Box -->
                    <div id="errorAlert" class="hidden p-4 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-300 text-xs font-medium"></div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit" id="submitBtn" class="w-full relative group overflow-hidden rounded-xl bg-cyan-500/10 border border-cyan-400/50 py-4 sm:py-5 px-6 transition-all duration-300 hover:bg-cyan-500 hover:shadow-[0_0_40px_rgba(34,211,238,0.6)]">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                            
                            <span class="relative z-10 flex justify-center items-center gap-3 text-cyan-300 group-hover:text-black font-bold text-xs sm:text-sm tracking-[0.2em] uppercase transition-colors">
                                Konfirmasi Booking Test Drive
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                        </button>
                    </div>
                </form>

                <!-- Success State (Hidden initially) -->
                <div id="successMessage" class="hidden h-full flex-col items-center justify-center text-center animate-fade-in py-10">
                    <div class="relative w-24 h-24 mb-8 flex items-center justify-center">
                        <div class="absolute inset-0 rounded-full border-2 border-cyan-500/30 animate-[ping_2s_infinite]"></div>
                        <div class="absolute inset-2 rounded-full border border-cyan-400/60 animate-[spin_4s_linear_infinite]"></div>
                        <svg class="w-10 h-10 text-cyan-300 relative z-10 drop-shadow-[0_0_10px_rgba(34,211,238,0.8)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="font-geely text-2xl sm:text-3xl text-white mb-3 tracking-wide">Jadwal Berhasil Dikirim</h3>
                    <p class="text-white/60 text-sm leading-relaxed max-w-sm mx-auto mb-6">
                        Terima kasih! Formulir booking Anda telah kami terima. Sales Consultant Geely Wonder Alam Sutera (<strong class="text-white font-semibold">YENNI - +62 817-0879-315</strong>) akan segera mengonfirmasi jadwal test drive Anda via WhatsApp.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-3 mb-6">
                        <a href="https://wa.me/628170879315?text=Halo%20Yenni,%20saya%20sudah%20mengisi%20formulir%20booking%20test%20drive%20Geely" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="px-6 py-3 rounded-full bg-[#25D366] text-white text-xs font-bold tracking-wider uppercase hover:bg-[#20bd5a] transition-all shadow-[0_4px_14px_rgba(37,211,102,0.4)] flex items-center gap-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            <span>Chat Langsung Yenni</span>
                        </a>

                        <button onclick="window.location.reload()" class="px-6 py-3 rounded-full bg-white/5 border border-white/10 text-white/80 text-[10px] tracking-[0.2em] uppercase hover:bg-white hover:text-black transition-all duration-300">
                            Kembali ke Menu
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // Database Visual & Data Model Mobil
            const db = {
                'ex5': {
                    img: 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp',
                    tag: 'Smart SUV',
                    title: 'Geely EX5',
                    desc: 'Siap mengubah cara Anda memandang mobilitas. Konfirmasi jadwal test drive Anda dalam hitungan detik.'
                },
                'ex2': {
                    img: "{{ asset('assets/images/spesifikasi-Geely-EX2-2026.webp') }}",
                    tag: 'Urban EV',
                    title: 'Geely EX2',
                    desc: 'Manuver lincah untuk jalanan kota. Rasakan teknologi EV masa depan langsung dari genggaman Anda.'
                },
                'starray': {
                    img: "{{ asset('assets/images/geely-starray-em-i-front-angle-low-view-414009.webp') }}",
                    tag: 'Super Hybrid',
                    title: 'Starray EM-i',
                    desc: 'Simfoni kemewahan kabin dan performa tanpa batas. Atur jadwal Anda untuk pengalaman eksklusif.'
                },
                'coolray': {
                    img: "{{ asset('assets/coolray/1782976852-2artboard-2-jpg.avif') }}",
                    tag: 'Dynamic Sport SUV',
                    title: 'Geely Coolray',
                    desc: 'Ditenagai mesin 1.5L Turbo 172 HP dan 7-Speed DCT. Rasakan akselerasi responsif dan kendali penuh di setiap lintasan.'
                }
            };

            const radios = document.querySelectorAll('input[name="car_model"]');
            const bgVisual = document.getElementById('bg-visual');
            const cardVisual = document.getElementById('card-visual');
            const activeTag = document.getElementById('active-car-tag');
            const activeTitle = document.getElementById('active-car-title');
            const activeDesc = document.getElementById('active-car-desc');
            const form = document.getElementById('testDriveForm');
            const successMsg = document.getElementById('successMessage');
            const errorAlert = document.getElementById('errorAlert');

            // Tangkap query param 'model' jika datang dari simulasi kredit
            const urlParams = new URLSearchParams(window.location.search);
            const preselectedModel = urlParams.get('model');
            if (preselectedModel && db[preselectedModel]) {
                const targetRadio = document.querySelector(`input[name="car_model"][value="${preselectedModel}"]`);
                if (targetRadio) {
                    targetRadio.checked = true;
                    updateVisuals(preselectedModel);
                }
            }

            function updateVisuals(modelKey) {
                const data = db[modelKey];
                if (!data) return;

                [activeTag, activeTitle, activeDesc, cardVisual, bgVisual].forEach(el => {
                    if (el) el.style.opacity = '0';
                });

                setTimeout(() => {
                    bgVisual.src = data.img;
                    cardVisual.src = data.img;
                    activeTag.textContent = data.tag;
                    activeTitle.textContent = data.title;
                    activeDesc.textContent = data.desc;

                    activeTag.style.opacity = '1';
                    activeTitle.style.opacity = '1';
                    activeDesc.style.opacity = '1';
                    cardVisual.style.opacity = '1';
                    bgVisual.style.opacity = '0.4';
                }, 300);
            }

            // Handle UI changes on Car Selection
            radios.forEach(radio => {
                radio.addEventListener('change', (e) => {
                    updateVisuals(e.target.value);
                });
            });

            // Set min date to today
            const today = new Date().toISOString().split('T')[0];
            const dateInput = document.getElementById('prefDate');
            if(dateInput) dateInput.setAttribute('min', today);

            // Toggle Input Alamat Saat Memilih Test Drive di Rumah
            const dealerLocationSelect = document.getElementById('dealerLocation');
            const homeAddressWrapper = document.getElementById('homeAddressWrapper');
            if (dealerLocationSelect && homeAddressWrapper) {
                dealerLocationSelect.addEventListener('change', (e) => {
                    if (e.target.value === 'home') {
                        homeAddressWrapper.classList.remove('hidden');
                    } else {
                        homeAddressWrapper.classList.add('hidden');
                    }
                });
            }

            // Real AJAX Form Submission ke CRM Database
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                errorAlert.classList.add('hidden');
                errorAlert.innerHTML = '';
                
                const btn = document.getElementById('submitBtn');
                const originalContent = btn.innerHTML;
                
                // Processing State
                btn.innerHTML = `
                    <span class="relative z-10 flex justify-center items-center gap-3 text-cyan-300 font-bold text-xs sm:text-sm tracking-[0.2em] uppercase">
                        <svg class="animate-spin h-4 w-4 text-cyan-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Memproses Jadwal...
                    </span>
                `;
                btn.disabled = true;

                const formData = new FormData(form);

                try {
                    const response = await fetch("{{ route('leads.store-test-drive') }}", {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    });

                    const result = await response.json();

                    if (!response.ok) {
                        throw new Error(result.message || 'Terjadi kesalahan saat memproses data.');
                    }

                    // Tampilkan Sukses
                    form.style.display = 'none';
                    successMsg.classList.remove('hidden');
                    successMsg.classList.add('flex');
                } catch (err) {
                    btn.innerHTML = originalContent;
                    btn.disabled = false;
                    errorAlert.textContent = err.message || 'Gagal terhubung ke server CRM. Silakan coba kembali.';
                    errorAlert.classList.remove('hidden');
                }
            });
        });
    </script>
</x-layouts.app>