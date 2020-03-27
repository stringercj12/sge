{{-- <!-- Tab Observações -->
<div class="tab-pane" id="obs">
    <p>Observações</p>

    <p>
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Esta
                &eacute; minha textarea para ser substitu&iacute;da pelo
                CKEditor.</font>
        </font>
    </p>
</div>

<!-- Tab Gerar Boleto -->
<div class="tab-pane" id="gerar-boleto">
    <p>Gerar Boleto</p>

    <div class="form-group">
        <label>Escolha o Vencimento</label>
        <select class="form-control">
            <option>-- Escolha o Vencimento --</option>
            <option value="05">05</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
        </select>
    </div>

    <div class="form-group">
        <div class="form-group icheckbox_flat-red">
            <label>Tipo de Fatura</label><br>
            <input type="radio" name="tipoFatura" class="flat-red" value="Digital"> <span>Digital</span>

            <input type="radio" name="tipoFatura" class="form-radios" value="Correio">
            <span>Correio</span> <br>
        </div>
        <div class="form-group">
            E-mail Boleto Digital
            <input type="text" placeholder="E-mail Digital" name="EmailFaturaDigital" class="form-control">
            <small><i class="fa fa-exclamation-circle text-red"></i> Informe um e-mail
                válido pois será enviada o boleto para o mesmo.</small>
        </div>

        <button class="btn btn-sm btn-success">
            <i class="fas fa-file-invoice-dollar"></i>
            Gerar Boleto
        </button>
    </div>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Salvar
    </button>
</div>
</form>
</div>
<div class="tab-pane fade" id="cad-professor">
    Professor
    <form method="post" action="">
        {!! csrf_field() !!}
        <div class="form-group">
            <input type="text" name="nome" class="form-control" placeholder="Nome Completo">
        </div>

        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="E-mail">
        </div>

        <div class="form-group">
            <input type="text" name="cpf" class="form-control" placeholder="CPF">
        </div>

        <div class="form-group">
            <input type="radio" name="sexo" class="form-control" value="Masculino"> Masculino
            <input type="radio" name="sexo" class="form-control" value="Feminino"> Feminino
        </div>

        <div class="form-group">
            <input type="text" name="nascimento" class="form-control" placeholder="Nascimento">
        </div>

        <div class="form-group">
            <input type="text" name="endereco" class="form-control" placeholder="Endereço">
        </div>

        <div class="form-group">
            <input type="text" name="numero" class="form-control" placeholder="Número">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>
                Salvar
            </button>
        </div>
    </form>
</div>
<div class="tab-pane fade" id="cad-outro">Outros usuários</div> --}}

<div class="text-center">
    <h2>Gerar Boletos</h2>
</div>

<table class="table">
    <tr>
        <th>#ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ação</th>
    </tr>

    <tr>
        <td>A5b34</td>
        <td>Jefferson Clementino Ferreira</td>
        <td>jefferson14489@gmail.com</td>
        <td>
            <button class="btn btn-sm btn-success">
                <i class="fas fa-file-invoice-dollar"></i>
                Gerar Boleto
            </button>
        </td>
    </tr>
</table>

{{-- 
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
    </div> --}}
