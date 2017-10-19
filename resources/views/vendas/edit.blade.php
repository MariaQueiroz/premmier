@extends ('app')

@section('content')
    <div class="container">
        <h1>Editando Vendas: {{$venda->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["vendas.update", $venda->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('data','Data:') !!}
            {!! Form::date('nome',$data->data,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('valor','Valor:') !!}
            {!! Form::text('valor',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cliente_id','Cliente:') !!}
            {!! Form::select('cliente_id',\App\Cliente::orderBy("nome")->pluck('nome', 'id')->toArray(), null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('veiculo_id','Veículo:') !!}
            {!! Form::select('veiculo_id',\App\Veiculo::orderBy("modelo")->pluck('modelo', 'id')->toArray(), null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('forma_pgto','Forma de Pagamemto:') !!}
            {!! Form::select('forma_pgto',['a vista'=>'A Vista','a prazo'=>'A Prazo'],null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}



    </div>

@endsection