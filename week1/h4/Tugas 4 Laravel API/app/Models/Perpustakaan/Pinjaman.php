<?php

namespace App\Models\Perpustakaan;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = "pinjaman";
    protected $guarded = [];

    public function buku() {
        return $this->hasMany(Buku::class);
    }

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }
}
