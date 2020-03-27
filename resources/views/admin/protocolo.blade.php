{{-- @extends('layouts.app') --}}

{{-- @section('title', 'Escola Interativa')
@section('logo', 'Escola Interativa') --}}
@extends('adminlte::page')

@section('title', 'Home')
@section('content_header')
    <h1>Meus Processos</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('url_dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ route('url_admin_protocolo')}}"><i class="fa fa-cog"></i> Protocolos</a></li>
    </ol>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Protocolos</h4>
                        <div class="qtd-protocolos">
                            <h6>Total: 4 Tickets</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="filtro-protocolo float-right d-flex justify-content-bettween">
                            <form class="form-row mr-2">
                                <select class="form-control">
                                    <option hidden>Filtros</option>
                                    <option value="Aberto">Aberto</option>
                                    <option value="Andamento">Andamento</option>
                                    <option value="Fechado">Fechado</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-default" v-on:click="modal()">
                            <i class="fas fa-plus"></i>
                            Abrir novo ticket
                        </button>
                    </div>
                </div>
            </div>

            <div class="box-body">
                <div class="accordion" id="accordionExample">
                    @foreach($protocolos as $protocolo)
                        <div class="card">
                            <div class="card-header" id="heading{{$protocolo->id}}">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                                    {{ $protocolo->id  }} - {{ $protocolo->titulo }}
                                </button>
                            </h2>
                            </div>

                            <div id="collapse{{$protocolo->id}}" class="collapse" aria-labelledby="heading{{$protocolo->id}}" data-parent="#accordionExample">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Solicitante</th>
                                            <th>Data</th>
                                            <th>Observação</th>
                                            <th>Situação</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jefferson Ferreira</td>
                                            <td>23/05/2018</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>

                                            @if($protocolo->id % 2 == 0)
                                                <td>Aberto</td>
                                            @else
                                                <td>Fechado</td>
                                            @endif
                                            <td class="text-center"><a href="#"><i class="fas fa-clone"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop