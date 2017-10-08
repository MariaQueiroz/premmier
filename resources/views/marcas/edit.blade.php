@extends ('app')

@section('content')
    <div class="container">
        <h1>Editando Marcas:{{$marca->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["marcas.edit", $marca->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',$marca->nome,['class'=>'form-control'])!!}
        </div>



        {!! Form::close() !!}



    </div>

@endsection