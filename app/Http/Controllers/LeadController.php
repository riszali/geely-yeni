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
     * Simpan data leads Reservasi Test Drive dari Form Publik
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
            'name'       => $request->name,
            'phone'      => $request->phone,
            'type'       => 'test_drive',
            'status'     => 'new',
            'source'     => $request->source ?? 'Form Test Drive',
            'ip_address' => $request->ip(),
        ];

        if (Schema::hasColumn('leads', 'car_model')) {
            $leadData['car_model'] = $request->car_model ?? $request->model ?? 'Geely EX5';
        } elseif (Schema::hasColumn('leads', 'model_interest')) {
            $leadData['model_interest'] = $request->car_model ?? $request->model ?? 'Geely EX5';
        }

        if (Schema::hasColumn('leads', 'city') && $request->filled('city')) {
            $leadData['city'] = $request->city;
        }

        if (Schema::hasColumn('leads', 'sales_notes') && $request->filled('notes')) {
            $leadData['sales_notes'] = $request->notes;
        }

        if (Schema::hasColumn('leads', 'notes') && $request->filled('notes')) {
            $leadData['notes'] = $request->notes;
        }

        if (Schema::hasColumn('leads', 'preferred_date') && $request->filled('preferred_date')) {
            $leadData['preferred_date'] = $request->preferred_date;
        }

        if (Schema::hasColumn('leads', 'preferred_time') && $request->filled('preferred_time')) {
            $leadData['preferred_time'] = $request->preferred_time;
        }

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'message' => 'Reservasi test drive berhasil dicatat',
            'lead'    => $lead
        ]);
    }

    /**
     * Simpan data leads Simulasi Kredit dari Kalkulator Pembiayaan
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
            'name'       => $request->name,
            'phone'      => $request->phone,
            'type'       => 'credit_simulation',
            'status'     => 'new',
            'source'     => 'Kalkulator Simulasi Kredit',
            'ip_address' => $request->ip(),
        ];

        if (Schema::hasColumn('leads', 'car_model')) {
            $leadData['car_model'] = $request->car_model ?? $request->model ?? null;
        } elseif (Schema::hasColumn('leads', 'model_interest')) {
            $leadData['model_interest'] = $request->car_model ?? $request->model ?? null;
        }

        if (Schema::hasColumn('leads', 'estimated_otr') && $request->filled('otr_price')) {
            $leadData['estimated_otr'] = (float) $request->otr_price;
        }

        if (Schema::hasColumn('leads', 'dp_percent') && $request->filled('dp_percent')) {
            $leadData['dp_percent'] = (int) $request->dp_percent;
        }

        if (Schema::hasColumn('leads', 'tenor_years') && $request->filled('tenor')) {
            $leadData['tenor_years'] = (int) $request->tenor;
        }

        if (Schema::hasColumn('leads', 'estimated_installment') && $request->filled('installment')) {
            $leadData['estimated_installment'] = (float) $request->installment;
        }

        if (Schema::hasColumn('leads', 'sales_notes') && $request->filled('notes')) {
            $leadData['sales_notes'] = $request->notes;
        }

        if (Schema::hasColumn('leads', 'notes') && $request->filled('notes')) {
            $leadData['notes'] = $request->notes;
        }

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'message' => 'Pengajuan simulasi kredit berhasil dicatat',
            'lead'    => $lead
        ]);
    }

    /**
     * Catat klik WhatsApp Sales Consultant
     */
    public function storeWhatsappClick(Request $request): JsonResponse
    {
        $leadData = [
            'name'       => $request->name ?? 'Pengunjung Web (WhatsApp Click)',
            'phone'      => $request->phone ?? '-',
            'type'       => 'whatsapp_inquiry',
            'status'     => 'new',
            'source'     => $request->source ?? 'Tombol WhatsApp Sales',
            'ip_address' => $request->ip(),
        ];

        $notes = $request->notes ?? 'Pengunjung mengklik tombol direct WhatsApp Sales Yenni.';

        if (Schema::hasColumn('leads', 'sales_notes')) {
            $leadData['sales_notes'] = $notes;
        }

        if (Schema::hasColumn('leads', 'notes')) {
            $leadData['notes'] = $notes;
        }

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'message' => 'Klik WhatsApp berhasil dicatat',
            'lead'    => $lead
        ]);
    }

    /**
     * Simpan Permohonan Trade-In ke Tabel Leads CRM
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

        $details = "TRADE-IN: {$request->old_brand} {$request->old_model} ({$request->old_year}, {$request->old_transmission}) | Odo: {$request->old_mileage} | Kondisi: {$request->old_condition}"
            . ($request->old_expected_price ? " | Ekspektasi Harga: Rp {$request->old_expected_price}" : "")
            . " | Rencana Bayar: {$request->payment_plan} | Lokasi Inspeksi: {$request->inspection_place}"
            . ($request->notes ? " | Catatan: {$request->notes}" : "");

        $leadData = [
            'name'       => $request->name,
            'phone'      => $request->phone,
            'type'       => 'trade_in',
            'status'     => 'new',
            'source'     => 'Form Trade-In Web',
            'ip_address' => $request->ip(),
        ];

        if (Schema::hasColumn('leads', 'car_model')) {
            $leadData['car_model'] = $request->target_geely;
        } elseif (Schema::hasColumn('leads', 'model_interest')) {
            $leadData['model_interest'] = $request->target_geely;
        }

        if (Schema::hasColumn('leads', 'sales_notes')) {
            $leadData['sales_notes'] = $details;
        }

        if (Schema::hasColumn('leads', 'notes')) {
            $leadData['notes'] = $details;
        }

        if (Schema::hasColumn('leads', 'city') && $request->filled('city')) {
            $leadData['city'] = $request->city;
        }

        $lead = Lead::create($leadData);

        return response()->json([
            'success' => true,
            'message' => 'Permohonan trade-in berhasil dicatat di CRM.',
            'lead'    => $lead
        ]);
    }
}