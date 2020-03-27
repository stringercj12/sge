<form method="post" action="{{ route('url_admin_cadastro_create') }}">
    @csrf
    <div class="form-group">
        <input type="hidden" name="tipoUsuario" class="form-control" value="Aluno">

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
            <input type="radio" name="sexo" class="form-radios" value="Masculino"> Masculino

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
            <input type="text" name="celular" class="form-control" placeholder="Ex: (19) 93386-1239 ">
        </div>
        <div class="form-group">
            <input type="text" name="residencial" class="form-control"
                placeholder="Ex: (19) 5446-3585 ">
        </div>
    </div>

    <ul class="nav nav-tabs">
        <li class="text-secondary active">
            <a href="#endereco" data-toggle="tab" class="btn text-secondary">
                <i class="fa fa-map-marker-alt"></i>
                Endereço
            </a>
        </li>
        <li>
            <a href="#escolha-curso" data-toggle="tab" class="btn text-secondary">
                <i class="fa fa-graduation-cap"></i>
                Escolha Curso
            </a>
        </li>
        <li>
            <a href="#observacao" data-toggle="tab" class="btn text-secondary">
                <i class="fas fa-user-edit"></i>
                Observações
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Tab Endereço -->
        <div class="tab-pane active" id="endereco">
            @includeIf('admin.cad-professor')
        </div>

        <!-- Tab Escolha do curso -->
        <div class="tab-pane" id="escolha-curso">
            <label>Escolha de Cursos</label>
            <select class="form-control" name="cursoEscolhido">
                <option>--Escolha o Curso--</option>
                <option value="Ánalise e Desenvolvimento de Sistemas">Ánalise e Desenvolvimento de Sistemas</option>
                <option value="">Administração</option>
                <option value="">Engenharia</option>
                <option value="">Biologia</option>
            </select>

            <p>
                <strong>Curso Escolhido:</strong> <span>Administração</span>
            </p>

            <div class="form-group">
                <button class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ver Detalhes</button>
            </div>


            <div class="form-group">
                <label>Turno</label>
                <div class="form-group">
                    <div class="col-4">
                        <input type="radio" name="turno" class="form-radios" value="Manhã">
                        <span>Manhã</span>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="turno" class="form-radios" value="Tarde">
                        <span>Tarde</span>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="turno" class="form-radios" value="Noite">
                        <span>Noite</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Observacao -->
        <div class="tab-pane" id="observacao">
            <p class="mt-3">Deseja registrar alguma observacao.</p>
            <textarea name="content" class="form-control h-75" id="editor"></textarea>
        </div>
    </div>

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>
            Salvar
        </button>
    </div>
</form>