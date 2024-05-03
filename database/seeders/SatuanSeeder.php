<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => 'SAT001',
                'nama_satuan' => 'Satuan Barang 1',
            ],
            [
                'kode_satuan' => 'SAT002',
                'nama_satuan' => 'Satuan Barang 2',
            ],
            [
                'kode_satuan' => 'SAT003',
                'nama_satuan' => 'Satuan Barang 3',
            ],
        ]);
    }
}
