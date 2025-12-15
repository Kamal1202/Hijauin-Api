<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SetoranSampah;

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
                    'poin'      => (int) ($item->berat_kg * 100),
                    'deskripsi' => $item->deskripsi,
                ];
            });

        return response()->json([
            'data' => $history
        ]);
    }
}