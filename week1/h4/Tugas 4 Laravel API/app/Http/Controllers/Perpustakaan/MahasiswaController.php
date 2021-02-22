<?php

namespace App\Http\Controllers\Perpustakaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perpustakaan\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Mahasiswa::create([
            'nama' => request('nama'),
            'nim' => request('nim'),
            'fakultas' => request('fakultas'),
            'jurusan' => request('jurusan'),
            'no_hp' => request('no_hp'),
            'no_wa' => request('no_wa'),
            'user_id' => request('user_id'),
            'role_id' => request('role_id')
        ]);

        return response('Thanks, you are registered as mahasiswa.');
    }
}
