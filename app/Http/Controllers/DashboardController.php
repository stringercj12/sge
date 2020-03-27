<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Protocolos;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function config()
    {
        return view('admin.settings');
    }

    public function cadastro()
    {
        $estado = [
            'AC' => 'Acre (AC)',
            'Alagoas (AL)',
            'Amapá (AP)',
            'Amazonas (AM)',
            'Bahia (BA)',
            'Ceará (CE)',
            'Distrito Federal (DF)',
            'Espírito Santo (ES)',
            'Goiás (GO)',
            'Maranhão (MA)',
            'Mato Grosso (MT)',
            'Mato Grosso do Sul (MS)',
            'Minas Gerais (MG)',
            'Pará (PA)',
            'Paraíba (PB)',
            'Paraná (PR)',
            'Pernambuco (PE)',
            'Piauí (PI)',
            'Rio de Janeiro (RJ)',
            'Rio Grande do Norte (RN)',
            'Rio Grande do Sul (RS)',
            'Rondônia (RO)',
            'Roraima (RR)',
            'Santa Catarina (SC)',
            'São Paulo (SP)',
            'Sergipe (SE)',
            'Tocantins (TO)',
        ];
        return view('admin.cadastro', compact('estado'));
    }

    public function home()
    {
        return view('admin.index');
    }

    public function senhas()
    {
        return view('admin.senhas');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function listaUser()
    {
        $users = User::all();

        return view('admin.lista', compact('users'));
    }

    public function chat()
    {
        $users = User::all();

        return view('admin.chat', compact('users'));
    }

    public function notas()
    {
        return view('admin.notas');
    }

    public function protocolos(Protocolos $ticket)
    {

        // $proto = $ticket->user()->first();
        // $id = auth()->user()->id;

        // $proto = User::where('id', $id)->first();

        $prot = auth()->user()->Protocolo()->get();

        dd($prot);

        return view('admin.protocolo', compact('protocolos'));
    }

    public function logout()
    {
        // $dados = auth()->user();
        // $dados->ultimoAcesso = Carbon::now()->addDay();
        // // update('ultimoAcesso', Carbon::now()->addDay());
        // $dados->update();

        $user = auth()->user();

        $user['ultimoAcesso'] = Carbon::now()->addDay();
//        dd($acao);
        $result = $user->save();


        // dd($result);
        auth::logout();
        return redirect('/login');
    }
}
