<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function home_index()
    {
        return view('welcome');
    }


    public function register_index()
    {
        return view('register');
    }

    public function register_create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'sobrenome' => ['required'],
            'password' => ['required'],
            'cpf' => ['required'],
        ], [
            'name.required' => 'Esse campo tem ser preenchido',
            'sobrenome' => 'esse campo tem que ser preenchdio',
            'email.required' => 'Esse campo tem que ser preenchido',
            'email.email' => 'Esse campo tem que ser preenchido com um email válido',
            'email.unique' => 'Esse email já existe',
            'password.required' => 'Digite sua senha',
            'cpf.required' => 'Digite seu CPF',
        ]);

        User::create([
            'name' => $request->name,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'cpf' => $request->cpf,
        ]);

        return redirect()->route('home.index');
    }


    public function login_index()
    {
        return view('login');
    }

    public function login_auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Esse campo tem que ser preenchido',
            'email.email' => 'Esse campo tem que ser preenchido com um email',
            'password' => 'Esse campo tem que ser preenchido',
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return view('welcome');
        } else {
            return back()->withErrors([
                'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
            ])->onlyInput('email');
        }
    }


    public function logout(Request $remember){
        Auth::logout();
        return redirect()->route('login.index');
    }



    
}
