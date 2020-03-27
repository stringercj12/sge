<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }

    public function store(Request $request){


        $users = new User;

        $users['name'] = $request->name;
        $users['email'] = $request->email;
        $users['cpf'] = '12345678909';
        $users['password'] = $request->password;
        $users['rg'] = '1111';
        $users['sexo'] = '1111';
        $users['nascimento'] = '1111';
        $users['celular'] = '1111';
        $users['residencial'] = '1111';
        $users['image'] = '1111';
        $users['tipoUsuario'] = '1111';
        $users['status'] = '1111';
        $users['acesso'] = '1111';
        $users['observacao'] = '1111';
        $users['rua'] = '1111';
        $users['numero'] = '1111';
        $users['complemento'] = '1111';
        $users['cep'] = '1111';
        $users['bairro'] = '1111';
        $users['cidade'] = '1111';
        $users['estado'] = '1111';

        $user = User::create($users);

        if($user){
            return view('index');
        }

    }


}
