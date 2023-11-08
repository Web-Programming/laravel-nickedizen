<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Buat ini apabila nama tabel bukan nama class ditambah s, "mahasiswas"
    protected $table = "mahasiswas";

    // Untuk mengatur kolom yang boleh diisi saat mass assignment
    protected $fillable = ['npm', 'nama'];

    // Untuk mengatur kolom yang tidak boleh diisi
    protected $guarded = [];

    public function prodi() {
        return $this->belongsTo('App\Models\Prodi');
    }
}
