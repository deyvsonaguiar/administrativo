@extends('adminlte::page')

@section('title', 'Sistema Administrativo')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('empresas.index') }}?tipo={{ $empresa->tipo }}">Listagem de {{ $empresa->tipo }} </a></li>
    <li class="breadcrumb-item"><a href="{{ route('empresas.show', $empresa) }}">Detalhes de {{ $empresa->tipo }}</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-sm-10">
                        <h3 class="card-title">Detalhe de {{ $empresa->tipo }}</h3>
                    </div>
                </div>
                </div>
                <div class="card-body">

                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                          <div class="col-12">
                            <h4>
                              <i class="fas fa-globe"></i>
                              {{ $empresa->nome }}
                              <small class="float-right">Cadastrado em: {{ $empresa->created_at->format('d/m/Y') }}</small>
                            </h4>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <strong>Razão Social: </strong>{{ $empresa->razao_social }}<br>
                                <strong>CNPJ/CPF: </strong>{{ $empresa->documento }}<br>
                                <strong>IE/RG: </strong>{{ $empresa->ie_rg }}<br>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                            <address>
                                <strong>ENDEREÇO: </strong><br>
                                {{ $empresa->logradouro }}, {{ $empresa->bairro }}<br>
                                {{ $empresa->cidade }} - {{ $empresa->estado }} - <strong>CEP: </strong>{{ $empresa->cep }}<br>
                            </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <strong>Contato: </strong>{{ $empresa->contato }}<br>
                                <strong>Celular: </strong>{{ $empresa->celular }}<br>
                                <strong>Email: </strong>{{ $empresa->email }}<br>
                                <strong>Telefone: </strong>{{ $empresa->telefone }}<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <strong>Observações: </strong>{{ $empresa->observação }}<br>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                </div>
            </div>
        </div>
    </div>
@stop
