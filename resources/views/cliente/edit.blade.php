@extends ('app')

@section('content')
    <div class="container">
        <h1>Editando Cliente:{{$cliente->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["cliente.edit", $cliente->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',$cliente->nome,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('sobrenome','Sobrenome:') !!}
            {!! Form::text('sobrenome',$cliente->sobrenome,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::text('email',$cliente->email,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco','Endereco:') !!}
            {!! Form::text('endereco',$cliente->endereco,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone','Telefone:') !!}
            {!! Form::text('telefone',$cliente->telefone,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf','CPF') !!}
            {!! Form::text('cpf',$cliente->cpf,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('rg','RG') !!}
            {!! Form::text('rg',$cliente->rg,['class'=>'form-control']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection