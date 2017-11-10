@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bem Vinda(o) {{ Auth::user()->name }}!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table">
                            <thead>
                            <th>Cliente</th>
                            <th>Modelo Desejado</th>
                            <th>Telefone</th>
                            </thead>
                        @foreach ($pedidos as $pedido)
                                <td>{{$pedido->cliente->nome}}</td>
                                <td>{{$pedido->modelo}}</td>
                                <td>{{$pedido->cliente->telefone}}</td>
                                </tr>
                            @endforeach
                        </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
