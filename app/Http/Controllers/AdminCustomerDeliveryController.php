<?php

namespace App\Http\Controllers;

use App\Models\CustomerDelivery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminCustomerDeliveryController extends Controller
{
    /**
     * Tampilkan galeri foto delivery order di panel admin.
     */
    public function index(): View
    {
        $deliveries = CustomerDelivery::orderBy('sort_order', 'asc')
            ->latest()
            ->paginate(12);

        $stats = [
            'total'    => CustomerDelivery::count(),
            'active'   => CustomerDelivery::where('is_active', true)->count(),
            'inactive' => CustomerDelivery::where('is_active', false)->count(),
        ];

        return view('admin.deliveries.index', compact('deliveries', 'stats'));
    }

    /**
     * Simpan posting foto delivery order baru.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'         => 'nullable|string|max:255',
            'customer_name' => 'nullable|string|max:255',
            'car_model'     => 'nullable|string|max:100',
            'image'         => 'required_without:image_url|nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'image_url'     => 'nullable|url|max:500',
            'is_active'     => 'nullable|boolean',
        ]);

        $imagePath = '';

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('deliveries', 'public');
        } elseif ($request->filled('image_url')) {
            $imagePath = $request->input('image_url');
        }

        CustomerDelivery::create([
            'title'         => $request->input('title') ?: ($request->input('customer_name') ? 'Delivery Unit ' . $request->input('customer_name') : 'Delivery Moment Geely'),
            'customer_name' => $request->input('customer_name'),
            'car_model'     => $request->input('car_model'),
            'image'         => $imagePath,
            'is_active'     => $request->boolean('is_active', true),
            'sort_order'    => (int) (CustomerDelivery::max('sort_order') + 1),
        ]);

        return redirect()->route('admin.deliveries.index')->with('success', 'Foto serah terima berhasil diposting!');
    }

    /**
     * Update data / status aktif foto delivery order.
     */
    public function update(Request $request, CustomerDelivery $delivery): RedirectResponse
    {
        $request->validate([
            'title'         => 'nullable|string|max:255',
            'customer_name' => 'nullable|string|max:255',
            'car_model'     => 'nullable|string|max:100',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'image_url'     => 'nullable|url|max:500',
            'is_active'     => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            // Hapus file lama jika disimpan di storage lokal
            if (!empty($delivery->image) && !str_starts_with($delivery->image, 'http') && !str_starts_with($delivery->image, 'assets/')) {
                Storage::disk('public')->delete($delivery->image);
            }
            $delivery->image = $request->file('image')->store('deliveries', 'public');
        } elseif ($request->filled('image_url')) {
            $delivery->image = $request->input('image_url');
        }

        $delivery->title = $request->input('title', $delivery->title);
        $delivery->customer_name = $request->input('customer_name', $delivery->customer_name);
        $delivery->car_model = $request->input('car_model', $delivery->car_model);
        $delivery->is_active = $request->boolean('is_active', true);
        $delivery->save();

        return redirect()->route('admin.deliveries.index')->with('success', 'Data delivery moment berhasil diperbarui!');
    }

    /**
     * Hapus foto delivery order.
     */
    public function destroy(CustomerDelivery $delivery): RedirectResponse
    {
        if (!empty($delivery->image) && !str_starts_with($delivery->image, 'http') && !str_starts_with($delivery->image, 'assets/')) {
            Storage::disk('public')->delete($delivery->image);
        }

        $delivery->delete();

        return redirect()->route('admin.deliveries.index')->with('success', 'Foto delivery order berhasil dihapus.');
    }
}