@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Informe abaixo as informações do veiculo
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

                        {!! Form::label('marca', 'Marca') !!}
                        {!! Form::input('text','nome',null, ['class' => 'form-control','autofocus','placeholder'=>'Nome']) !!}
                        {!! Form::label('endereco', 'Endereço') !!}
                        {!! Form::input('text','endereco',null, ['class' => 'form-control','','placeholder'=>'Endereço']) !!}
                    	{!! Form::label('telefone', 'Telefone') !!}
                        {!! Form::input('text','telefone',null, ['class' => 'form-control','','placeholder'=>'(__) _____-____']) !!}

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
