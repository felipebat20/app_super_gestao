<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('site.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        $rules = [
            'user' => 'email',
            'password' => 'required',
        ];

        $feedback = [
            'user.email' => 'O campo usuário deve ser preenchido com um email válido.',
            'password.required' => 'O campo senha deve é requerido.',
        ];

        $request->validate($rules, $feedback);
    }
}
