<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['suplier_id' => 1, 'suplier_kode' => 'SPL001', 'suplier_nama' => 'PT. Sumber Makmur', 'suplier_alamat' => 'Jl. Raya No. 123, Jakarta', 'suplier_telepon' => '081234567890'],
            ['suplier_id' => 2, 'suplier_kode' => 'SPL002', 'suplier_nama' => 'CV. Maju Jaya', 'suplier_alamat' => 'Jl. Merdeka No. 456, Bandung', 'suplier_telepon' => '082345678901'],
            ['suplier_id' => 3, 'suplier_kode' => 'SPL003', 'suplier_nama' => 'PT. Sejahtera Abadi', 'suplier_alamat' => 'Jl. Sudirman No. 789, Surabaya', 'suplier_telepon' => '083456789012'],
        ];
        DB::table('m_suplier')->insert($data);
    }
}
