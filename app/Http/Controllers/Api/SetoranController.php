<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SetoranSampah;
use App\Models\Sampah;

class SetoranController extends Controller
{
    // ================== RIWAYAT SETORAN USER ==================
    public function index()
    {
        $user = Auth::user();

        $history = $user->setoranSampah()
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($item) {
                return [
                    'tanggal'   => optional($item->created_at)->format('Y-m-d'),
                    'berat_kg'  => (float) $item->berat_kg,
                    'poin'      => (int) $item->total_poin,
                    'deskripsi' => $item->deskripsi,
                ];
            });

        return response()->json([
            'data' => $history
        ]);
    }

    // ===================== SETOR SAMPAH =====================
    public function store(Request $request)
    {
        $request->validate([
            'user_id'   => 'required|exists:users,id',
            'sampah_id' => 'required|exists:sampah,id',
            'berat_kg'  => 'required|numeric|min:0.1',
            'alamat'    => 'required|string',
        ]);

        $sampah = Sampah::findOrFail($request->sampah_id);

        $poinPerKg = 8;
        $totalPoin  = $request->berat_kg * $poinPerKg;
        $totalHarga = $request->berat_kg * $sampah->harga_per_kg;

        $setoran = SetoranSampah::create([
            'user_id'     => $request->user_id,
            'sampah_id'   => $request->sampah_id,
            'berat_kg'    => $request->berat_kg,
            'alamat'      => $request->alamat,
            'total_poin'  => $totalPoin,
            'total_harga' => $totalHarga,
        ]);

        return response()->json([
            'message' => 'Setoran berhasil disimpan',
            'data' => $setoran
        ], 201);
    }

}