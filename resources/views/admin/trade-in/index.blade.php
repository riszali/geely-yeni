@extends('layouts.admin')

@section('title', 'Permohonan Trade-In & Taksasi Mobil')

@section('content')
<div class="space-y-6">

    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold tracking-widest uppercase bg-sky-100 text-sky-700">Official Appraisal Center</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Permohonan Trade-In Mobil</h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Kelola data taksasi mobil bekas customer, verifikasi kondisi fisik, dan pantau status inspeksi.</p>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ route('admin.trade-in.export') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 font-semibold text-xs transition-all shadow-xs">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                <span>Export CSV</span>
            </a>
            <a href="{{ route('trade-in') }}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 text-white font-semibold text-xs tracking-wider uppercase transition-all shadow-xs">
                <span>Form Web Publik</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </div>

    <!-- Alert Notifikasi Flash -->
    @if(session('success'))
    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm font-semibold flex items-center justify-between shadow-xs">
        <div class="flex items-center gap-3">
            <span class="text-base">✓</span>
            <span>{{ session('success') }}</span>
        </div>
        <button type="button" onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-bold">&times;</button>
    </div>
    @endif

    <!-- 4 HUD Stat Cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="hud-card p-5">
            <div class="flex items-center justify-between mb-3">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Total Permohonan</span>
                <div class="w-8 h-8 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center font-bold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
            </div>
            <p class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ number_format($stats['total']) }}</p>
            <p class="text-[10px] text-slate-400 mt-1 font-medium">Semua data masuk</p>
        </div>

        <div class="hud-card p-5 border-amber-200 bg-white">
            <div class="flex items-center justify-between mb-3">
                <span class="text-[11px] font-bold uppercase tracking-wider text-amber-700">Baru Masuk</span>
                <div class="w-8 h-8 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center font-bold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
            <p class="text-3xl font-extrabold text-amber-800 tracking-tight">{{ number_format($stats['new']) }}</p>
            <p class="text-[10px] text-amber-600 mt-1 font-medium">Perlu segera dihubungi</p>
        </div>

        <div class="hud-card p-5 border-purple-200 bg-white">
            <div class="flex items-center justify-between mb-3">
                <span class="text-[11px] font-bold uppercase tracking-wider text-purple-700">Jadwal Inspeksi</span>
                <div class="w-8 h-8 rounded-xl bg-purple-100 text-purple-700 flex items-center justify-center font-bold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
            </div>
            <p class="text-3xl font-extrabold text-purple-800 tracking-tight">{{ number_format($stats['inspection']) }}</p>
            <p class="text-[10px] text-purple-600 mt-1 font-medium">Showroom / Home inspection</p>
        </div>

        <div class="hud-card p-5 border-emerald-200 bg-white">
            <div class="flex items-center justify-between mb-3">
                <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-700">Deal Tukar Tambah</span>
                <div class="w-8 h-8 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
            <p class="text-3xl font-extrabold text-emerald-800 tracking-tight">{{ number_format($stats['deal']) }}</p>
            <p class="text-[10px] text-emerald-600 mt-1 font-medium">Berhasil konversi ke unit Geely</p>
        </div>
    </div>

    <!-- Filter & Pencarian -->
    <div class="hud-card p-4 sm:p-5">
        <form method="GET" action="{{ route('admin.trade-in.index') }}" class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">
            <div class="sm:col-span-6 lg:col-span-7 relative">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, WhatsApp, kota, merk mobil lama..." class="hud-input pl-10">
                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </div>

            <div class="sm:col-span-4 lg:col-span-3">
                <select name="status" class="hud-input font-medium cursor-pointer" onchange="this.form.submit()">
                    <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>Semua Status</option>
                    <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>Baru Masuk</option>
                    <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Sudah Dihubungi</option>
                    <option value="inspection_scheduled" {{ request('status') == 'inspection_scheduled' ? 'selected' : '' }}>Terjadwal Inspeksi</option>
                    <option value="deal" {{ request('status') == 'deal' ? 'selected' : '' }}>Deal / Selesai</option>
                    <option value="lost" {{ request('status') == 'lost' ? 'selected' : '' }}>Batal / Ditolak</option>
                </select>
            </div>

            <div class="sm:col-span-2 lg:col-span-2 flex items-center gap-2">
                <button type="submit" class="w-full py-2.5 px-4 rounded-xl bg-slate-800 hover:bg-slate-900 text-white font-bold text-xs uppercase tracking-wider transition-colors cursor-pointer">
                    Cari
                </button>
                @if(request()->hasAny(['search', 'status']))
                <a href="{{ route('admin.trade-in.index') }}" class="p-2.5 rounded-xl border border-slate-200 hover:bg-slate-100 text-slate-500 transition-colors" title="Reset Filter">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </a>
                @endif
            </div>
        </form>
    </div>

    <!-- Tabel Data Permohonan Trade-In -->
    <div class="hud-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-slate-500 font-bold uppercase tracking-wider text-[10px]">
                        <th class="py-3.5 px-4">Tanggal</th>
                        <th class="py-3.5 px-4">Customer</th>
                        <th class="py-3.5 px-4">Unit Geely Baru</th>
                        <th class="py-3.5 px-4">Rincian Mobil Lama</th>
                        <th class="py-3.5 px-4">Status Pipeline</th>
                        <th class="py-3.5 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 font-medium text-slate-700">
                    @forelse($leads as $item)
                    @php
                        $cleanPhone = preg_replace('/[^0-9]/', '', (string)$item->phone);
                        if (str_starts_with($cleanPhone, '0')) {
                            $cleanPhone = '62' . substr($cleanPhone, 1);
                        }

                        // Susun rincian taksasi mobil lama secara aman
                        $displayDetail = $item->formatted_trade_in_details ?? $item->sales_notes ?? '';
                        if (empty(trim((string)$displayDetail)) || $displayDetail === 'Data taksasi belum diisi lengkap.') {
                            $displayDetail = $item->sales_notes ?: 'Unit Geely Baru: ' . ($item->car_model ?? '-') . "\nStatus: " . strtoupper($item->status ?? 'NEW');
                        }

                        $leadJson = json_encode([
                            'id'                 => $item->id,
                            'name'               => $item->name,
                            'phone'              => $item->phone,
                            'city'               => $item->city ?? 'Jabodetabek',
                            'car_model'          => $item->car_model ?? 'Geely EX5',
                            'old_brand'          => $item->old_brand ?? '',
                            'old_model'          => $item->old_model ?? '',
                            'old_year'           => $item->old_year ?? '',
                            'old_transmission'   => $item->old_transmission ?? '',
                            'old_mileage'        => $item->old_mileage ?? '',
                            'old_condition'      => $item->old_condition ?? '',
                            'old_expected_price' => $item->old_expected_price ?? '',
                            'payment_plan'       => $item->payment_plan ?? '',
                            'inspection_place'   => $item->inspection_place ?? '',
                            'sales_notes'        => $item->sales_notes ?? '',
                            'formatted_details'  => $displayDetail,
                            'created_at'         => $item->created_at ? $item->created_at->format('d M Y H:i') : '-',
                        ], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
                    @endphp
                    <tr class="hover:bg-sky-50/40 transition-colors">
                        
                        <td class="py-4 px-4 whitespace-nowrap text-slate-500">
                            <span class="block font-bold text-slate-800">{{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}</span>
                            <span class="text-[10px] text-slate-400">{{ $item->created_at ? $item->created_at->format('H:i') : '' }} WIB</span>
                        </td>

                        <td class="py-4 px-4">
                            <div class="font-bold text-slate-900 text-sm">{{ $item->name }}</div>
                            <div class="flex items-center gap-2 mt-1">
                                <a href="https://wa.me/{{ $cleanPhone }}" target="_blank" class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-600 hover:text-emerald-700">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                    <span>{{ $item->phone }}</span>
                                </a>
                            </div>
                            <span class="text-[10px] text-slate-400 block mt-0.5">📍 {{ $item->city ?? 'Jabodetabek' }}</span>
                        </td>

                        <td class="py-4 px-4">
                            <span class="inline-flex px-2.5 py-1 rounded-lg text-xs font-bold bg-sky-50 text-sky-800 border border-sky-200">
                                {{ $item->car_model ?? 'Geely EX5' }}
                            </span>
                        </td>

                        <td class="py-4 px-4 max-w-xs">
                            <div class="text-xs text-slate-800 font-medium line-clamp-2 leading-relaxed">
                                @if(!empty($item->old_brand))
                                    <strong>{{ $item->old_brand }} {{ $item->old_model }}</strong> ({{ $item->old_year }}) • {{ $item->old_transmission }}
                                @else
                                    {{ Str::limit($displayDetail, 80) }}
                                @endif
                            </div>
                            <button type="button" 
                                    data-lead="{{ $leadJson }}"
                                    onclick="openTradeInModalFromData(this)" 
                                    class="text-[11px] font-bold text-sky-600 hover:text-sky-800 mt-1 inline-flex items-center gap-1 cursor-pointer">
                                <span>Lihat Spesifikasi Lengkap &rarr;</span>
                            </button>
                        </td>

                        <td class="py-4 px-4 whitespace-nowrap">
                            <form action="{{ route('admin.trade-in.updateStatus', $item->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select name="status" onchange="this.form.submit()" class="text-xs font-bold py-1.5 px-3 rounded-xl border cursor-pointer focus:outline-none transition-all
                                    {{ $item->status === 'new' ? 'bg-amber-50 text-amber-800 border-amber-300' : '' }}
                                    {{ $item->status === 'contacted' ? 'bg-sky-50 text-sky-800 border-sky-300' : '' }}
                                    {{ in_array($item->status, ['inspection_scheduled', 'inspection', 'scheduled']) ? 'bg-purple-50 text-purple-800 border-purple-300' : '' }}
                                    {{ in_array($item->status, ['deal', 'spk_deal', 'converted']) ? 'bg-emerald-50 text-emerald-800 border-emerald-300' : '' }}
                                    {{ in_array($item->status, ['lost', 'cancelled']) ? 'bg-rose-50 text-rose-800 border-rose-300' : '' }}
                                ">
                                    <option value="new" {{ $item->status === 'new' ? 'selected' : '' }}>Baru</option>
                                    <option value="contacted" {{ $item->status === 'contacted' ? 'selected' : '' }}>Dihubungi</option>
                                    <option value="inspection_scheduled" {{ in_array($item->status, ['inspection_scheduled', 'inspection', 'scheduled']) ? 'selected' : '' }}>Jadwal Inspeksi</option>
                                    <option value="deal" {{ in_array($item->status, ['deal', 'spk_deal', 'converted']) ? 'selected' : '' }}>Deal / Selesai</option>
                                    <option value="lost" {{ in_array($item->status, ['lost', 'cancelled']) ? 'selected' : '' }}>Batal</option>
                                </select>
                            </form>
                        </td>

                        <td class="py-4 px-4 text-center whitespace-nowrap">
                            <div class="flex items-center justify-center gap-2">
                                <a href="https://wa.me/{{ $cleanPhone }}?text=Halo%20{{ urlencode($item->name) }},%20saya%20Sales%20Geely%20Wonder%20Alam%20Sutera%20terkait%20permohonan%20Trade-In%20mobil%20Anda." target="_blank" title="Chat WhatsApp Customer" class="p-2 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-600 transition-colors">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                </a>

                                <form action="{{ route('admin.trade-in.destroy', $item->id) }}" method="POST" onsubmit="return confirmDelete(this)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus Data" class="p-2 rounded-xl text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-colors cursor-pointer">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-400">
                            <div class="w-12 h-12 rounded-2xl bg-slate-100 flex items-center justify-center mx-auto mb-3 text-slate-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </div>
                            <p class="font-bold text-slate-700">Belum ada permohonan trade-in</p>
                            <p class="text-xs text-slate-400 mt-1">Data dari formulir trade-in website akan tampil di sini secara real-time.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($leads->hasPages())
        <div class="p-4 border-t border-slate-100 bg-slate-50">
            {{ $leads->links() }}
        </div>
        @endif
    </div>

</div>

<!-- MODAL RINCIAN TAKSASI LENGKAP -->
<div id="detailModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl border border-slate-200 relative max-h-[90vh] overflow-y-auto">
        <button type="button" onclick="closeLeadDetails()" class="absolute top-5 right-5 text-slate-400 hover:text-slate-700 p-2 rounded-xl hover:bg-slate-100 transition-colors cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>

        <div class="flex items-center gap-3 mb-5">
            <div class="w-11 h-11 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-bold text-lg">
                🚗
            </div>
            <div>
                <h3 id="modalCustName" class="font-bold text-slate-900 text-lg"></h3>
                <p id="modalCustPhone" class="text-xs text-slate-500 font-semibold"></p>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Unit Geely Pilihan -->
            <div class="p-4 rounded-2xl bg-sky-50 border border-sky-100">
                <span class="text-[10px] font-bold text-sky-700 uppercase tracking-wider block mb-1">UNIT GEELY BARU YANG DIMINATI:</span>
                <span id="modalTargetGeely" class="font-bold text-slate-900 text-sm"></span>
            </div>

            <!-- Tabel Spesifikasi Terstruktur Mobil Lama -->
            <div id="modalStructuredSpecs" class="p-4 rounded-2xl bg-slate-50 border border-slate-200 space-y-2.5 text-xs">
                <div class="flex justify-between border-b border-slate-200/80 pb-1.5">
                    <span class="text-slate-500">Merk & Tipe Mobil Lama:</span>
                    <strong id="modalSpecBrandModel" class="text-slate-900 text-right"></strong>
                </div>
                <div class="flex justify-between border-b border-slate-200/80 pb-1.5">
                    <span class="text-slate-500">Tahun & Transmisi:</span>
                    <strong id="modalSpecYearTrans" class="text-slate-900 text-right"></strong>
                </div>
                <div class="flex justify-between border-b border-slate-200/80 pb-1.5">
                    <span class="text-slate-500">Jarak Tempuh (Odo):</span>
                    <strong id="modalSpecMileage" class="text-slate-900 text-right"></strong>
                </div>
                <div class="flex justify-between border-b border-slate-200/80 pb-1.5">
                    <span class="text-slate-500">Kondisi Fisik & Mesin:</span>
                    <strong id="modalSpecCondition" class="text-slate-900 text-right"></strong>
                </div>
                <div class="flex justify-between border-b border-slate-200/80 pb-1.5">
                    <span class="text-slate-500">Ekspektasi Harga:</span>
                    <strong id="modalSpecExpectedPrice" class="text-emerald-700 font-bold text-right"></strong>
                </div>
                <div class="flex justify-between border-b border-slate-200/80 pb-1.5">
                    <span class="text-slate-500">Rencana Pembayaran:</span>
                    <strong id="modalSpecPaymentPlan" class="text-slate-900 text-right"></strong>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Lokasi Inspeksi:</span>
                    <strong id="modalSpecInspectionPlace" class="text-slate-900 text-right"></strong>
                </div>
            </div>

            <!-- Teks Catatan Lengkap -->
            <div>
                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider block mb-1.5">SPESIFIKASI & DETAIL TAKSASI MOBIL LAMA:</span>
                <div id="modalDetailsText" class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-xs font-mono whitespace-pre-line text-slate-800 leading-relaxed max-h-56 overflow-y-auto"></div>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <button type="button" onclick="closeLeadDetails()" class="px-6 py-2.5 rounded-xl bg-slate-800 text-white font-bold text-xs uppercase tracking-wider hover:bg-slate-900 transition-colors cursor-pointer">
                TUTUP RINCIAN
            </button>
        </div>
    </div>
</div>

<script>
    function openTradeInModalFromData(button) {
        try {
            const data = JSON.parse(button.getAttribute('data-lead'));
            
            document.getElementById('modalCustName').textContent = data.name || '-';
            document.getElementById('modalCustPhone').textContent = (data.phone || '-') + (data.city ? ' • ' + data.city : '');
            document.getElementById('modalTargetGeely').textContent = data.car_model || 'Geely EX5';

            // Cek apakah ada data kolom terstruktur
            const hasStructured = data.old_brand || data.old_model || data.old_year;
            const structContainer = document.getElementById('modalStructuredSpecs');
            
            if (hasStructured) {
                structContainer.classList.remove('hidden');
                document.getElementById('modalSpecBrandModel').textContent = ((data.old_brand || '') + ' ' + (data.old_model || '')).trim() || '-';
                document.getElementById('modalSpecYearTrans').textContent = (data.old_year || '-') + ' (' + (data.old_transmission || '-') + ')';
                document.getElementById('modalSpecMileage').textContent = data.old_mileage || '-';
                document.getElementById('modalSpecCondition').textContent = data.old_condition || '-';
                document.getElementById('modalSpecExpectedPrice').textContent = data.old_expected_price ? 'Rp ' + data.old_expected_price : '-';
                document.getElementById('modalSpecPaymentPlan').textContent = data.payment_plan || '-';
                document.getElementById('modalSpecInspectionPlace').textContent = data.inspection_place || 'Showroom Geely Alam Sutera';
            } else {
                structContainer.classList.add('hidden');
            }

            // Tampilkan isi teks rincian lengkap dari sales_notes
            const detailsText = data.formatted_details || data.sales_notes || '';
            document.getElementById('modalDetailsText').textContent = detailsText || 'Spesifikasi mobil lama belum tercatat.';

            document.getElementById('detailModal').classList.remove('hidden');
        } catch (e) {
            console.error('Error parsing lead data:', e);
        }
    }

    function closeLeadDetails() {
        document.getElementById('detailModal').classList.add('hidden');
    }

    function confirmDelete(form) {
        return true;
    }
</script>
@endsection