<?php

Route::namespace('Auth')->group(function() {
    Route::post('role', 'RoleController'); // add role
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::namespace('Perpustakaan')->middleware(['auth:api', 'roles'])->group(function() {
        Route::post('mahasiswa', [
            'uses' => 'MahasiswaController',
            'roles' => ['Admin']
        ]); // tambah mahasiswa

        Route::post('buku', [
            'uses' => 'BukuController@store',
            'roles' => ['Admin']    
        ]); // tambah buku

        Route::delete('buku/{id}', [
            'uses' => 'BukuController@destroy',
            'roles' => ['Admin']    
        ]); // hapus buku

        Route::post('pinjaman', [
            'uses' => 'PinjamanController@store',
            'roles' => ['Admin', 'Mahasiswa']    
        ]); // tambah peminjaman

        Route::patch('pinjaman/{id}', [
            'uses' => 'PinjamanController@update',
            'roles' => ['Admin']    
        ]); // perbaharui peminjaman
});

Route::get('user', 'UserController');
Route::get('buku/{id}', 'Perpustakaan\BukuController@show');