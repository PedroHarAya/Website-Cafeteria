<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validar los campos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Verificar credenciales
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si las credenciales son correctas, redirige a la página de inicio
            return redirect()->route('Web');
        }

        // Si son incorrectas, regresar con error
        return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('Login');
    }
}

