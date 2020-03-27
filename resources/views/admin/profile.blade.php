@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ route('admin.settings')}}"><i class="fa fa-cog"></i> Configurações</a></li>
        <li class="active">Perfil</li>
    </ol>
@stop

@section('content')
        <div class="box-header">
            <a href="{{ route('admin.home')}}" class="btn btn-info"><i class="fa fa-reply"></i> Voltar</a>
            <button type="button" class="btn btn-default" v-on:click="cancelEdit()" v-show="btnCancelEdit">
                <i class="fa fa-times-circle"></i> 
                Cancelar
            </button>
            <button type="button" class="btn btn-default" v-on:click="edit()" v-show="btnEdit">
                <i class="fa fa-edit"></i> 
                Editar
            </button>
        </div>
    
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{ auth()->user()->image }}" alt="Foto de perfil do usuário">

                    <h3 class="profile-username text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nina Mcintire</font></font></h3>

                    <p class="text-muted text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Engenheiro de software</font></font></p>

                    <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seguidores </font></font></b> <a class="pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.322</font></font></a>
                    </li>
                    <li class="list-group-item">
                        <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seguindo </font></font></b> <a class="pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">543</font></font></a>
                    </li>
                    <li class="list-group-item">
                        <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Amigos </font></font></b> <a class="pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13.287</font></font></a>
                    </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Segue</font></font></b></a>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="box">
                <div class="box-body">
                    @if(session('messages'))
                        <div class="alert alert-success">
                            {{ session('messages') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif


                    <div>
                        <form method="post" action="{{ route('url_admin_atualiza_perfil') }}">
                            <!-- dados do perfil para alterar e visualizar -->
                            <div class="form-group">
                                <label>Nome Completo</label>
                                <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name', auth()->user()->name) }}" class="form-control" :disabled="formDisabled">
                            </div>
        
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" class="form-control" :disabled="formDisabled" name="email" placeholder="E-mail de Contato" value="{{ old('email', auth()->user()->email) }}">
                                <small><i class="fa fa-exclamation-circle"></i> Para alterar o e-mail entre em contato conosco através da <a href="">Central de Ajudas.</a></small>
                            </div>
        
                            <div class="form-group">
                                <label>Usuário criado em</label>
                                <input type="text" name="nome" placeholder="Nome Completo" value="{{ auth()->user()->created_at }}" class="form-control" :disabled="formDisabled">
                            </div>
        
                            <div class="form-group">
                                <p><label>Senha</label> Para alterar a Senha vá até o painel de senhas.</p>
                                <p> <a href="{{ route('admin.settings.senhas')}}" class="btn btn-sm btn-info"><i class="fa fa-lock"></i> Acessar o painel</a></p>
                            </div>
        
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" class="form-control" :disabled="formDisabled" name="endereco" placeholder="Endereço" value="Rua Flamingo de Ana Gonzaga">
                            </div>
        
                            <div class="form-group">
                                <label>Número</label>
                                <input type="text" class="form-control" :disabled="formDisabled" name="numero" placeholder="Número" value="SN">
                            </div>
        
                            <div class="form-group">
                                <label>Complemento</label>
                                <input type="text" class="form-control" :disabled="formDisabled" name="complemento" placeholder="Complemento" value="Antiga Rua 14 Lt 31 Qd 18">
                            </div>
        
                            <div class="form-group">
                                <label>CEP</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" :disabled="formDisabled" name="cep" placeholder="CEP" value="23059-492">
        
                                    <div class="input-group-addon" style="cursor:pointer">
                                        <span id="BuscaCep"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" class="form-control" :disabled="formDisabled" name="bairro" placeholder="Bairro" value="Inhoaiba">
                            </div>
        
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" :disabled="formDisabled" name="cidade" placeholder="Cidade" value="Rio de Janeiro">
                            </div>
        
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" class="form-control" :disabled="formDisabled" name="estado" placeholder="Estado" value="Rio de Janeiro">
                            </div>
        
                            <!-- Botão salvar -->
                            <div class="text-right">
                                <button type="submit" class="btn btn-success" v-show="!btnDisabled">
                                    <i class="fa fa-save"></i>
                                    Salvar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
