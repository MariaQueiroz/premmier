@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Fornecedor</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'fornecedors.store']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',null,['class'=>'form-control','','placeholder'=>'Nome Completo'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone','Telefone:') !!}
            {!! Form::text('telefone',null,['class'=>'form-control','','placeholder'=>'(__) _____-____']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco','Endereço:') !!}
            {!! Form::text('endereco',null,['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}

        </div>


        {!! Form::close() !!}



    </div>

@endsection