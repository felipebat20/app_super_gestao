<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(Request $request): view
    {
        if($error = $request->get('erro')){
            if ($error == 1) {
                $error = 'O usuário e ou e senha estão incorretos.';
            } else if ($error == 2) {
                $error = 'Necessário realizar login para ter acesso a página.';
            }
        }
        return view('site.login', [
            'title' => 'Login',
            'error' => $error,
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
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
            session_start();
            $_SESSION['name'] = $userExists->name;
            $_SESSION['email'] = $userExists->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function logout() {
        echo 'Sair';
    }
}
