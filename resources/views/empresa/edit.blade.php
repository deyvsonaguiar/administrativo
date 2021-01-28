@extends('adminlte::page')

@section('title', 'Sistema Administrativo')

@section('content_header')
    <h1 class="m-0 text-dark">Editar {{ $empresa->nome }}</h1>
@stop

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('empresas.edit', $empresa) }}">Editar</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-sm-10">
                        <h3 class="card-title">Altere os dados necessários:</h3>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('empresas.update', $empresa) }}" method="post">
                        @method('PUT')
                        @include('empresa.form')
                </div>
                <div class="card-footer clearfix">
                    <button class="btn-info btn" name="submit" value="" type="submit">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop
