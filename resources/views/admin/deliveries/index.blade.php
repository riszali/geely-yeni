@extends('layouts.admin')

@section('title', 'Manajemen Foto Delivery Order')

@section('content')
    <!-- Top Header (Light Theme) -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="font-bold text-xl sm:text-2xl uppercase tracking-wider text-slate-900 flex items-center gap-2.5">
                FOTO SERAH TERIMA <span class="text-[#0284c7]">DELIVERY ORDER</span>
            </h1>
            <p class="text-xs text-slate-500 mt-1">
                Upload & tampilkan momen bahagia serah terima kendaraan kepada pelanggan di Landing Page
            </p>
        </div>

        <button onclick="openUploadModal()" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-700 text-white text-xs font-bold uppercase tracking-wider transition-all shadow-sm hover:shadow-md cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            Post Foto Baru
        </button>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between shadow-xs">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 text-base">&times;</button>
        </div>
    @endif

    <!-- 3 Kotak Statistik (Light Theme) -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="hud-card p-4 sm:p-5 bg-white border border-slate-200">
            <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400 block mb-1">Total Foto Tersimpan</span>
            <div class="text-2xl sm:text-3xl font-bold text-slate-900">{{ number_format($stats['total']) }}</div>
            <span class="text-[10px] text-slate-500 mt-1 block">Dokumentasi Pelanggan</span>
        </div>

        <div class="hud-card p-4 sm:p-5 bg-white border border-slate-200">
            <span class="text-[10px] font-bold tracking-widest uppercase text-emerald-600 block mb-1">Tayang di Halaman Home</span>
            <div class="text-2xl sm:text-3xl font-bold text-emerald-600">{{ number_format($stats['active']) }}</div>
            <span class="text-[10px] text-slate-500 mt-1 block">Status Aktif</span>
        </div>

        <div class="hud-card p-4 sm:p-5 bg-white border border-slate-200">
            <span class="text-[10px] font-bold tracking-widest uppercase text-amber-600 block mb-1">Disembunyikan (Arsip)</span>
            <div class="text-2xl sm:text-3xl font-bold text-amber-600">{{ number_format($stats['inactive']) }}</div>
            <span class="text-[10px] text-slate-500 mt-1 block">Status Non-Aktif</span>
        </div>
    </div>

    <!-- Grid Foto Delivery Order -->
    <div class="hud-card p-5 sm:p-6 bg-white border border-slate-200">
        <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-6">
            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900">Galeri Foto Serah Terima Pelanggan</h3>
            <span class="text-[11px] text-slate-500 font-medium">Total: {{ $deliveries->total() }} Foto</span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @forelse($deliveries as $item)
                <div class="hud-card-sm overflow-hidden flex flex-col justify-between group bg-white border border-slate-200 hover:border-sky-400 hover:shadow-md transition-all">
                    <div class="relative w-full aspect-[4/5] bg-slate-100 overflow-hidden">
                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        <div class="absolute top-2.5 right-2.5">
                            @if($item->is_active)
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-emerald-100 text-emerald-800 border border-emerald-300 backdrop-blur-md shadow-xs">
                                    Tampil di Home
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-amber-100 text-amber-800 border border-amber-300 backdrop-blur-md shadow-xs">
                                    Disembunyikan
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="p-4 flex flex-col justify-between flex-1 bg-white">
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm line-clamp-1 mb-1">{{ $item->title }}</h4>
                            <div class="flex items-center gap-2 text-[10px] text-slate-500 mb-3 font-medium">
                                <span>{{ $item->customer_name ?: 'Pelanggan Geely' }}</span>
                                @if($item->car_model)
                                    <span>&bull; {{ $item->car_model }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-[10px] text-slate-400 font-mono">{{ $item->created_at->format('d M Y') }}</span>
                            
                            <form action="{{ route('admin.deliveries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto delivery ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1.5 rounded-lg bg-rose-50 border border-rose-200 text-rose-600 hover:bg-rose-600 hover:text-white transition-all text-xs font-semibold cursor-pointer">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-16 text-center text-slate-400 text-xs">
                    Belum ada foto serah terima yang diunggah. Klik tombol <strong>Post Foto Baru</strong> di atas untuk mempublikasikan foto delivery pertama!
                </div>
            @endforelse
        </div>

        <div class="mt-6 border-t border-slate-100 pt-4">
            {{ $deliveries->links() }}
        </div>
    </div>

    <!-- MODAL POST FOTO BARU (Light Theme) -->
    <div id="uploadModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/50 backdrop-blur-xs p-4">
        <div class="bg-white rounded-2xl border border-slate-200 w-full max-w-lg p-6 relative shadow-2xl">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                <h3 class="font-bold text-sm uppercase tracking-wider text-slate-900">Post Foto Delivery Order Baru</h3>
                <button onclick="closeUploadModal()" class="text-slate-400 hover:text-slate-700 text-2xl leading-none cursor-pointer">&times;</button>
            </div>

            <form action="{{ route('admin.deliveries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">Judul / Keterangan Singkat</label>
                    <input type="text" name="title" placeholder="Contoh: Serah Terima Geely EX5 - Bpk. Hendra" class="hud-input bg-slate-50 border border-slate-200 text-slate-800 placeholder-slate-400 focus:border-sky-500">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Customer</label>
                        <input type="text" name="customer_name" placeholder="Bpk. Hendra" class="hud-input bg-slate-50 border border-slate-200 text-slate-800 placeholder-slate-400 focus:border-sky-500">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">Model Mobil</label>
                        <select name="car_model" class="hud-input bg-slate-50 border border-slate-200 text-slate-800 focus:border-sky-500">
                            <option value="Geely EX5">Geely EX5</option>
                            <option value="Geely EX2">Geely EX2</option>
                            <option value="Geely Starray EM-i">Geely Starray EM-i</option>
                            <option value="Geely Coolray">Geely Coolray</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">Upload File Foto (Max 5MB)</label>
                    <input type="file" name="image" accept="image/*" class="hud-input bg-slate-50 border border-slate-200 text-slate-800 file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-slate-200 file:text-slate-700">
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">Atau Masukkan URL Gambar Eksternal</label>
                    <input type="url" name="image_url" placeholder="https://..." class="hud-input text-xs bg-slate-50 border border-slate-200 text-slate-800 placeholder-slate-400 focus:border-sky-500">
                </div>

                <label class="flex items-center gap-3 cursor-pointer pt-1">
                    <input type="checkbox" name="is_active" value="1" checked class="w-4 h-4 rounded text-sky-600 bg-white border-slate-300 focus:ring-sky-500">
                    <span class="text-xs font-semibold text-slate-800">Langsung Tayangkan di Halaman Utama (Home)</span>
                </label>

                <div class="pt-4 border-t border-slate-100 flex justify-end gap-2.5">
                    <button type="button" onclick="closeUploadModal()" class="px-4 py-2 rounded-xl bg-slate-100 hover:bg-slate-200 border border-slate-200 text-xs font-semibold text-slate-700 transition-colors cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2 rounded-xl bg-sky-600 hover:bg-sky-700 text-white text-xs font-bold uppercase tracking-wider transition-all shadow-sm cursor-pointer">
                        Upload & Publikasikan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openUploadModal() {
            document.getElementById('uploadModal').classList.remove('hidden');
            document.getElementById('uploadModal').classList.add('flex');
        }
        function closeUploadModal() {
            document.getElementById('uploadModal').classList.add('hidden');
            document.getElementById('uploadModal').classList.remove('flex');
        }
    </script>
@endsection