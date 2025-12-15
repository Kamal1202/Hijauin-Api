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

        $totalWasteKg = $user->setoranSampah()->sum('berat_kg');
        $totalPoints  = $user->setoranSampah()->sum('total_poin');

        return response()->json([
            'user' => [
                'name' => $user->name,
            ],
            'total_waste_kg' => (float) $totalWasteKg,
            'points' => (int) $totalPoints,
        ]);
    }
}

?>