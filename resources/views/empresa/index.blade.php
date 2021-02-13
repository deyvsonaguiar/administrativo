@extends('adminlte::page')

@section('title', 'Sistema Administrativo')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('empresas.index') }}?tipo={{ $tipo }}">Listagem de {{ $tipo }}</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-10">
                            <h3 class="card-title">Listagem de {{ $tipo }}</h3>
                        </div>
                        <div class="col-sm-2" style="text-align: end">
                            <a href="{{ route('empresas.create') }}?tipo={{ $tipo }}" class="btn btn-block btn-outline-success btn-sm">Novo {{ $tipo }} </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Nome</th>
                            <th>Contato</th>
                            <th>Celular</th>
                            <th style="width: 200px">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($empresas as $empresa)
                          <tr>
                            <td>{{ $empresa->id }}</td>
                            <td>{{ $empresa->nome }}</td>
                            <td>{{ $empresa->contato }}</td>
                            <td>{{ mask($empresa->celular, '(##) #####-####') }}</td>
                            <td style="text-align: center">
                                <a href="{{ route('empresas.show', $empresa) }}" type="button" class="btn btn-primary">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('empresas.edit', $empresa) }}" type="button" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('empresas.destroy', $empresa) }}" type="button" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                          </tr>
                            @empty
                            <tr>
                                <td></td>
                                <td></td>
                                <td style="text-align: center">Nenhum registro encontrado!</td>
                                <td></td>
                                <td></td>
                              </tr>
                        @endforelse
                        </tbody>
                      </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $empresas->appends(['tipo' => request('tipo')])->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
