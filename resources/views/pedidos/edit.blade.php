@extends ('layouts.app')
@section('content')
    <div class="container">
        <h1>Editando Pedidos: {{$pedido->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
            {!! Form::open(['route' => ["pedidos.update", $pedido->id],'method'=>'put']) !!}
            <div class="form-group">
            {!! Form::label('valor','Valor:') !!}
            {!! Form::text('valor',$pedido->valor,['class'=>'form-control'])!!}

            {!! Form::label('cliente_id', 'Cliente') !!}
            {!! Form::select('cliente_id',\App\Cliente::orderBy("nome")->pluck('nome', 'id')->toArray(), $pedido->cliente_id, ['class' => 'form-control','autofocus']) !!}

            <div class="form-group">
            {!! Form::label('modelo','Moodelo:') !!}
            {!! Form::text('modelo',$pedido->modelo,['class'=>'form-control'])!!}

            <div class="form-group">
            {!! Form::label('descricao','Descição:') !!}
            {!! Form::text('descricao',$pedido->descricao,['class'=>'form-control'])!!}

            <div class="form-group">
            {!! Form::label('data','Data:') !!}
            {!! Form::date('data','2017-05-18 ',['class'=>'form-control']) !!}
            </div>

                <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}



    </div>

@endsection