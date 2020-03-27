@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1>Painel de Controle</h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Configurações</li>
    </ol>
@stop

@section('content')

    <div class="box">
        <div class="box-header">
            <a href="{{ route('admin.home')}}" class="btn btn-sm btn-info"><i class="fa fa-reply"></i> Voltar</a>
        </div>

        <div class="box-body">
            <p>Criar uma página de configurações gerais do sistema</p>
        </div>
    </div>
@stop