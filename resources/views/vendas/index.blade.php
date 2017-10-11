@extends ('app')
@section ('content')
    <h1>Venda</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Data</th>
            <th>Valor</th>
            <th>Contrato</th>
            <th>Tipo</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vendas as $venda)
            <tr>
                <td>{{ $venda-> data }}</td>
                <td>{{ $venda->valor }}</td>
                <td>{{ $venda->contrato }}</td>
                <td>{{ $venda->tipo }}</td>
                <td>
                    <a href="{{route('vendas',['id'=>$venda->id])}}"
                       class="btn-sm btn-success">Editar</a>
                    <a href="{{route('vendas',['id'=>$venda->id])}}"
                       class="btn-sm btn-danger">Remover</a>

                </td>
            </tr>
        @endforeach
        </tbody>

    </table>


@endsection