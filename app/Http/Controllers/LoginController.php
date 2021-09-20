<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

        $email = $request->get('user');
        $password = $request->get('password');

        $user = new User();

        $userExists = $user
                        ->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();

        if(isset($userExists->name)) {
            echo 'User exists';
        } else {
            echo 'User does not exists';
        }
    }
}
