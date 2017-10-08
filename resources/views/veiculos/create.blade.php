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

                        {!! Form::label('marcas', 'Marca') !!}
                        {!! Form::input('text','marca',null, ['class' => 'form-control','autofocus','placeholder'=>'Marca']) !!}

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

                        {!! Form::label('tipo', 'Tipo') !!}
                        {!! Form::input('text','tipo',null, ['class' => 'form-control','','placeholder'=>'Tipo']) !!}

                        {!! Form::label('quantidade_portas', 'Quantidade de portas') !!}
                        {!! Form::input('text','quantidade_portas',null, ['class' => 'form-control','','placeholder'=>'Quantidade de portas']) !!}

                        {!! Form::label('tipo_combustivel', 'Tipo de Combustível') !!}
                        {!! Form::input('text','tipo_combustivel',null, ['class' => 'form-control','','placeholder'=>'Tipo de Combustível']) !!}

                        {!! Form::label('cambio', 'Cambio') !!}
                        {!! Form::select('select_cambio',['manual'=>'manual','automatico'=>'automatico'], ['class' => 'form-control']) !!}
                        <br>
                        {!! Form::label('ar_condicionado', 'Ar Condicionado') !!}
                        {!! Form::select('select_ar_condicionado',['sim'=>'sim','nao'=>'nao'], ['class' => 'form-control']) !!}


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