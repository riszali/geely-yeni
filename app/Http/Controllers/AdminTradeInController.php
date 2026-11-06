<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminTradeInController extends Controller
{
    /**
     * Tampilkan Dashboard Permohonan Trade-In
     */
    public function index(Request $request): View
    {
        $query = Lead::where(function ($q) {
            $q->where('type', 'trade-in')
              ->orWhere('type', 'trade_in');
        });

        // Filter pencarian
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('car_model', 'like', "%{$search}%")
                  ->orWhere('sales_notes', 'like', "%{$search}%");

                if (\Illuminate\Support\Facades\Schema::hasColumn('leads', 'city')) {
                    $q->orWhere('city', 'like', "%{$search}%")
                      ->orWhere('old_brand', 'like', "%{$search}%")
                      ->orWhere('old_model', 'like', "%{$search}%");
                }
            });
        }

        // Filter status pipeline
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Metrik Statistik Real
        $stats = [
            'total'      => Lead::whereIn('type', ['trade-in', 'trade_in'])->count(),
            'new'        => Lead::whereIn('type', ['trade-in', 'trade_in'])->where('status', 'new')->count(),
            'contacted'  => Lead::whereIn('type', ['trade-in', 'trade_in'])->where('status', 'contacted')->count(),
            'inspection' => Lead::whereIn('type', ['trade-in', 'trade_in'])->whereIn('status', ['inspection_scheduled', 'inspection', 'scheduled'])->count(),
            'deal'       => Lead::whereIn('type', ['trade-in', 'trade_in'])->whereIn('status', ['deal', 'spk_deal', 'converted'])->count(),
        ];

        $leads = $query->latest()->paginate(15)->withQueryString();

        return view('admin.trade-in.index', compact('leads', 'stats'));
    }

    /**
     * Update Status Pipeline Trade-In
     */
    public function updateStatus(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);
        $lead->status = $request->input('status', 'new');
        $lead->save();

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success'    => true,
                'message'    => 'Status trade-in berhasil diperbarui.',
                'new_status' => $lead->status
            ]);
        }

        return redirect()->back()->with('success', "Status permohonan trade-in {$lead->name} berhasil diperbarui.");
    }

    /**
     * Hapus Data Permohonan Trade-In
     */
    public function destroy($id): RedirectResponse
    {
        $lead = Lead::findOrFail($id);
        $name = $lead->name;
        $lead->delete();

        return redirect()->route('admin.trade-in.index')->with('success', "Data permohonan trade-in {$name} berhasil dihapus.");
    }

    /**
     * Export Data Permohonan Trade-In ke Format CSV
     */
    public function exportCsv(): StreamedResponse
    {
        $leads = Lead::whereIn('type', ['trade-in', 'trade_in'])->latest()->get();

        $headers = [
            'Content-Type'        => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="trade-in-geely-' . date('Y-m-d-His') . '.csv"',
            'Pragma'              => 'no-cache',
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Expires'             => '0',
        ];

        return response()->stream(function () use ($leads) {
            $handle = fopen('php://output', 'w');
            
            // UTF-8 BOM untuk Microsoft Excel
            fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));

            fputcsv($handle, [
                'ID',
                'Tanggal Masuk',
                'Nama Customer',
                'Nomor WhatsApp',
                'Domisili',
                'Unit Geely Baru',
                'Status Pipeline',
                'Merk Mobil Lama',
                'Tipe Mobil Lama',
                'Tahun',
                'Transmisi',
                'Odometer',
                'Kondisi Fisik',
                'Ekspektasi Harga',
                'Rencana Bayar',
                'Lokasi Inspeksi',
                'Rincian Lengkap / Catatan'
            ]);

            foreach ($leads as $lead) {
                fputcsv($handle, [
                    $lead->id,
                    $lead->created_at ? $lead->created_at->format('Y-m-d H:i') : '-',
                    $lead->name,
                    $lead->phone,
                    $lead->city ?? '-',
                    $lead->car_model ?? '-',
                    strtoupper($lead->status ?? 'NEW'),
                    $lead->old_brand ?? '-',
                    $lead->old_model ?? '-',
                    $lead->old_year ?? '-',
                    $lead->old_transmission ?? '-',
                    $lead->old_mileage ?? '-',
                    $lead->old_condition ?? '-',
                    $lead->old_expected_price ?? '-',
                    $lead->payment_plan ?? '-',
                    $lead->inspection_place ?? '-',
                    $lead->formatted_trade_in_details ?? $lead->sales_notes ?? '-'
                ]);
            }

            fclose($handle);
        }, 200, $headers);
    }
}