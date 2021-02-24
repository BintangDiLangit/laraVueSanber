<?php

namespace App\Http\Controllers\Perpustakaan;

use App\Http\Controllers\Controller;
use App\Http\Requests\PinjamanRequest;
use App\Models\Perpustakaan\Pinjaman;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PinjamanRequest $request)
    {
        $pinjaman = Pinjaman::create($this->pinjamanStore());
        return $pinjaman;   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PinjamanRequest $request, $id)
    {
        $pinjaman = Pinjaman::where('id', $id)->update($this->pinjamanStore());
        return $pinjaman;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pinjamanStore() {
        return [
            'buku_id' => request('buku_id'),
            'mahasiswa_id' => request('mahasiswa_id'),
            'tanggal_peminjaman' => request('tanggal_peminjaman'),
            'tanggal_pengembalian' => request('tanggal_pengembalian'),
            'nama_mahasiswa' => request('nama_mahasiswa'),
            'status_ontime' => request('status_ontime')
        ];
    }
}
