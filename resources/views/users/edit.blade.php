@extends('adminlte::page')

@section('title')
Edição de Usuário
@endsection

@section('content_header')
    <h1 class="m-0 text-dark">Editar Usuário</h1>
@stop

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/users') }}">Listagem de Usuários</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ url('/users/' . $user->id . '/edit') }}">Editar Usuário</a>
    </li>
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
                            <div class="col-sm-2" style="text-align: end">
                            <a href="{{ url('/users') }}" title="Voltar" class="btn btn-block btn-outline-primary btn-sm">Voltar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                         @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/users/' . $user->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('users.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
