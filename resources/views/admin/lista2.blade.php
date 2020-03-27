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
            <h3 class="d-flex justify-content-between align-items-center">
                <div>
                    Lista de Usuários
                </div>
                <div style="float:right;">
                    <a href="{{ route('url_admin_cadastro') }}" class="btn btn-success"><i
                            class="fa fa-plus-circle"></i> Novo Usuário</a>
                </div>
            </h3>
        </div> <!-- /.box-header -->
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

                <table id="tabela" class="table table-bordered table-striped text-center">
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
                    @foreach($users as $nome)
                        <tr>
                            <td>{{ $nome->id }}</td>
                            <td>{{ $nome->name }}</td>
                            <td>{{ $nome->email }}</td>
                            <td>{{ $nome->created_at }}</td>
                            <td>{{ $nome->tipoUsuario }}</td>
                            {{--                        {{ $nome->acesso }}--}}
                            @switch($nome->acesso)
                                @case(1)
                                <td><i class="fas fa-user-check text-green cursor-pointer" title="Ativo"></i></td>
                                @break
                                @case(2)
                                <td><i class="fas fa-user-lock  text-orange cursor-pointer" title="Bloqueado"></i>
                                </td>
                                @break
                                @case(3)
                                <td><i class="fas fa-user-slash text-info cursor-pointer" title="Sem Permissão"></i>
                                </td>
                                @break
                                @default
                                <td><i class="fa fa-ban text-red cursor-pointer" title="Inativo"></i></td>
                            @endswitch
                            <td class="dt-nowrap d-flex justify-content-center align-items-center">
                                <a href="{{ route('url_admin_editar_user', ['id' => $nome->id]) }}"
                                   class="btn btn-success btn-xs tg"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-xs tr del mx-1" data-toggle="modal"
                                        data-target="#delModal{{ $nome->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown"
                                       class="dropdown-toggle btn btn-warning btn-xs to">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="{{ route('url_admin_resetar_senha', $nome->id) }}">
                                                <i class="fas fa-user-cog text-blue cursor-pointer"
                                                   title="Resetar Senha"></i>
                                                Resetar Senha
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('url_bloquear_user', ['id' => $nome->id,'acao' => 0 ])}}"
                                               class="dropdown-item">
                                                <i class="fas fa-user-times text-red cursor-pointer"
                                                   title="Inativo"></i>
                                                Inativo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('url_bloquear_user', ['id'=> $nome->id, 'acao' =>1]) }}">
                                                <i class="fas fa-user-check text-green cursor-pointer"
                                                   title="Ativo"></i>
                                                Ativar
                                            </a>
                                        </li>
                                        @if( $nome->acesso == 2)
                                            <li>
                                                <a href="{{route('url_bloquear_user', ['id' => $nome->id, 'acao' => 1 ])}}"
                                                   class="dropdown-item">
                                                    <i class="fas fa-user-clock  text-orange cursor-pointer"
                                                       title="Bloqueado"></i>
                                                    Desbloquear</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{route('url_bloquear_user', ['id' => $nome->id,'acao' => 2 ])}}"
                                                   class="dropdown-item">
                                                    <i class="fas fa-user-lock  text-orange cursor-pointer"
                                                       title="Bloqueado"></i>
                                                    Bloquear
                                                </a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{route('url_bloquear_user', ['id' => $nome->id,'acao' => 3 ])}}"
                                               class="dropdown-item">
                                                <i class="fas fa-user-slash text-info cursor-pointer"
                                                   title="Sem Permissão"></i>
                                                Sem Permissão
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <!-- excluir -->
                        @includeIf('admin.modal')


                        <!-- Modal senha -->
                        <div class="modal fade" id="senhaModal{{ $nome->id }}" tabindex="-1" role="dialog"
                             aria-labelledby="mysenhaModalLabel{{ $nome->id }}">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title text-center" id="mysenhaModalLabel{{ $nome->id }}">
                                            Informe a nova senha
                                        </h4>
                                    </div>
                                    <div class="modal-body text-center">
                                        <form action="{{ route('url_admin_muda_senha') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="id"
                                                       value="{{$nome->id}}">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="novaSenha"
                                                       placeholder="Nova Senha" id="novaSenha">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="confirmaSenha"
                                                       placeholder="Confirme a senha" id="confirmaSenha">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" name="editar" class="btn btn-success"
                                                        id="btnSenha">
                                                    <i class="fa fa-edit"></i> Alterar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div> <!-- box body -->
    </div> <!-- box -->

@stop
