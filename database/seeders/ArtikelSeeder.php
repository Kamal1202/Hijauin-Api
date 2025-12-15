<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('artikel')->insert([
            [
                'judul' => 'Bumi Butuh Kita: Saatnya Mulai Daur Ulang!',
                'konten' => 'Daur ulang bukan sekadar tren, tapi solusi nyata untuk mengurangi dampak negatif sampah terhadap bumi. Banyak orang belum menyadari bahwa setiap barang yang kita buang memiliki konsekuensi besar terhadap lingkungan.

1. Mengurangi Timbunan Sampah di TPA 🗑️
Setiap hari, ribuan ton sampah dikirim ke Tempat Pembuangan Akhir (TPA). Jika tidak dikelola dengan baik, sampah ini bisa mencemari tanah dan air. Dengan mendaur ulang, kita bisa mengurangi jumlah sampah yang harus dibuang dan memperpanjang umur TPA.

2. Menghemat Sumber Daya Alam 🌍
Banyak bahan yang digunakan dalam produk sehari-hari berasal dari sumber daya alam yang terbatas, seperti kayu, minyak bumi, dan logam. Dengan mendaur ulang kertas, plastik, dan logam, kita bisa mengurangi eksploitasi sumber daya alam.

3. Mengurangi Polusi dan Emisi Karbon 💨
Proses produksi barang baru membutuhkan energi besar dan menghasilkan emisi karbon yang mempercepat perubahan iklim. Daur ulang bisa mengurangi kebutuhan produksi baru dan menghemat energi. Contohnya, mendaur ulang aluminium bisa menghemat hingga 95% energi dibandingkan membuat aluminium dari bahan mentah!',
                'gambar' => null,
                'tanggal' => $now->toDateString(),
                'user_id' => 1,
                'penulis' => 'Admin Hijauin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'judul' => 'Plastik Sekali Pakai: Ancaman Nyata Lingkungan',
                'konten' => 'Plastik sekali pakai sulit terurai dan sering mencemari lingkungan.

1. Dampak Plastik di Laut 🐠
Plastik membahayakan ekosistem laut dan rantai makanan.

2. Waktu Urai yang Sangat Lama ⏳
Plastik bisa bertahan ratusan tahun di alam.

Kurangi plastik sekali pakai dengan membawa tas belanja sendiri.',
                'gambar' => null,
                'tanggal' => $now->toDateString(),
                'user_id' => 1,
                'penulis' => 'Admin Hijauin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'judul' => 'Mengapa Pemilahan Sampah Itu Penting?',
                'konten' => 'Pemilahan sampah memudahkan proses daur ulang dan pengolahan lanjutan.

1. Sampah Organik 🍂
Dapat diolah menjadi kompos.

2. Sampah Anorganik 🧴
Bisa didaur ulang menjadi produk baru.

Mulailah memilah sampah dari rumah.',
                'gambar' => null,
                'tanggal' => $now->toDateString(),
                'user_id' => 1,
                'penulis' => 'Admin Hijauin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
