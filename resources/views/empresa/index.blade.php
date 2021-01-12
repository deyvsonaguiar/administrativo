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

                </div>
            </div>
        </div>
    </div>
@stop
