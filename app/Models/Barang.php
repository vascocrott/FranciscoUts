<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang'; // Nama tabel yang terkait dengan model

    protected $fillable = [ // Kolom yang dapat diisi secara massal
        'kode_barang',
        'nama_barang',
        'harga_barang',
        'deskripsi_barang',
        // Tambahkan kolom lainnya sesuai kebutuhan
    ];

    // Jika nama kolom created_at dan updated_at tidak digunakan dalam tabel, Anda bisa menonaktifkannya dengan properti $timestamps
    public $timestamps = true;

    // Relasi atau metode lainnya bisa ditambahkan di sini
}