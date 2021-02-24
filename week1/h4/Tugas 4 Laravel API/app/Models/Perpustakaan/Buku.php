<?php

namespace App\Models\Perpustakaan;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public $table = 'buku';
    public $guarded = [];
    public function pinjaman() {
        $this->hasMany(Pinjaman::class);
    }
}