@extends ('app')

@section('content')
    <div class="container">
        <h1>Novo Atendente</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'atendente.store']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('telefone','Telefone:') !!}
            {!! Form::text('telefone',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sobrenome','Sobrenome:') !!}
            {!! Form::text('sobrenome',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('senha','Senha:') !!}
            {!! Form::text('senha',null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}

        </div>


        {!! Form::close() !!}



    </div>

@endsection