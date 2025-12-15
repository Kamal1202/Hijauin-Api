<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampahSeeder extends Seeder
{
    public function run()
    {
        DB::table('sampah')->insert([
            [
                'nama' => 'Botol Plastik',
                'kategori' => 'Plastik',
                'harga_per_kg' => 3000,
                'deskripsi' => 'Botol plastik bekas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kardus',
                'kategori' => 'Kertas',
                'harga_per_kg' => 2000,
                'deskripsi' => 'Kardus bekas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kaleng',
                'kategori' => 'Logam',
                'harga_per_kg' => 5000,
                'deskripsi' => 'Kaleng bekas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}