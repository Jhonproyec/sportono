<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // return $request;
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return  redirect()->route('candidate.index');
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }
}
