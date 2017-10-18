@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as dados do veiculo
                        <a class="pull-right" href="{{ url('veiculos')}}">Listagem veiculo</a>
                    </div>

                    <div class="panel-body">
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>Sucesso!</strong> {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif

                            {!! Form::open(['route' => 'veiculos.store']) !!}

                        {!! Form::label('placa', 'Placa') !!}
                        {!! Form::input('text','placa',null, ['class' => 'form-control','','placeholder'=>'Placa']) !!}

                        {!! Form::label('chassi', 'Chassi') !!}
                        {!! Form::input('text','chassi',null, ['class' => 'form-control','','placeholder'=>'Chassi']) !!}

                        {!! Form::label('renavan', 'Renavan ') !!}
                        {!! Form::input('text','renavan',null, ['class' => 'form-control','','placeholder'=>'Renavan']) !!}

                        {!! Form::label('ano', 'Ano') !!}
                        {!! Form::input('number','ano',null, ['class' => 'form-control','','placeholder'=>'Ano']) !!}

                        {!! Form::label('cor', 'Cor') !!}
                        {!! Form::input('text','cor',null, ['class' => 'form-control','','placeholder'=>'Cor']) !!}

                        {!! Form::label('marca_id', 'Marca') !!}
                        {!! Form::select('marca_id',\App\Marca::orderBy("nome")->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control','autofocus']) !!}

                        {!! Form::label('modelo', 'Modelo') !!}
                        {!! Form::input('text', 'modelo', null, ['class' => 'form-control','autofocus','placeholder'=>'Modelo']) !!}

                        {!! Form::label('quilometregem', 'Quilometragem') !!}
                        {!! Form::input('text','Quilometragem',null, ['class' => 'form-control','','placeholder'=>'Quilometragem']) !!}

                        {!! Form::label('preco_a_vista', 'Preço a Vista') !!}
                        {!! Form::input('number','preco_a_vista',null, ['class' => 'form-control','','placeholder'=>'Preço a Vsita']) !!}

                        {!! Form::label('preco_com_troca', 'Preço com Troca') !!}
                        {!! Form::input('number','preco_com_troca',null, ['class' => 'form-control','','placeholder'=>'Preço com Troca']) !!}

                        {!! Form::label('tipo', 'Tipo') !!}
                        {!! Form::select('tipo',['carro_passeio' =>'Carro Passeio','antigo'=>'Antigo','utilitario'=>'Utilitário','suv'=>'SUV'],['class'=>'form-control']) !!}
                        <br>
                        {!! Form::label('quantidade_portas', 'Quantidade de portas') !!}
                        {!! Form::select('quantidade_portas',['duas' =>'Duas','quatro'=>'Quatro'],['class'=> 'form-control']) !!}
                        <br>
                        {!! Form::label('tipo_combustivel', 'Tipo de Combustível') !!}
                        {!! Form::select('tipo_combustivel',['gasolina'=>'Gasolina','alcool' => 'Alcool','diesel'=>'Diesel','flex'=>'Flex'],['class'=>'form-control']) !!}
                        <br>
                        {!! Form::label('cambio', 'Câmbio') !!}
                        {!! Form::select('cambio',['manual'=>'Manual','automatico'=>'Automático'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('ar_condicionado', 'Ar Condicionado') !!}
                        {!! Form::select('ar_condicionado',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('direcao_hidraulica', 'Direção Hidráulica') !!}
                        {!! Form::select('direcao_hidraulica',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('vidro_eletrico', 'Vidro Elétrico') !!}
                        {!! Form::select('vidro_eletrico',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('ar_quente', 'Ar Quente') !!}
                        {!! Form::select('ar_quente',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('trava_eletrica', 'Trava Elétrica') !!}
                        {!! Form::select('trava_eletrica',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('teto_solar', 'Teto Solar') !!}
                        {!! Form::select('teto_solar',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('air_bags', 'Air Bags') !!}
                        {!! Form::select('air_bags',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('abs', 'ABS') !!}
                        {!! Form::select('abs',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>




                            <div class="col-sm-12">
                            <h1 class="text-center">
                                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                            </h1>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection