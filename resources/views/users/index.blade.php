@extends('adminlte::page')

@section('title')
Usuários
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('users') }}">Listagem de Usuários</a></li>
@endsection

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Listagem de Usuários</h3>
                            </div>
                            <div class="col-sm-2" style="text-align: end">
                                <a href="{{ url('users/create') }}" class="btn btn-block btn-outline-success btn-sm">Novo Usuário </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="GET" action="{{ url('/users') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td style="text-align: center" width="200px">
                                            <a href="{{ url('/users/' . $item->id) }}"><button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button></button></a>
                                            <a href="{{ url('/users/' . $item->id . '/edit') }}"><button class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></button></button></a>
                                            <form method="POST" action="{{ url('/users' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                            <a href="{{ url('/users/' . $item->id . '/destroy') }}"><button class="btn btn-danger" onclick="return confirm(&quot;Deseja realmente apagar?&quot;)"><i class="fa fa-trash-alt" aria-hidden="true"></i></button></button></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="card-footer clearfix"> {!! $users->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
        </div>
@endsection
