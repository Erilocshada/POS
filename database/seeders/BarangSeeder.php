<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1,  'barang_kode' => 'BRG001', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 2, 'kategori_id' => 2,  'barang_kode' => 'BRG002', 'barang_nama' => 'Teh Botol Sosro', 'harga_beli' => 5000, 'harga_jual' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 3, 'kategori_id' => 3,  'barang_kode' => 'BRG003', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 4, 'kategori_id' => 4,  'barang_kode' => 'BRG004', 'barang_nama' => 'Beras Cap Ayam Jago', 'harga_beli' => 100000, 'harga_jual' => 120000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 5, 'kategori_id' => 5,  'barang_kode' => 'BRG005', 'barang_nama' => 'Susu UHT Ultra Milk', 'harga_beli' => 6000, 'harga_jual' => 8000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 6, 'kategori_id' => 1,  'barang_kode' => 'BRG006', 'barang_nama' => 'Mie Sedaap Goreng', 'harga_beli' => 3000, 'harga_jual' => 3500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 7, 'kategori_id' => 2,  'barang_kode' => 'BRG007', 'barang_nama' => 'Aqua Botol', 'harga_beli' => 2000, 'harga_jual' => 3000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 8, 'kategori_id' => 3,  'barang_kode' => 'BRG008', 'barang_nama' => 'Lays', 'harga_beli' => 9000, 'harga_jual' => 11000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 9, 'kategori_id' => 4,  'barang_kode' => 'BRG009', 'barang_nama' => 'Minyak Goreng Bimoli', 'harga_beli' => 15000, 'harga_jual' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 10, 'kategori_id' => 5,  'barang_kode' => 'BRG010', 'barang_nama' => 'Kopi Kapal Api', 'harga_beli' => 7000, 'harga_jual' => 9000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 11, 'kategori_id' => 1,  'barang_kode' => 'BRG011', 'barang_nama' => 'Mie Goreng ABC', 'harga_beli' => 2800, 'harga_jual' => 3300, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 12, 'kategori_id' => 2,  'barang_kode' => 'BRG012', 'barang_nama' => 'Teh Pucuk Harum', 'harga_beli' => 4500, 'harga_jual' => 6500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 13, 'kategori_id' => 3,  'barang_kode' => 'BRG013', 'barang_nama' => 'Taro', 'harga_beli' => 8500, 'harga_jual' => 10500, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 14, 'kategori_id' => 4,  'barang_kode' => 'BRG014', 'barang_nama' => 'Gula Pasir Gulaku', 'harga_beli' => 12000, 'harga_jual' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 15, 'kategori_id' => 5,  'barang_kode' => 'BRG015', 'barang_nama' => 'Susu Kental Manis Indomilk', 'harga_beli' => 5000, 'harga_jual' => 7000, 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('m_barang')->insert($data);
    }
}
