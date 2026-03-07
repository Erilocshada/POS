<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'RKK',
        //     'kategori_nama' => 'Rokok',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'RKK')->update(['kategori_nama' => 'Rokok Kretek']);
        // return 'Update data berhasil, jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'RKK')->delete();
        // return 'Delete data berhasil, jumlah data yang dihapus: ' . $row . ' baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
