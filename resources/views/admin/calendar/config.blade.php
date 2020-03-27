@extends('adminlte::page')

@section('title', 'Calendário')

@section('content_header')
    <h1>Meu Calendário</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('tasks.index') }}"><i class="fa fa-calendar"></i> Calendário</a></li>
        <li class="breadcrumb-item active">Configurações</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">
                        Configurações dos eventos
                    </div>
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    bla bla bla config
                </div>
            </div>
        </div>
    </div>
@endsection
