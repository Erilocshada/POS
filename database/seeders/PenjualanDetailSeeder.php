<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [];
        $detail_id = 1;

        // untuk setiap transaksi (1-10)
        for ($penjualan_id = 1; $penjualan_id <= 10; $penjualan_id++) {

            // untuk setiap barang (1-15)
            for ($barang_id = 1; $barang_id <= 15; $barang_id++) {

                $details[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'jumlah' => rand(1, 5),
                    'harga' => rand(5000, 15000),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($details);
    }
}