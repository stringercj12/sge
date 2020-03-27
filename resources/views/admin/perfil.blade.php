@extends('layouts.app')

@section('title', 'Escola Interativa')
@section('logo', 'Escola Interativa')

@section('content')
    <div class="container">
    	<div class="card">
	        <div class="card-header text-center border-0 mb-2">
	            <h1>Meu Perfil</h1>
	        </div>
    		<div class="row mx-2">
    			<div class="col-md-8">
			        <div class="flex-column" style="margin-bottom: 8px;border-bottom: 1px solid #ccc">
			            <div class="menu-modal">
			                <div class="img-fundo">
			                    <ul class="menu-modal-perfil p-0 text-center" style="list-style: none;">
			                        <li class="menu-img nav-item">
			                            <a href="#">
			                                <img src="{{ auth()->user()->image }}" alt="img Perfil" style="width: 64px;height: 64px;border-radius: 50%;">
			                            </a>
			                        </li>
			                        <li class="menu-text-name nav-item">
			                            <a href="#" class="menu-modal-link-btn menu-modal-link-perfil"><i class="fas fa-user"></i> {{ auth()->user()->name }}</a>
			                        </li>
			                        <li class="menu-text-email nav-item">
			                            <a href="#" class="menu-modal-link-btn menu-modal-link-perfil"><i class="fas fa-envelope"></i> {{ auth()->user()->email }}</a>
			                        </li>
			                    </ul>
			                </div>
			            </div>
			      </div>
			      <div class="card-body">
			      	<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados Pessoais</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Endereço</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Matrícula</a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							  	<div class="form-group">
			                        <label>Nome Completo</label>
			                        <input type="text" name="nome" placeholder="Nome Completo" value="{{ auth()->user()->name }}" class="form-control" disabled="">
			                    </div>

			                    <div class="form-group">
			                        <label>E-mail</label>
			                        <input type="text" class="form-control" disabled="" name="email" placeholder="E-mail de Contato" value="{{ auth()->user()->email }}">
			                        <small><i class="fa fa-exclamation-circle"></i> Para alterar o e-mail entre em contato conosco através da <a href="">Central de Ajudas.</a></small>
			                    </div>

			                    <div class="form-group">
			                        <label>Usuário criado em</label>
			                        <input type="text" name="nome" placeholder="Criado em" value="{{ auth()->user()->created_at }}" class="form-control" disabled="">
			                    </div>

			                    <div class="form-group">
			                        <p><label>Senha</label> Para alterar a Senha vá até o painel de senhas.</p>
			                        <p> <a href="{{ route('admin.settings.senhas')}}" class="btn btn-sm btn-info"><i class="fa fa-lock"></i> Acessar o painel</a></p>
			                    </div>
						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
				                        <label>Rua <span class="asterisco">*</span></label>
				                        <input type="text" class="form-control" disabled="" name="endereco" placeholder="Rua, AV, Travessa..." value="Rua Flamingo de Ana Gonzaga">
				                    </div> 
								</div> 

			                    <div class="col-md-3">
			                    	<div class="form-group">
				                        <label>Número</label>
				                        <input type="text" class="form-control" disabled="" name="numero" placeholder="Número" value="SN">
				                    </div>
			                    </div>
							</div>

							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
				                        <label>Complemento</label>
				                        <input type="text" class="form-control" disabled="" name="complemento" placeholder="Complemento" value="Antiga Rua 14 Lt 31 Qd 18">
				                    </div> 
								</div> 
			                    <div class="col-md-3">
				                    <div class="form-group">
				                        <label>CEP</label>
				                        <input type="text" class="form-control" disabled="" name="cep" placeholder="CEP" value="23059-492">
				                    </div>
			                    </div>
							</div>

		                    <div class="row">
		                    	<div class="col-md-4">
		                    		<div class="form-group">
				                        <label>Bairro</label>
				                        <input type="text" class="form-control" disabled="" name="bairro" placeholder="Bairro" value="Inhoaiba">
				                    </div> 
		                    	</div>
		                    	<div class="col-md-4">
		                    		<div class="form-group">
				                        <label>Cidade</label>
				                        <input type="text" class="form-control" disabled="" name="cidade" placeholder="Cidade" value="Rio de Janeiro">
				                    </div> 
		                    	</div>
		                    	<div class="col-md-4">
		                    		<div class="form-group">
				                        <label>Estado</label>
				                        <input type="text" class="form-control" disabled="" name="estado" placeholder="Estado" value="Rio de Janeiro">
				                    </div>
		                    	</div>
		                    </div> 
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<p>
								<div class="alert alert-warning">
									<p><i class="fas fa-exclamation"></i> Caso o usuário logado seja aluno abrira esta aba com informações do curso em andamento</p>
								</div>
							</p>
						</div>
					</div>
			      </div>
			    </div>
			    <div class="col-md-4">
		    		<div class="card">
		    			<div class="card-header text-center">
		    				<h3><i class="fas fa-edit"></i> Editar Perfil</h3>
		    			</div>
		    			<div class="card-body">
		    				<div class="list-group">
		    					<a href="#" class="list-group-item btn btn-outline-secondary text-left btn-sm" class="btn btn-primary" data-toggle="modal" data-target="#AlteraImagePerfil">
		    						<i class="fas fa-camera"></i> Imagem de Perfil
		    					</a>
		    					<a href="#" class="list-group-item btn btn-outline-secondary text-left btn-sm" class="btn btn-primary" data-toggle="modal" data-target="">
		    						<i class="fas fa-image"></i> Tema Fundo
		    					</a>
		    					<a href="#" class="list-group-item btn btn-outline-secondary text-left btn-sm" class="btn btn-primary" data-toggle="modal" data-target="">
		    						<i class="fas fa-user-edit"></i> Dados Pessoais
		    					</a>
		    					<a href="#" class="list-group-item btn btn-outline-secondary text-left btn-sm" class="btn btn-primary" data-toggle="modal" data-target="">
		    						<i class="fas fa-street-view"></i> Endereço
		    					</a>
		    					<a href="#" class="list-group-item btn btn-outline-secondary text-left btn-sm" class="btn btn-primary" data-toggle="modal" data-target="#AlteraSenha">
		    						<i class="fas fa-lock"></i> Nova Senha
		    					</a>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
    		</div>

	      <div class="card-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
    	</div>
    </div>


