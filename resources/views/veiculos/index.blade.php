@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Veiculos
                    <a class="pull-right" href="{{ url('veiculos/novo')}}">Novo Veiculo</a>
                </div>


                <div class="panel-body">
                    @if (Session::has('mensagem_sucesso'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Sucesso!</strong> {{ Session::get('mensagem_sucesso') }}
                    </div>
                    @endif


                    <table class="table">
                        <thead>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            @foreach ($veiculos as $veiculo)
                            <tr>
                                <td>{{$veiculo->nome}}</td>
                                <td>{{$veiculo->telefone}}</td>
                                <td>{{$veiculo->endereco}}</td>
                                <td>
                                    <a href="veiculos/{{ $veiculo->id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => '/veiculos/'.$veiculo->id, 'style' =>  'display: inline;']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm" >Confirmar</button>
                                    {!! Form::close() !!}
                                    <button type="button" class="btn btn-default  btn-sm" data-toggle="modal" data-target="#exampleModal">Excluir</button>
                                </td>
                            </tr>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Deletar veiculo: {{$veiculo->nome}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                Tem certeza ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancelar</button>

                                {!! Form::open(['method' => 'DELETE', 'url' => '/veiculos/'.$veiculo->id, 'style' =>  'display: inline;']) !!}
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
