<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') | Geely Wonder Alam Sutera</title>
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v={{ time() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Orbitron:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background-color: #f8fafc;
            color: #0f172a;
            font-family: 'Inter', sans-serif;
        }
        .hud-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            box-shadow: 0 10px 25px -5px rgba(14, 165, 233, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02);
        }
        .hud-card-sm {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
        }
        .hud-input {
            width: 100%;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 10px 14px;
            font-size: 13px;
            color: #0f172a;
            transition: all 0.2s;
        }
        .hud-input:focus {
            outline: none;
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.15);
        }
    </style>
    @stack('styles')
</head>
<body class="min-h-screen antialiased selection:bg-[#0284c7] selection:text-white flex flex-col md:flex-row bg-[#f8fafc]">

    <!-- Mobile Header with Hamburger -->
    <div class="md:hidden flex items-center justify-between p-4 bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/footer-logos-geely.png') }}" alt="Geely Logo" class="h-7 w-auto object-contain brightness-0">
            <span class="font-bold text-sm tracking-wider text-slate-900">GEELY <span class="text-[#0284c7]">ADMIN</span></span>
        </div>
        <button id="mobileMenuBtn" aria-label="Toggle Menu" class="p-2 rounded-lg bg-slate-100 border border-slate-200 text-slate-700 hover:bg-slate-200">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
        </button>
    </div>

    <!-- SIDEBAR NAVIGASI TERPADU (LIGHT THEME) -->
    <aside id="sidebar" class="fixed md:sticky top-0 inset-y-0 left-0 z-40 w-64 lg:w-72 bg-white border-r border-slate-200 flex flex-col justify-between transform -translate-x-full md:translate-x-0 transition-transform duration-300 h-screen shadow-sm">
        
        <!-- Bagian Atas: Logo Brand & Status Profil -->
        <div>
            <div class="p-6 border-b border-slate-200 flex items-center gap-3.5">
                <img src="{{ asset('assets/footer-logos-geely.png') }}" alt="Geely Logo" class="h-9 w-auto object-contain brightness-0">
                <div>
                    <h2 class="font-bold text-sm uppercase tracking-wider text-slate-900 flex items-center gap-1.5">
                        GEELY <span class="text-[#0284c7]">PORTAL</span>
                    </h2>
                    <span class="text-[9px] text-emerald-600 font-mono tracking-wider flex items-center gap-1.5 mt-0.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> SYSTEM ONLINE
                    </span>
                </div>
            </div>

            <!-- Menu Navigasi Utama -->
            <nav class="p-4 space-y-1.5 text-xs font-semibold">
                <div class="px-3 py-2 text-[10px] uppercase font-bold tracking-widest text-slate-400">
                    Menu Utama
                </div>

                <!-- 1. CRM Leads & Traffic -->
                <a href="{{ route('admin.leads.index') }}" 
                   class="flex items-center gap-3 px-3.5 py-3 rounded-xl transition-all {{ request()->routeIs('admin.leads.*') ? 'bg-sky-50 border border-sky-200 text-[#0284c7] font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span>CRM Leads & Traffic</span>
                </a>

                <!-- 2. Customer Delivery Moments -->
                <a href="{{ route('admin.deliveries.index') }}" 
                   class="flex items-center gap-3 px-3.5 py-3 rounded-xl transition-all {{ request()->routeIs('admin.deliveries.*') ? 'bg-sky-50 border border-sky-200 text-[#0284c7] font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span>Foto Delivery Order</span>
                    <span class="ml-auto px-2 py-0.5 rounded-full text-[9px] font-bold bg-sky-100 text-sky-700">Baru</span>
                </a>

                <!-- 3. Artikel & Berita SEO -->
                <a href="{{ route('admin.articles.index') }}" 
                   class="flex items-center gap-3 px-3.5 py-3 rounded-xl transition-all {{ request()->routeIs('admin.articles.*') ? 'bg-sky-50 border border-sky-200 text-[#0284c7] font-bold shadow-sm' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <span>Artikel & Berita SEO</span>
                </a>

                <div class="pt-4 px-3 py-2 text-[10px] uppercase font-bold tracking-widest text-slate-400">
                    Akses Cepat
                </div>

                <!-- 4. Lihat Website Publik -->
                <a href="/" target="_blank" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-all">
                    <svg class="w-4 h-4 shrink-0 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    <span>Lihat Website</span>
                </a>
            </nav>
        </div>

        <!-- Bagian Bawah: Akun Admin & Logout -->
        <div class="p-4 border-t border-slate-200 bg-slate-50">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-9 h-9 rounded-full bg-sky-600 text-white flex items-center justify-center font-bold text-xs shrink-0 shadow-sm">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    </div>
                    <div class="truncate">
                        <p class="text-xs font-bold text-slate-800 truncate">{{ auth()->user()->name ?? 'Admin Geely' }}</p>
                        <p class="text-[10px] text-slate-500 truncate">{{ auth()->user()->email ?? 'admin@higeely.com' }}</p>
                    </div>
                </div>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" title="Logout dari Sistem" class="p-2 rounded-xl text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Overlay Mobile -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-slate-900/40 z-30 hidden md:hidden"></div>

    <!-- AREA KONTEN UTAMA -->
    <div class="flex-1 flex flex-col min-w-0">
        <main class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
            @yield('content')
        </main>
    </div>

    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        if (mobileMenuBtn && sidebar && sidebarOverlay) {
            mobileMenuBtn.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                sidebarOverlay.classList.toggle('hidden');
            });
            sidebarOverlay.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('hidden');
            });
        }
    </script>
    @stack('scripts')
</body>
</html>