@extends('adminlte::page')

@section('title', 'Sistema Administrativo')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('produtos') }}">Listagem de Produto</a></li>
@endsection

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-10">
                                <h3 class="card-title">Listagem de Produtos</h3>
                            </div>
                            <div class="col-sm-2" style="text-align: end">
                                <a href="{{ url('produtos/create') }}" class="btn btn-block btn-outline-success btn-sm">Novo Produto </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="GET" action="{{ url('/produtos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Nome</th><th>Descricao</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($produtos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nome }}</td><td>{{ $item->descricao }}</td>
                                        <td style="text-align: center" width="200px">
                                            <a href="{{ url('/produtos/' . $item->id) }}"><button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button></button></a>
                                            <a href="{{ url('/produtos/' . $item->id . '/edit') }}"><button class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></button></button></a>
                                            <form method="POST" action="{{ url('/produtos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                            <a href="{{ url('/produtos/' . $item->id . '/destroy') }}"><button class="btn btn-danger" onclick="return confirm(&quot;Deseja realmente apagar?&quot;)"><i class="fa fa-trash-alt" aria-hidden="true"></i></button></button></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="card-footer clearfix"> {!! $produtos->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
        </div>
@endsection
