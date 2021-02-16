@extends('adminlte::page')

@section('title')
Criação de User
@endsection

@section('content_header')
    <h1 class="m-0 text-dark">Novo User</h1>
@stop

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/users') }}">Listagem User</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ url('/users/create') }}">Novo User</a>
    </li>
@endsection

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Insira os dados:</h3>
                            </div>
                        </div>
                        <div class="col-sm-2" style="text-align: end">
                        <a href="{{ url('/users') }}" title="Voltar" class="btn btn-block btn-outline-primary btn-sm">Voltar</a>
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

                        <form method="POST" action="{{ url('/users') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('users.form', ['formMode' => 'create'])

                        </form>


                </div>
            </div>
        </div>
@endsection
