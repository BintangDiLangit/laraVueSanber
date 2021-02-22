<?php

namespace App\Models\Perpustakaan;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pinjaman() {
        return $this->hasMany(Pinjaman::class);
    }
}
