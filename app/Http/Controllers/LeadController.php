<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    /**
     * Simpan leads Test Drive
     */
    public function storeTestDrive(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $leadData = [
            'type'            => 'test_drive',
            'name'            => $request->name,
            'phone'           => $request->phone,
            'email'           => $request->email,
            'car_model'       => $request->car_model ?? $request->model ?? 'Geely EX5',
            'car_variant'     => $request->car_variant ?? $request->variant ?? null,
            'preferred_date'  => $request->preferred_date,
            'preferred_time'  => $request->preferred_time,
            'dealer_location' => $request->dealer_location ?? 'alam-sutera',
            'status'          => 'new',
            'sales_notes'     => $request->notes ?? $request->sales_notes ?? null,
            'source'          => $request->source ?? 'Form Test Drive',
            'ip_address'      => $request->ip(),
            'user_agent'      => $request->userAgent(),
        ];

        if (Schema::hasColumn('leads', 'city') && $request->filled('city')) {
            $leadData['city'] = $request->city;
        }

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'message' => 'Reservasi test drive berhasil dicatat',
            'lead'    => $lead
        ]);
    }

    /**
     * Simpan leads Simulasi Kredit
     */
    public function storeCreditLead(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $leadData = [
            'type'                  => 'credit_simulation',
            'name'                  => $request->name,
            'phone'                 => $request->phone,
            'email'                 => $request->email,
            'car_model'             => $request->car_model ?? $request->model ?? 'Geely EX5',
            'car_variant'           => $request->car_variant ?? $request->variant ?? null,
            'estimated_otr'         => $request->filled('otr_price') ? (int) $request->otr_price : null,
            'dp_percent'            => $request->filled('dp_percent') ? (int) $request->dp_percent : null,
            'tenor_years'           => $request->filled('tenor') ? (int) $request->tenor : null,
            'leasing_partner'       => $request->leasing ?? $request->leasing_partner ?? null,
            'estimated_installment' => $request->filled('installment') ? (int) $request->installment : null,
            'estimated_tdp'         => $request->filled('tdp') ? (int) $request->tdp : null,
            'status'                => 'new',
            'sales_notes'           => $request->notes ?? 'Simulasi Kredit via Website',
            'source'                => 'Kalkulator Simulasi Kredit',
            'ip_address'            => $request->ip(),
            'user_agent'            => $request->userAgent(),
        ];

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'message' => 'Pengajuan simulasi kredit berhasil dicatat',
            'lead'    => $lead
        ]);
    }

    /**
     * Catat leads WhatsApp
     */
    public function storeWhatsappClick(Request $request): JsonResponse
    {
        $lead = Lead::create([
            'type'        => 'whatsapp_inquiry',
            'name'        => $request->name ?? 'Pengunjung Web (WhatsApp Click)',
            'phone'       => $request->phone ?? '-',
            'car_model'   => $request->car_model ?? 'Umum',
            'status'      => 'new',
            'sales_notes' => $request->notes ?? 'Pengunjung mengklik tombol direct WhatsApp Sales Yenni.',
            'source'      => $request->source ?? 'Tombol WhatsApp Sales',
            'ip_address'  => $request->ip(),
            'user_agent'  => $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Klik WhatsApp berhasil dicatat',
            'lead'    => $lead
        ]);
    }

    /**
     * Simpan Permohonan Trade-In ke Tabel Leads
     */
    public function storeTradeInLead(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name'         => 'required|string|max:255',
            'phone'        => 'required|string|max:50',
            'old_brand'    => 'required|string|max:100',
            'old_model'    => 'required|string|max:150',
            'target_geely' => 'required|string|max:150',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        // Teks rincian taksasi lengkap agar tersimpan ke sales_notes
        $summary = "=== RINCIAN TAKSASI TRADE-IN ===\n"
            . "• Mobil Lama: {$request->old_brand} {$request->old_model} ({$request->old_year}, {$request->old_transmission})\n"
            . "• Jarak Tempuh: {$request->old_mileage}\n"
            . "• Kondisi Fisik: {$request->old_condition}\n"
            . ($request->filled('old_expected_price') ? "• Ekspektasi Harga: Rp {$request->old_expected_price}\n" : "")
            . "• Unit Geely Baru: {$request->target_geely}\n"
            . "• Rencana Pembayaran: {$request->payment_plan}\n"
            . "• Domisili: {$request->city}\n"
            . "• Lokasi Inspeksi: {$request->inspection_place}\n"
            . ($request->filled('notes') ? "• Catatan Tambahan: {$request->notes}" : "");

        $leadData = [
            'type'            => 'trade_in',
            'name'            => $request->name,
            'phone'           => $request->phone,
            'email'           => $request->email,
            'car_model'       => $request->target_geely,
            'dealer_location' => 'alam-sutera',
            'status'          => 'new',
            'sales_notes'     => $summary,
            'source'          => 'Form Trade-In Web',
            'ip_address'      => $request->ip(),
            'user_agent'      => $request->userAgent(),
        ];

        // Simpan kolom spesifik jika migration kolom sudah dijalankan
        if (Schema::hasColumn('leads', 'city')) {
            $leadData['city']               = $request->city;
            $leadData['old_brand']          = $request->old_brand;
            $leadData['old_model']          = $request->old_model;
            $leadData['old_year']           = $request->old_year;
            $leadData['old_transmission']   = $request->old_transmission;
            $leadData['old_mileage']        = $request->old_mileage;
            $leadData['old_condition']      = $request->old_condition;
            $leadData['old_expected_price'] = $request->old_expected_price;
            $leadData['payment_plan']       = $request->payment_plan;
            $leadData['inspection_place']   = $request->inspection_place;
        }

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'message' => 'Permohonan trade-in berhasil dicatat di sistem.',
            'lead'    => $lead
        ]);
    }
}