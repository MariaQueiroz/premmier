@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Editando Fornecedors: {{$fornecedor->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["fornecedors.update", $fornecedor->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',$fornecedor->nome,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('telefone','Telefone') !!}
            {!! Form::text('telefone',$fornecedor->telefone,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco','Endereço') !!}
            {!! Form::text('endereco',$fornecedor->endereco,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}



    </div>

@endsection