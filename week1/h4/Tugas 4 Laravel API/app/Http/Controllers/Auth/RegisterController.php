<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        User::create([
            'name' => request('name'),
            'role_id' => request('role_id'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))   
        ]);

        return response('Thanks, you are registered.');
    }
}
