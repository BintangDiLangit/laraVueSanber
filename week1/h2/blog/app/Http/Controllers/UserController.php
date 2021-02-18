<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class UserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('verifEmail');
    // }
    public function user(){
        // $current_date = Carbon::now()->day;
        // dd($current_date);
            return 'Berhasil Masuk';

    }
    public function user1(){
            return 'Berhasil Masuk Ke User 1';

    }
    public function admin(){
            return 'Admin Berhasil Masuk';

    }
}