<!-- Modais do menu -->

<!-- 1 Modal de trocar imagem perfil -->
<div class="modal fade" id="AlteraImagePerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Alterar Imagem de Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning">
        	<strong><i class="fas fa-exclamation-circle"></i> Tamanho da imagem deve ser superio a 4000X6000</strong>
        </div>
        <div class="trocaImage">
        	<form method="post">
        		{!! csrf_field() !!}
        		<div class="form-group">
        			<input class="form-file" type="file" name="trocaImagePerfil">
        		</div>
        	</form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
        <button type="button" class="btn btn-success"><i class="fas fa-save"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- 2 Modal de trocar imagem de fundo -->
<!-- 3 Modal de trocar dados pessoais -->
<!-- 4 Modal de trocar endereço -->
<!-- 5 Modal de trocar senha -->
<div class="modal fade" id="AlteraSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Alteração de Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning">
        	<strong><i class="fas fa-exclamation-circle"></i> A senha deve ter no máximo 6 caracteres</strong>
        </div>
        <div class="trocaImage">
        	<form method="post">
        		{!! csrf_field() !!}
        		<div class="form-group">
        			<span><i class="fas fa-lock"></i></span><input class="form-control" type="password" name="nova_senha" placeholder="Senha Atual">
        		</div>
        		<div class="form-group">
        			<i class="fas fa-user-lock"></i> <input class="form-control" type="password" name="nova_senha" placeholder="Nova senha">
        		</div>
        		<div class="form-group">
        			<i class="fas fa-lock-open"></i> <input class="form-control" type="password" name="confirma_senha" placeholder="Confirma senha">
        		</div>
        		<div class="form-group">
        			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Salvar</button>
        		</div>
        	</form>
        </div>
      </div>
    </div>
  </div>
</div>


@stop