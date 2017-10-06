@extends('layouts.app')
@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Marcas
                        <a class="pull-right" href="{{ url('marcas/novo')}}">Nova Marca</a>
                    </div>

                    <div class="panel-body">
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Nome</th>
           
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($marcas as $marca)
            <tr>
                <td>{{ $marca-> nome }}</td>

             a
                <td>
                    <a href="{{route('marca.edit',['id'=>$marca->id])}}"
                       class="btn-sm btn-success">Editar</a>
                    <a href="{{route('marcas',['id'=>$marca->id])}}"
                       class="btn-sm btn-danger">Remover</a>

                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
                    </div></div></div></div></div>

@endsection