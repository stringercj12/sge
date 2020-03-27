@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1>Painel de Controle</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="{{ route('admin.settings') }}"><i class="fa fa-cog"></i> Configurações</a></li>
      <li class="active">Senhas</li>
    </ol>
@stop

@section('content')

    <div class="box">
        <div class="box-header">
            <a href="{{ route('admin.home')}}" class="btn btn-sm btn-info"><i class="fa fa-reply"></i> Voltar</a>    
        </div>

        @if(session('messages'))
            <div class="alert alert-success">
                {{session('messages')}}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif

        <div class="box-body">
            <h3>Alterar Senha</h3>
        <form method="post" action="{{ route('url_admin_muda_senha')}}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="nova_senha" placeholder="Nova Senha">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="confirme_senha" placeholder="Confirme a senha">
                </div>

                <div class="form-group">
                    <button type="submit" name="editar" class="btn btn-success"><i class="fa fa-save"></i> Alterar</button>
                </div>
            </form>
        </div>
    </div>
@stop