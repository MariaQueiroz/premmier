<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Premmier Veículos</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {!! Html::style('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css') !!}

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Premmier Veículos
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                        @else

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Relatórios<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/vendas/relatorio') }}">Vendas</a></li>
                                        <li><a href="{{ url('/fornecedors/relatorio') }}">Fornecedor</a></li>

                                    </ul>
                                </li>



                                {{--MENU DE ACESSO ÀS TABELAS--}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acessos<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('clientes') }}">Clientes</a></li>
                                    <li><a href="{{ url('/veiculos') }}">Veículos</a></li>
                                    <li><a href="{{ url('/atendentes') }}">Atendentes</a></li>
                                    <li><a href="{{ url('/fornecedors') }}">Fornecedores</a></li>
                                    <li><a href="{{ url('/compras') }}">Compras</a></li>
                                    <li><a href="{{ url('/marcas') }}">Marcas</a></li>
                                    <li><a href="{{ url('/vendas') }}">Vendas</a></li>
                                    <li><a href="{{ url('/pedidos') }}">Pedidos</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {!! Html::script('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') !!}

    <script>
        $(document).ready(function(){


            $('#tabela_relatorio,#tabela_fornecedor,#tabela_veiculo,#tabela_cliente,#tabela_atendente').DataTable( {
                "language": {
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Próximo"
                    },
                    "lengthMenu": "Mostrando _MENU_ por página",
                    "zeroRecords": "Nenhum dado encontrado - desculpe",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum dado disponível",
                    "infoFiltered": "(filtrado por _MAX_ total de dados)",
                    "search": "Pesquisar:"
                }
            } );
        });
    </script>
</body>
</html>
