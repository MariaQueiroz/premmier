@extends('layouts.app')
@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Fornecedores
                        <a class="pull-right" href="{{ url('fornecedor/create')}}">Novo Fornecedor</a>
                    </div>

                    <div class="panel-body">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fornecedores as $fornecedor)
            <tr>
                <td>{{ $fornecedor-> nome }}</td>
                <td>{{ $fornecedor->telefone}}</td>
                <td>{{ $fornecedor->endereco}}</td>

             a
                <td>
                    <a href="{{route('$fornecedor.edit',['id'=>$fornecedor->id])}}"
                       class="btn-sm btn-success">Editar</a>
                    <a href="{{route('$fornecedor',['id'=>$fornecedor->id])}}"
                       class="btn-sm btn-danger">Remover</a>

                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
                    </div></div></div></div></div>

@endsection