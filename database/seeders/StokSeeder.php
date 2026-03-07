<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stoks = [];
        $user_id = 1; // Asumsikan stok diinput oleh user dengan ID 1 (admin)
        $suplier_id = 1; // Asumsikan semua barang berasal dari suplier dengan ID 1

        // stok awal untuk semua barang
        DB::table('t_stok')->insert([
            [
            'barang_id' => 1,
            'user_id' => 1,
            'stok_tanggal' => now(),
            'stok_jumlah' => 100
            ]
        ]);
    }
}
