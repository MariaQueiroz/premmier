@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Pedido</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'pedidos.store']) !!}
        <div class="form-group">
            {!! Form::label('valor','Valor:') !!}
            {!! Form::text('valor',null,['class'=>'form-control'])!!}
        </div>

        {!! Form::label('cliente_id', 'Cliente') !!}
        {!! Form::select('cliente_id',\App\Cliente::orderBy("nome")->pluck('nome', 'id')->toArray(), null, ['class' => 'form-control','autofocus']) !!}

        {!! Form::label('modelo', 'Modelo') !!}
        {!! Form::select('modelo', null, ['class' => 'form-control','autofocus']) !!}


        <div class="form-group">
            {!! Form::label('descricao','Descricao:') !!}
            {!! Form::text('descricao',null,['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}

        </div>


        {!! Form::close() !!}



    </div>

@endsection