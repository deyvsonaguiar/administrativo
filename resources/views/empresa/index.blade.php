@extends('adminlte::page')

@section('title', 'Sistema Administrativo')

@section('content_header')
    <h1 class="m-0 text-dark">Listagem</h1>
@stop

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('empresas.index') }}">Listagem</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
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
                        @foreach ($empresas as $empresa)
                          <tr>
                            <td>{{ $empresa->id }}</td>
                            <td>{{ $empresa->nome }}</td>
                            <td>{{ $empresa->contato }}</td>
                            <td>{{ $empresa->celular }}</td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-primary">
                                    <i class="far fa-eye"></i>
                                </button>
                                <button type="button" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $empresas->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
