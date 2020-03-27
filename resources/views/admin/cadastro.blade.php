@extends('adminlte::page')

@section('title', 'Cadastro de Usuários')

@section('content_header')
<h1>Novo Usuário</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Cadastro</li>
</ol>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <a class="btn btn-info" href="{{route('url_admin_lista')}}"> <i class="fa fa-reply"></i> Voltar</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('errors'))
            <div class="container">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="box-body">
            <p>Quais dados deseja alterar ?</p>

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#cad-aluno" class="btn text-secondary" data-toggle="tab"
                                      aria-expanded="false"><i class="fa fa-graduation-cap"></i> Aluno</a></li>
                <li><a href="#endereco" class="btn text-secondary" data-toggle="tab" aria-expanded="false">
                        <i class="fa fa-map-marker-alt"></i> Endereço</a></li>
                <li>
                    <a href="#observacao" data-toggle="tab" class="btn text-secondary">
                        <i class="fas fa-user-edit"></i>
                        Observações
                    </a>
                </li>
            </ul>

            <form method="post" action="{{ route('url_admin_cadastro_create') }}">
                <div class="tab-content" id="myTabContent">

                    <!-- Tab Cadastro Aluno -->
                    <div class="tab-pane active" id="cad-aluno">
                        @csrf
                        <div class="form-group">
                            <label>Tipo de Usuário</label>
                            <div class="form-group">
                                <input type="radio" name="tipoUsuario" class="form-radios" value="Aluno">
                                Aluno

                                <input type="radio" name="tipoUsuario" class="form-radios" value="Professor"> Professor
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nome Completo</label>
                            <input type="text" name="name" class="form-control" placeholder="Nome Completo">
                        </div>

                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>

                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" name="cpf" class="form-control" placeholder="CPF">
                        </div>

                        <div class="form-group">
                            <label>RG</label>
                            <input type="text" name="rg" class="form-control" placeholder="RG">
                        </div>

                        <div class="form-group">
                            <label>Sexo</label>
                            <div class="form-group">
                                <input type="radio" name="sexo" class="form-radios" value="Masculino">
                                Masculino

                                <input type="radio" name="sexo" class="form-radios" value="Feminino"> Feminino

                            </div>

                        </div>

                        <div class="form-group">
                            <label>Nascimento</label>
                            <input type="text" name="nascimento" class="form-control" placeholder="Nascimento">
                        </div>

                        <div class="form-group">
                            <label>Telefones</label>
                            <div class="form-group">
                                <input type="text" name="celular" class="form-control"
                                        placeholder="Ex: (19) 93386-1239">
                            </div>
                            <div class="form-group">
                                <input type="text" name="residencial" class="form-control"
                                        placeholder="Ex: (19) 5446-3585">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>
                                Salvar
                            </button>
                        </div>
                    </div>

                    <!-- Tab Endereço -->
                    <div class="tab-pane" id="endereco">

                        <div class="form-group">
                            <label>CEP</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cep" placeholder="CEP"
                                       v-model="form.cep">

                                <div class="input-group-addon" style="cursor:pointer" v-on:click="buscaCEP()">
                                    <span id="BuscaCep"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Rua</label>
                            <input type="text" name="rua" class="form-control" placeholder="Rua" v-model="form.logradouro">
                        </div>

                        <div class="form-group">
                            <label>Número</label>
                            <input type="text" name="numero" class="form-control" placeholder="Número"
                                v-mode="form.numero">
                        </div>

                        <div class="form-group">
                            <label>Bairro</label>
                            <input type="text" name="bairro" class="form-control" placeholder="Bairro"
                                v-model="form.bairro">
                        </div>

                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="cidade" class="form-control" placeholder="Cidade"
                                v-model="form.cidade">
                        </div>

                        <div class="form-group">
                            <label>Estado</label>
                            <select class="form-control">
                                <option>-- Escolha o uma opção --</option>
                                @foreach($estado as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <!-- Tab Observacao -->
                    <div class="tab-pane" id="observacao">
                        <p class="mt-3">Deseja registrar alguma observacao.</p>
                        <div class="form-group">
                            <textarea name="content" class="form-control h-75" id="summernote">
                            </textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
