@csrf
<input type="hidden" name="tipo" value="{{ $tipo }}">
<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2 required">Nome *</label>
    <div class="col-sm-10">
        <input type="text" name="nome" id="nome" required="required" maxlength="255" class="form-control" placeholder="Digite o nome...">
    </div>
</div>
<div class="form-group row">
    <label for="razao_social" class="col-form-label col-sm-2">Razão Social</label>
    <div class="col-sm-10">
        <input type="text" name="razao_social" id="razao_social" maxlength="255" class="form-control" placeholder="Se houver, digite o razão social...">
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group row">
            <label for="documento" class="col-form-label col-sm-4 required">Documento *</label>
            <div class="col-sm-8">
                <input type="text" name="documento" id="documento" required="required" maxlength="18" class="form-control" placeholder="Digite um documento válido...">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
            <label for="ie_rg" class="col-form-label col-sm-3 required">IE/RG *</label>
            <div class="col-sm-9">
                <input type="text" name="ie_rg" id="ie_rg" required="required" maxlength="12" class="form-control" placeholder="Digite o RG, se empresa insira a Inscrição Estadual...">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group row">
            <label for="contato" class="col-form-label col-sm-3 required">Nome do Contato *</label>
            <div class="col-sm-9">
                <input type="text" name="contato" id="contato" required="required" maxlength="255" class="form-control" placeholder="Digite um contato...">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="celular" class="col-form-label col-sm-3 required">Celular *</label>
            <div class="col-sm-9">
                <input type="text" name="celular" id="celular" required="required" maxlength="15" class="form-control" placeholder="Digite um nº de celular...">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group row">
            <label for="email" class="col-form-label col-sm-3 required">Email *</label>
            <div class="col-sm-9">
                <input type="email" name="email" id="email" required="required" maxlength="100" class="form-control" placeholder="Digite um email válido...">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="telefone" class="col-form-label col-sm-3">Telefone</label>
            <div class="col-sm-9">
                <input type="text" name="telefone" id="telefone" maxlength="15" class="form-control" placeholder="Digite um nº de telefone...">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group row">
            <label for="cep" class="col-form-label col-sm-4 required">CEP *</label>
            <div class="col-sm-8">
                <input type="text" name="cep" id="cep" required="required" maxlength="9" class="form-control" placeholder="Digite o cep...">
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="form-group row">
            <label for="logradouro" class="col-form-label col-sm-2 required">Logradouro *</label>
            <div class="col-sm-10">
                <input type="text" name="logradouro" id="logradouro" required="required" maxlength="150" class="form-control" placeholder="Digite um endereço válido...">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="bairro" class="col-form-label col-sm-3 required">Bairro *</label>
            <div class="col-sm-9">
                <input type="text" name="bairro" id="bairro" required="required" maxlength="100" class="form-control" placeholder="Digite o bairro...">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="cidade" class="col-form-label col-sm-3 required">Cidade *</label>
            <div class="col-sm-9">
                <input type="text" name="cidade" id="cidade" required="required" maxlength="100" class="form-control" placeholder="Digite a cidade...">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="estado" class="col-form-label col-sm-3 required">Estado *</label>
            <div class="col-sm-9">
                <input type="text" name="estado" id="estado" required="required" maxlength="150" class="form-control" placeholder="Digite o Estado...">
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="observacao" class="col-form-label col-sm-2">Observação: </label>
    <textarea type="text" name="observacao" id="observacao" class="form-control" maxlength="500" rows="3" placeholder="Insira uma observação..."></textarea>
</div>

