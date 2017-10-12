@extends ('app')

@section('content')
    <div class="container">
        <h1>Editando Modelos: {{$modelo->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["modelos.update", $modelo->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',$modelo->nome,['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
        </div>


        {!! Form::close() !!}



    </div>

@endsection