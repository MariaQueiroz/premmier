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

                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>Sucesso!</strong> {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif

                        @if (Request::is('*/editar'))
                            {!! Form::model($veiculo, ['method' => 'PATCH', 'url' => 'veiculos/'.$veiculo->id]) !!}
                        @else
                            {!! Form::open(['url' => 'veiculos/salvar']) !!}
                        @endif

                        {!! Form::label('placa', 'Placa') !!}
                        {!! Form::input('text','placa',null, ['class' => 'form-control','','placeholder'=>'Placa']) !!}

                        {!! Form::label('chassi', 'Chassi') !!}
                        {!! Form::input('text','chassi',null, ['class' => 'form-control','','placeholder'=>'Chassi']) !!}

                        {!! Form::label('renavan', 'Renavan ') !!}
                        {!! Form::input('text','renavan',null, ['class' => 'form-control','','placeholder'=>'Renavan']) !!}

                        {!! Form::label('ano', 'Ano') !!}
                        {!! Form::input('text','ano',null, ['class' => 'form-control','','placeholder'=>'Ano']) !!}

                        {!! Form::label('cor', 'Cor') !!}
                        {!! Form::input('text','Cor',null, ['class' => 'form-control','','placeholder'=>'Cor']) !!}

                        {!! Form::label('marcas', 'Marca') !!}
                        {!! Form::input('text','marca',null, ['class' => 'form-control','autofocus','placeholder'=>'Marca']) !!}

                        {!! Form::label('tipo', 'Tipo') !!}
                        {!! Form::select('select_tipo',['carro_passeio' =>'Carro Passeio','antigo'=>'Antigo','utilitario'=>'Utilitário','suv'=>'SUV'],['class'=>'form-control']) !!}
                        <br>
                        {!! Form::label('quantidade_portas', 'Quantidade de portas') !!}
                        {!! Form::select('select_quantidade_portas',['duas' =>'Duas','quatro'=>'Quatro'],['class'=> 'form-control']) !!}
                        <br>
                        {!! Form::label('tipo_combustivel', 'Tipo de Combustível') !!}
                        {!! Form::select('select_tipo_combustivel',['gasolina'=>'Gasolina','alcool' => 'Alcool','diesel'=>'Diesel','flex'=>'Flex'],['class'=>'form-control']) !!}
                        <br>
                        {!! Form::label('cambio', 'Câmbio') !!}
                        {!! Form::select('select_cambio',['manual'=>'Manual','automatico'=>'Automático'], ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('quilometregem', 'Quilometragem') !!}
                        {!! Form::input('text','Quilometragem',null, ['class' => 'form-control','','placeholder'=>'Quilometragem']) !!}

                        {!! Form::label('preco_a_vista', 'Preço a Vista') !!}
                        {!! Form::input('text','preco_a_vista',null, ['class' => 'form-control','','placeholder'=>'Preço a Vsita']) !!}

                        {!! Form::label('preco_com_troca', 'Preço com Troca') !!}
                        {!! Form::input('text','preco_com_troca',null, ['class' => 'form-control','','placeholder'=>'Preço com Troca']) !!}
                        <br>
                        {!! Form::label('ar_condicionado', 'Ar Condicionado') !!}
                        {!! Form::select('select_ar_condicionado',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('direcao_hidraulica', 'Direção Hidráulica') !!}
                        {!! Form::select('select_direcao_hidraulica',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('vidro_eletrico', 'Vidro Elétrico') !!}
                        {!! Form::select('select_vidro_eletrico',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('ar_quente', 'Ar Quente') !!}
                        {!! Form::select('select_ar_quente',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('trava_eletrica', 'Trava Elétrica') !!}
                        {!! Form::select('select_trava_eletrica',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('teto_solar', 'Teto Solar') !!}
                        {!! Form::select('select_teto_solar',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('air_bags', 'Air Bags') !!}
                        {!! Form::select('select_air_bags',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
                        <br>

                        {!! Form::label('abs', 'ABS') !!}
                        {!! Form::select('select_abs',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
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