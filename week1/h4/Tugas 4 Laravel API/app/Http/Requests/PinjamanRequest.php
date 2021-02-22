<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjamanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // jangan lupa ubah jadi true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'buku_id'              => ['required'],
            'mahasiswa_id'         => ['required'],
            'tanggal_peminjaman'   => ['required'],
            'tanggal_pengembalian' => ['required'],
            'nama_mahasiswa'       => ['required'],
            'status_ontime'        => ['required']
        ];
    }
}
