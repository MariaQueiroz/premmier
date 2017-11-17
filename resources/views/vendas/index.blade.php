@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Vendas
                        <a class="pull-right" href="{{ url('vendas/create')}}">Nova Venda</a>
                    </div>


                    <div class="panel-body">
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>Sucesso!</strong> {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif

                            {!! Form::open(['route' => ["vendas.search"],'method'=>'post']) !!}
                            <div class="form-group">
                                {!! Form::label('data','Data Inicial da Venda:') !!}
                                {!! Form::date('dataInicial',"",['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('data','Data Final:') !!}
                                {!! Form::date('dataFinal',"",['class'=>'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Pesquisar',['class'=>'btn btn-primary'])!!}
                            </div>

                            {!! Form::close() !!}

                        <table id="tabela_veiculo" class="table">
                            <thead>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Cliente</th>
                            <th>Veículo</th>
                            <th>Ações</th>
                            </thead>
                            <tbody>
                            @foreach ($vendas as $venda)
                                <tr>
                                    <td>{{$venda->data}}</td>
                                    <td>{{$venda->valor}}</td>
                                    @if ($venda->cliente == null)
                                        <td>Cliente Apagado</td>
                                    @else
                                        <td>{{$venda->cliente->nome}}</td>
                                    @endif

                                @if ($venda->veiculo == null)
                                        <td>Veiculo Apagado</td>
                                    @else
                                        <td>{{$venda->veiculo->modelo}}</td>
                                    @endif

                                    <td>
                                        <a href="{{route('vendas.destroy',['id'=>$venda->id])}}"
                                           class="btn-sm btn-danger">Remover</a>

                                    </td>
                                </tr>

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deletar venda: {{$venda->nome}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>

                                                {!! Form::open(['method' => 'DELETE', 'url' => '/vendas/'.$venda->id, 'style' =>  'display: inline;']) !!}
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
