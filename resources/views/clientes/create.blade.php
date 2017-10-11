@extends('layouts.app')

@section('content')

                        @if (Session::has('mensagem_sucesso'))
                            <div class="alert alert-success alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>Sucesso!</strong> {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif

                                <div class="container">
                                    <h1>Novo Cliente</h1>
                                    @if($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    {!! Form::open(['route' => 'clientes.store']) !!}
                                    <div class="form-group">
                                        {!! Form::label('nome','Nome:') !!}
                                        {!! Form::text('nome',null,['class'=>'form-control'])!!}
                                    </div>
                                    <div class="form-grou">
                                        {!! Form::label('telefone','Telefone:') !!}
                                        {!! Form::text('telefone',null,['class'=>'form-control','','placeholder'=>'(__) _____-____']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('email','Email:') !!}
                                        {!! Form::text('email',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('endereco','Endereco:') !!}
                                        {!! Form::text('endereco',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('cpf','CPF:') !!}
                                        {!! Form::text('cpf',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('rg','RG:') !!}
                                        {!! Form::text('rg',null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}

                                    </div>


                                    {!! Form::close() !!}



                                </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
