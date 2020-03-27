@extends('adminlte::page')

@section('title', 'Gerenciar Usuários')

@section('content_header')
    <h1>Gerenciar Usuários</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Lista Usuários</li>
    </ol>
@stop

@section('content')

    <div class="box">
        <div class="box-header">
            <h3>Lista de Usuários
                <div style="float:right;">
                    <a href="{{ route('url_admin_cadastro') }}" class="btn btn-success"><i
                            class="fa fa-plus-circle"></i> Novo Usuário</a>
                </div>
            </h3>
        </div>
        <div class="box-body">
            @if(session('messages'))
                <div class="alert alert-danger">
                    <i class="fa fa-circle-o"></i>
                    {{ session('messages')  }}
                </div>
            @elseif(session('bloqueio'))
                <div class="alert alert-success">
                    <i class="fa fa-circle-o text-white"></i>
                    {{ session('bloqueio')  }}
                </div>
            @endif

            <div class="table-responsive">
                <table id="tabela" class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="info text-center text-uppercase">ID</th>
                        <th class="info text-center text-uppercase">Nome</th>
                        <th class="info text-center text-uppercase">E-mail</th>
                        <th class="info text-center text-uppercase">Cadastro</th>
                        <th class="info text-center text-uppercase">Usuário</th>
                        <th class="info text-center text-uppercase">Status</th>
                        <th class="info text-center text-uppercase">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @includeIf('admin.lista2')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
