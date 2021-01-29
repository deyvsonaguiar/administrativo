@csrf
<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2">Nome *</label>
    <div class="col-sm-10">
        <input value="{{ old('nome', @$empresa->nome) }}" type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror" placeholder="Digite o nome...">
        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="razao_social" class="col-form-label col-sm-2">Razão Social</label>
    <div class="col-sm-10">
        <input value="{{ old('razao_social', @$empresa->razao_social) }}" type="text" name="razao_social" id="razao_social" class="form-control @error('razao_social') is-invalid @enderror" placeholder="Se houver, digite o razão social...">
        @error('razao_social')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group row">
            <label for="documento" class="col-form-label col-sm-4 required">CPF/CNPJ *</label>
            <div class="col-sm-8">
                <input value="{{ old('documento', @$empresa->documento) }}" type="text" name="documento" id="documento" maxlength="18" class="cpf_cnpj form-control @error('documento') is-invalid @enderror" placeholder="Digite um documento válido...">
                @error('documento')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
            <label for="ie_rg" class="col-form-label col-sm-3 required">IE/RG *</label>
            <div class="col-sm-9">
                <input value="{{ old('ie_rg', @$empresa->ie_rg) }}" type="text" name="ie_rg" id="ie_rg" class="ie_rg form-control @error('ie_rg') is-invalid @enderror" placeholder="Digite o RG, se empresa insira a Inscrição Estadual...">
                @error('ie_rg')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group row">
            <label for="contato" class="col-form-label col-sm-3 required">Nome do Contato *</label>
            <div class="col-sm-9">
                <input value="{{ old('contato', @$empresa->contato) }}" type="text" name="contato" id="contato" class="form-control @error('contato') is-invalid @enderror" placeholder="Digite um contato...">
                @error('contato')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="celular" class="col-form-label col-sm-3 required">Celular *</label>
            <div class="col-sm-9">
                <input value="{{ old('celular', @$empresa->celular) }}" type="text" name="celular" id="celular" class="celular form-control @error('celular') is-invalid @enderror" placeholder="Digite um nº de celular...">
                @error('celular')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group row">
            <label for="email" class="col-form-label col-sm-3 required">Email *</label>
            <div class="col-sm-9">
                <input value="{{ old('email', @$empresa->email) }}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Digite um email válido...">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="telefone" class="col-form-label col-sm-3">Telefone</label>
            <div class="col-sm-9">
                <input value="{{ old('telefone', @$empresa->telefone) }}" type="text" name="telefone" id="telefone" class="telefone form-control @error('telefone') is-invalid @enderror" placeholder="Digite um nº de telefone...">
                @error('telefone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group row">
            <label for="logradouro" class="col-form-label col-sm-3 required">Logradouro *</label>
            <div class="col-sm-9">
                <input value="{{ old('logradouro', @$empresa->logradouro) }}" type="text" name="logradouro" id="logradouro" class="form-control @error('logradouro') is-invalid @enderror" placeholder="Digite um endereço válido...">
                @error('logradouro')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row">
            <label for="cep" class="col-form-label col-sm-3 required">CEP *</label>
            <div class="col-sm-9">
                <input value="{{ old('cep', @$empresa->cep) }}" type="text" name="cep" id="cep" class="cep form-control @error('cep') is-invalid @enderror" placeholder="Digite o cep...">
                @error('cep')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
        <div class="form-group row">
            <label for="bairro" class="col-form-label col-sm-3 required">Bairro *</label>
            <div class="col-sm-9">
                <input value="{{ old('bairro', @$empresa->bairro) }}" type="text" name="bairro" id="bairro" class="form-control @error('bairro') is-invalid @enderror" placeholder="Digite o bairro...">
                @error('bairro')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group row">
            <label for="cidade" class="col-form-label col-sm-3 required">Cidade *</label>
            <div class="col-sm-9">
                <input value="{{ old('cidade', @$empresa->cidade) }}" type="text" name="cidade" id="cidade" class="form-control @error('cidade') is-invalid @enderror" placeholder="Digite a cidade...">
                @error('cidade')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group row">
            <label for="estado" class="col-form-label col-sm-4 required">UF *</label>
            <div class="col-sm-8">
                <input value="{{ old('estado', @$empresa->estado) }}" type="text" name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror" placeholder="UF...">
                @error('estado')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="observacao" class="col-form-label col-sm-2">Observação: </label>
    <textarea value="{{ old('observacao', @$empresa->observacao) }}" type="text" name="observacao" id="observacao" class="form-control
    @error('observacao') is-invalid @enderror" maxlength="500" rows="3" placeholder="Insira uma observação...">{{ old('observacao', @$empresa->observacao) }}</textarea>
    @error('observacao')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

