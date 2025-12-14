<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // total berat sampah user
        $totalWasteKg = $user->setoranSampah()->sum('berat_kg');

        // aturan poin (contoh: 1 kg = 100 poin)
        $points = (int) ($totalWasteKg * 100);

        return response()->json([
            'user' => [
                'name' => $user->name,
            ],
            'total_waste_kg' => $totalWasteKg,
            'points' => $points,
        ]);
    }
}

?>