<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListaController extends Controller
{
    public function listar(){
    	$nomes = auth()->user()->get();
    	$dataCadastro = date('d/m/Y',strtotime('{{ $nome->created_at }}'));

    	return view('admin.lista', compact('nomes', 'dataCadastro'));
    }
    public function listar2(){
    	$nomes = auth()->user()->get();
    	$dataCadastro = date('d/m/Y',strtotime('{{ $nome->created_at }}'));

    	return view('admin.lista2', compact('nomes', 'dataCadastro'));
    }

    public function buscaUsuario(){
    	$nomes = auth()->user()->get();
    	$dataCadastro = date('d/m/Y',strtotime('{{ $nome->created_at }}'));

    	return view('admin.lista', compact('nomes', 'dataCadastro'));
    }
    public function menu(){
        return view('admin.teste');
    }
}
