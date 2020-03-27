<div class="form-group">
        <label>Rua</label>
        <input type="text" name="rua" class="form-control" placeholder="Rua">
    </div>

    <div class="form-group">
        <label>Número</label>
        <input type="text" name="numero" class="form-control" placeholder="Número">
    </div>

    <div class="form-group">
        <label>CEP</label>
        <div class="input-group">
            <input type="text" class="form-control" name="cep" placeholder="CEP">

            <div class="input-group-addon" style="cursor:pointer">
                <span id="BuscaCep"><i class="fa fa-search"></i></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Bairro</label>
        <input type="text" name="bairro" class="form-control" placeholder="Bairro">
    </div>

    <div class="form-group">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control" placeholder="Cidade">
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
