@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Compras
                        <a class="pull-right" href="{{ url('compras/create')}}">Nova Compra</a>
                    </div>


                    <div class="panel-body">
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>Sucesso!</strong> {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif


                        <table id="tabela_veiculo" class="table">
                            <thead>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Fornecedor</th>
                            <th>Veículo</th>
                            <th>Ações</th>
                            </thead>
                            <tbody>

                                @foreach ($compras as $compra)
                                    <tr>
                                        <td>{{$compra->data}}</td>
                                        <td>{{$compra->valor}}</td>

                                        @if ($compra->fornecedor->nome == null)
                                            <td>Compra Apagado</td>
                                        @else
                                            <td>{{$compra->fornecedor->nome}}</td>
                                        @endif

                                        @if ($compra->veiculo == null)
                                            <td>Compra Apagado</td>
                                        @else
                                            <td>{{$compra->veiculo->modelo}}</td>
                                        @endif
                                        <td>
                                            <a href="{{route('compras.edit',['id'=>$compra->id])}}"
                                               class="btn-sm btn-success">Editar</a>
                                            <a href="{{route('compras.destroy',['id'=>$compra->id])}}"
                                               class="btn-sm btn-danger">Remover</a>

                                        </td>

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deletar compra: {{$compra->nome}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>

                                                {!! Form::open(['method' => 'DELETE', 'url' => '/compras/'.$compra->id, 'style' =>  'display: inline;']) !!}
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
