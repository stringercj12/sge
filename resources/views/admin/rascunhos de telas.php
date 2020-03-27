
<!-- Rascunho tela financeiro -->
<fieldset>
	<legend>Financeiro</legend>
	<div class="col-md-3">
		<div class="form-group">
			<label>Valor do Curso</label>
			<input type="text" name="valorCurso" class="form-control" placeholder="R$ 00,00">
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-group">
			<label>Valor das Parcela</label>
			<input type="text" name="valorParcela" class="form-control" placeholder="R$ 00,00">
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-group">
			<label>Desconto (%)</label>
			<input type="text" name="valorDesconto" class="form-control" placeholder="R$ 00,00">
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-group">
			<label>Valor Total ( por mês)</label>
			<input type="text" name="valorTotal" class="form-control" placeholder="R$ 00,00">
		</div>
	</div>


	<div class="form-group">
		<button class="btn btn-primary">Calcular</button>
	</div>

	<p><strong>Valor Final:</strong></p>
	<div class="form-group">
		<p>Valor do Curso:<strong> R$ 3.540,00</strong> </p>
	</div>

	<div class="form-group">
		<p>Valor das Parcelas: <strong> R$: 354,00</strong></p>
	</div>
	<div class="form-group">
		<p>Desconto (%): 
			<strong>
				<span class="text-green"> 30% - Valor Real: R$ 1.083,55</span>
			</strong>
		</p>
	</div>
	<div class="form-group">
		<p>Valor Total: <strong><span class="text-orange">R$ 2.456,45</span></strong></p>
	</div>
</fieldset>

<!-- Layout -->
<div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="Imagem do Usuário">
        </div>
        <div class="pull-left info">
          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alexander Pierce</font></font></p>
          <a href="#"><i class="fa fa-circle text-success"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Conectados</font></font></a>
        </div>
      </div>
<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>