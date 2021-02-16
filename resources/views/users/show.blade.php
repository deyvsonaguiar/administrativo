@extends('adminlte::page')

@section('title')
Detalhes de Usuário
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('users') }}">Listagem de Usuários</a></li>
    <li class="breadcrumb-item"><a href="{{ url('users', $user->id) }}">Detalhes de Usuário</a></li>
@endsection

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                    <div class="row">
                        <div class="col-sm-10">
                            <h3 class="card-title">Detalhes de Usuário {{ $user->id }}</h3>
                        </div>
                        <div class="col-sm-2" style="text-align: end">
                        <a href="{{ url('/users') }}" title="Voltar" class="btn btn-block btn-outline-primary btn-sm">Voltar</a>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $user->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nome </th>
                                        <td> {{ $user->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $user->email }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="content">
                        <div class="row">
                            <div class="col-sm-2" style="text-align: start">
                                <form method="POST" action="{{ url('users' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-block btn-outline-danger btn-sm" onclick="return confirm(&quot;Tem certeza que quer apagar?&quot;)">Apagar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
