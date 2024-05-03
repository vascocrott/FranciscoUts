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
        DB::table('barang')->insert([
            [
            'kode_barang' => 'BRGkrs00100',
            'nama_barang' => 'Kursi',
            'harga_barang' => 100000,
            'deskripsi_barang' => 'Kursi terbuat dari kayu jati asli',
            'satuan_id' => 1,
            ],
            [
            'kode_barang' => 'BRGmj00200',
            'nama_barang' => 'Meja',
            'harga_barang' => 200000,
            'deskripsi_barang' => 'Meja terbuat kayu jati asli',
            'satuan_id' => 2,
            ],
            [
            'kode_barang' => 'BRGlmr00300',
            'nama_barang' => 'Lemari',
            'harga_barang' => 3000000,
            'deskripsi_barang' => 'Lemari kayu jati asli',
            'satuan_id' => 3,
            ],
        ]);
    }
}