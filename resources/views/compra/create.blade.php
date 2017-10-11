@extends ('app')

@section('content')
    <div class="container">
        <h1>Nova Compra</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'compra.store']) !!}
        <div class="form-group">
            {!! Form::label('data','Data:') !!}
            {!! Form::date('data','2017-05-18 ',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valor','Valor:') !!}
            {!! Form::text('valor',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contrato','Contrato:') !!}
            {!! Form::text('contrato',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo','Tipo:') !!}
            {!! Form::text('tipo',null,['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}

        </div>


        {!! Form::close() !!}



    </div>

@endsection