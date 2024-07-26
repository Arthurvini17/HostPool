<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register_index(){
        return view('register');
    }

    public function register_create(Request $request){
        
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
            'endereco' => ['required'],
        ],[
            'name.required' => 'Esse campo tem ser preenchido',
            'email.required' => 'Esse campo tem que ser preenchdio',
            'email.email' => 'Esse campo tem que ser preenchido com um email',
            'email.unique' => 'Esse email ja existe',
            'password' => 'Digite sua senha',
            'endereco' => 'Digite seu endreço',

        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
        ]);

        return redirect()->redirect('register.index');
    }
}
