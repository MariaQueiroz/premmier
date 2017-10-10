@extends ('app')

@section('content')
    <div class="container">
        <h1>Editando Atendentes:{{$atendente->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["atendente.edit", $atendente->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',$atendente->nome,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('telefone','Telefone') !!}
            {!! Form::text('telefone',$telefone>telefone,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sobrenome','Sobrenome:') !!}
            {!! Form::text('Sobrenome',$sobrenome->sobrenome,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',$email->email,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('senha','Senha') !!}
            {!! Form::text('senha',$senha->senha,['class'=>'form-control']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection