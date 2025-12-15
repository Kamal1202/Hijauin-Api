<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sampah;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    // GET /api/sampah
    public function index()
    {
        $sampah = Sampah::all();

        return response()->json($sampah);
    }
}
