<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualans = [];

        $pembelis = [
            'John Doe', 'Jane Smith', 'Alice Johnson',
            'Bob Brown', 'Charlie Davis', 'David Wilson',
            'Emily Clark', 'Frank Miller', 'Grace Lee', 
            'Henry Taylor', 'Isabella Anderson', 'Jack Thomas',
            'Karen White','Leo Harris', 'Mia Martin'
        ];

        // 10 transaksi penjualan
        for ($i = 1; $i <= 10; $i++) {
            $penjualans[] = [
                'penjualan_id' => $i,
                'user_id' => 3,
                'pembeli' => $pembelis[array_rand($pembelis)],
                'penjualan_kode' => 'PNJ' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('t_penjualan')->insert($penjualans);
    }
}