@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-13">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Clientes
                        <a class="pull-right" href="{{ url('clientes/create')}}">Novo Cliente</a>
                    </div>


                    <div class="panel-body">
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>Sucesso!</strong> {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif


                        <table id="tabela_cliente" class="table">
                            <thead>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Endereço</th>
                            <th>CPF</th>
                            <th>RG</th>

                            <th>Ações</th>
                            </thead>
                            <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->telefone}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>{{$cliente->cpf}}</td>
                                    <td>{{$cliente->rg}}</td>
                                    <td>
                                        <a href="{{route('clientes.edit',['id'=>$cliente->id])}}"
                                           class="btn-sm btn-success">Editar</a>
                                        <a href="{{route('clientes.destroy',['id'=>$cliente->id])}}"
                                           class="btn-sm btn-danger">Remover</a>

                                    </td>
                                </tr>

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deletar cliente: {{$cliente->nome}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>

                                                {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' =>  'display: inline;']) !!}
                                                <button type="submit" class="btn btn-danger btn-sm" >Confirmar</button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach
                            </tbody>
                        </table>

                        <!-- Button trigger modal -->
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Launch demo modal
                  </button> --}}

                    <!-- Modal -->



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
