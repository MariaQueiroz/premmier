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