<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $messages = [
        'email.required' => 'Por favor ingrese su correo',
        'email.email' => 'La información ingresada no es un correo',
        'password.required' => 'Por favor ingrese su contraseña',
    ];

    public function login()
    {
        // Validar datos con las reglas definidas
        $this->validate();

        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Redirigir al usuario a la página principal o dashboard
            return redirect()->route('candidate.index');
        } else {
            // Agregar mensaje de error si las credenciales son incorrectas
            session()->flash('error', 'Credenciales incorrectas');
        }
    }

    
    public function render()
    {
        return view('livewire.login-form');
    }
}
