@extends('layouts.admin')

@section('title', 'Manajemen Foto Delivery Order')

@section('content')
    <!-- Top Header -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="font-bold text-xl sm:text-2xl uppercase tracking-wider text-white flex items-center gap-2.5">
                FOTO SERAH TERIMA <span class="text-[#00b4d8]">DELIVERY ORDER</span>
            </h1>
            <p class="text-xs text-gray-400 mt-1">
                Upload & tampilkan momen bahagia serah terima kendaraan kepada pelanggan di Landing Page
            </p>
        </div>

        <button onclick="openUploadModal()" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-[#00b4d8] hover:bg-[#00c4e8] text-black text-xs font-bold uppercase tracking-wider transition-all shadow-[0_0_20px_rgba(0,180,216,0.3)]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
            Post Foto Baru
        </button>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-xs font-semibold flex items-center justify-between">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-white">&times;</button>
        </div>
    @endif

    <!-- 3 Kotak Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="hud-card p-4 sm:p-5">
            <span class="text-[10px] font-bold tracking-widest uppercase text-gray-400 block mb-1">Total Foto Tersimpan</span>
            <div class="text-2xl sm:text-3xl font-bold text-white">{{ number_format($stats['total']) }}</div>
            <span class="text-[10px] text-gray-500 mt-1 block">Dokumentasi Pelanggan</span>
        </div>

        <div class="hud-card p-4 sm:p-5">
            <span class="text-[10px] font-bold tracking-widest uppercase text-emerald-400 block mb-1">Tayang di Halaman Home</span>
            <div class="text-2xl sm:text-3xl font-bold text-emerald-400">{{ number_format($stats['active']) }}</div>
            <span class="text-[10px] text-gray-500 mt-1 block">Status Aktif</span>
        </div>

        <div class="hud-card p-4 sm:p-5">
            <span class="text-[10px] font-bold tracking-widest uppercase text-amber-400 block mb-1">Disembunyikan (Arsip)</span>
            <div class="text-2xl sm:text-3xl font-bold text-amber-400">{{ number_format($stats['inactive']) }}</div>
            <span class="text-[10px] text-gray-500 mt-1 block">Status Non-Aktif</span>
        </div>
    </div>

    <!-- Grid Foto Delivery Order -->
    <div class="hud-card p-5 sm:p-6">
        <div class="flex items-center justify-between border-b border-white/10 pb-4 mb-6">
            <h3 class="text-xs font-bold uppercase tracking-wider text-white">Galeri Foto Serah Terima Pelanggan</h3>
            <span class="text-[11px] text-gray-400">Total: {{ $deliveries->total() }} Foto</span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @forelse($deliveries as $item)
                <div class="hud-card-sm overflow-hidden flex flex-col justify-between group border border-white/10 hover:border-[#00b4d8]/40 transition-all">
                    <div class="relative w-full aspect-[4/5] bg-black/40 overflow-hidden">
                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        <div class="absolute top-2.5 right-2.5">
                            @if($item->is_active)
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-emerald-500/90 text-black backdrop-blur-md">
                                    Tampil di Home
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-amber-500/90 text-black backdrop-blur-md">
                                    Disembunyikan
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="p-4 flex flex-col justify-between flex-1">
                        <div>
                            <h4 class="font-bold text-white text-sm line-clamp-1 mb-1">{{ $item->title }}</h4>
                            <div class="flex items-center gap-2 text-[10px] text-gray-400 mb-3">
                                <span>{{ $item->customer_name ?: 'Pelanggan Geely' }}</span>
                                @if($item->car_model)
                                    <span>&bull; {{ $item->car_model }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="pt-3 border-t border-white/10 flex items-center justify-between">
                            <span class="text-[9px] text-gray-500 font-mono">{{ $item->created_at->format('d M Y') }}</span>
                            
                            <form action="{{ route('admin.deliveries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto delivery ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2.5 py-1 rounded-lg bg-red-500/10 border border-red-500/30 text-red-400 hover:bg-red-500 hover:text-white transition-all text-xs font-semibold">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-16 text-center text-gray-500 text-xs">
                    Belum ada foto serah terima yang diunggah. Klik tombol <strong>Post Foto Baru</strong> di atas untuk mempublikasikan foto delivery pertama!
                </div>
            @endforelse
        </div>

        <div class="mt-6 border-t border-white/10 pt-4">
            {{ $deliveries->links() }}
        </div>
    </div>

    <!-- MODAL POST FOTO BARU -->
    <div id="uploadModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-sm p-4">
        <div class="hud-card w-full max-w-lg p-6 relative">
            <div class="flex items-center justify-between border-b border-white/10 pb-3 mb-4">
                <h3 class="font-bold text-sm uppercase tracking-wider text-white">Post Foto Delivery Order Baru</h3>
                <button onclick="closeUploadModal()" class="text-gray-400 hover:text-white text-xl">&times;</button>
            </div>

            <form action="{{ route('admin.deliveries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Judul / Keterangan Singkat</label>
                    <input type="text" name="title" placeholder="Contoh: Serah Terima Geely EX5 - Bpk. Hendra" class="hud-input">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Nama Customer</label>
                        <input type="text" name="customer_name" placeholder="Bpk. Hendra" class="hud-input">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Model Mobil</label>
                        <select name="car_model" class="hud-input">
                            <option value="Geely EX5">Geely EX5</option>
                            <option value="Geely EX2">Geely EX2</option>
                            <option value="Geely Starray EM-i">Geely Starray EM-i</option>
                            <option value="Geely Coolray">Geely Coolray</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Upload File Foto (Max 5MB)</label>
                    <input type="file" name="image" accept="image/*" class="hud-input file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-white/10 file:text-white">
                </div>

                <div>
                    <label class="block text-[11px] font-bold uppercase tracking-wider text-gray-400 mb-1">Atau Masukkan URL Gambar Eksternal</label>
                    <input type="url" name="image_url" placeholder="https://..." class="hud-input text-xs">
                </div>

                <label class="flex items-center gap-3 cursor-pointer pt-1">
                    <input type="checkbox" name="is_active" value="1" checked class="w-4 h-4 rounded text-[#00b4d8] bg-black/40 border-white/20">
                    <span class="text-xs font-semibold text-white">Langsung Tayangkan di Halaman Utama (Home)</span>
                </label>

                <div class="pt-4 border-t border-white/10 flex justify-end gap-2">
                    <button type="button" onclick="closeUploadModal()" class="px-4 py-2 rounded-xl bg-white/5 border border-white/10 text-xs font-semibold text-gray-300 hover:text-white">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2 rounded-xl bg-[#00b4d8] hover:bg-[#00c4e8] text-black text-xs font-bold uppercase tracking-wider shadow-lg">
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