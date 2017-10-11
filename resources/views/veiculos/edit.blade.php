@extends ('app')

@section('content')
    <div class="container">
        <h1>Editando Veiculos: {{$veiculo->nome}}</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ["veiculos.update", $veiculo->id],'method'=>'put']) !!}

        {!! Form::label('placa', 'Placa') !!}
        {!! Form::input('text','placa',$veiculo->placa, ['class' => 'form-control','','placeholder'=>'Placa']) !!}

        {!! Form::label('chassi', 'Chassi') !!}
        {!! Form::input('text','chassi',$veiculo->chassi, ['class' => 'form-control','','placeholder'=>'Chassi']) !!}

        {!! Form::label('renavan', 'Renavan ') !!}
        {!! Form::input('text','renavan',$veiculo->renavan, ['class' => 'form-control','','placeholder'=>'Renavan']) !!}

        {!! Form::label('ano', 'Ano') !!}
        {!! Form::input('number','ano',$veiculo->ano, ['class' => 'form-control','','placeholder'=>'Ano']) !!}

        {!! Form::label('cor', 'Cor') !!}
        {!! Form::input('text','cor',$veiculo->cor, ['class' => 'form-control','','placeholder'=>'Cor']) !!}

        {!! Form::label('marcas', 'Marca') !!}
        {!! Form::input('text','marca',$veiculo->marcas, ['class' => 'form-control','autofocus','placeholder'=>'Marca']) !!}

        {!! Form::label('tipo', 'Tipo') !!}
        {!! Form::select('tipo',['carro_passeio' =>'Carro Passeio','antigo'=>'Antigo','utilitario'=>'Utilitário','suv'=>'SUV'],['class'=>'form-control']) !!}
        <br>
        {!! Form::label('quantidade_portas', 'Quantidade de portas') !!}
        {!! Form::select('quantidade_portas',['duas' =>'Duas','quatro'=>'Quatro'],['class'=> 'form-control']) !!}
        <br>
        {!! Form::label('tipo_combustivel', 'Tipo de Combustível') !!}
        {!! Form::select('tipo_combustivel',['gasolina'=>'Gasolina','alcool' => 'Alcool','diesel'=>'Diesel','flex'=>'Flex'],['class'=>'form-control']) !!}
        <br>
        {!! Form::label('cambio', 'Câmbio') !!}
        {!! Form::select('cambio',['manual'=>'Manual','automatico'=>'Automático'], ['class' => 'form-control']) !!}
        <br>
        {!! Form::label('quilometregem', 'Quilometragem') !!}
        {!! Form::input('text','Quilometragem',$veiculo->quilometragem, ['class' => 'form-control','','placeholder'=>'Quilometragem']) !!}

        {!! Form::label('preco_a_vista', 'Preço a Vista') !!}
        {!! Form::input('number','preco_a_vista',$veiculo->preco_a_vista, ['class' => 'form-control','','placeholder'=>'Preço a Vsita']) !!}

        {!! Form::label('preco_com_troca', 'Preço com Troca') !!}
        {!! Form::input('number','preco_com_troca',$veiculo->preco_com_troca, ['class' => 'form-control','','placeholder'=>'Preço com Troca']) !!}
        <br>
        {!! Form::label('ar_condicionado', 'Ar Condicionado') !!}
        {!! Form::select('ar_condicionado',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>
        {!! Form::label('direcao_hidraulica', 'Direção Hidráulica') !!}
        {!! Form::select('direcao_hidraulica',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>

        {!! Form::label('vidro_eletrico', 'Vidro Elétrico') !!}
        {!! Form::select('vidro_eletrico',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>
        {!! Form::label('ar_quente', 'Ar Quente') !!}
        {!! Form::select('ar_quente',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>

        {!! Form::label('trava_eletrica', 'Trava Elétrica') !!}
        {!! Form::select('trava_eletrica',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>

        {!! Form::label('teto_solar', 'Teto Solar') !!}
        {!! Form::select('teto_solar',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>

        {!! Form::label('air_bags', 'Air Bags') !!}
        {!! Form::select('air_bags',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>

        {!! Form::label('abs', 'ABS') !!}
        {!! Form::select('abs',['sim'=>'Sim','nao'=>'Não'], ['class' => 'form-control']) !!}
        <br>

        <div class="form-group">
            {!! Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
        </div>
        {!! Form::close() !!}



    </div>

@endsection