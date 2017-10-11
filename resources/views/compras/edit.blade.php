@extends ('app')

@section('content')
    <div class="container">
        <h1>Editando Compra:{{$compra->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["compras", $compra->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('data','Data:') !!}
            {!! Form::date('nome',$data->data,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('valor','Valor') !!}
            {!! Form::text('valor',$valor->valor,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('contrato','Contrato:') !!}
            {!! Form::text('contrato',$contrato->contrato,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo','Tipo') !!}
            {!! Form::text('tipo',$tipo->tipo,['class'=>'form-control']) !!}
        </div>



        {!! Form::close() !!}



    </div>

@endsection