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
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th>Placa</th>
                            <th>Chassi</th>
                            <th>Renavan</th>
                            <th>Cor</th>
                            <th>Tipo</th>
                            <th>Quantidade de Portas</th>
                            <th>Tipo de Combustivel</th>
                            <th>Cambio automatico/manual</th>
                            <th>Quilometragem</th>
                            <th>Preco a vista</th>
                            <th>Preco com troca</th>
                            <th>Ar Condicionado</th>
                            <th>Direcao Hidraulica</th>
                            <th>Vidro Eletrico</th>
                            <th>Ar Quente</th>
                            <th>Trava Eletrica</th>
                            <th>Teto Solar</th>
                            <th>Air Bags</th>
                            <th>Abs</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            @foreach ($veiculos as $veiculo)
                            <tr>
                                <td>{{$veiculo->marca}}</td>
                                <td>{{$veiculo->modelo}}</td>
                                <td>{{$veiculo->ano}}</td>
                                <td>{{$veiculo->placa}}</td>
                                <td>{{$veiculo->chassi}}</td>
                                <td>{{$veiculo->renavan}}</td>
                                <td>{{$veiculo->tipo}}</td>
                                <td>{{$veiculo->quantidade_portas}}</td>
                                <td>{{$veiculo->tipo_combustivel}}</td>
                                <td>{{$veiculo->cambio}}</td>
                                <td>{{$veiculo->quilometragem}}</td>
                                <td>{{$veiculo->preco_a_vista}}</td>
                                <td>{{$veiculo->preco_com_troca}}</td>
                                <td>{{$veiculo->ar_condicionado}}</td>
                                <td>{{$veiculo->direcao_hidraulica}}</td>
                                <td>{{$veiculo->ar_quente}}</td>
                                <td>{{$veiculo->trava_eletrica}}</td>
                                <td>{{$veiculo->teto_solar}}</td>
                                <td>{{$veiculo->air_bags}}</td>
                                <td>{{$veiculo->abs}}</td>
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
