<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        public function login(Request $request)
        {

            $credentials = $request->validate([
                "email" => 'required|email',
                "password" => 'required'
            ], [
                "email.required" => "Por favor ingrese su correo",
                "email.email" => "La información ingresada no es un correo",
                "password.required" => "Por favor ingrese su contraseña"
            ]);

            // $remember = ($request->has('remember') ? true : false);

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended(route('postulacion'));
            }else{
                return redirect('login')->withErrors(['credencial' => 'Credenciales incorrectas']);
            }
        }
}
