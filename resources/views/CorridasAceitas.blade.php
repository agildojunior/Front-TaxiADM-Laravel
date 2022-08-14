<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tabela.css') }}">

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>

        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
        </label>
        <div class="sidebar">

            <header>CORRIDAS</header>
            <a href="/taxistaCorridasDisponiveis">
                <i class="fas fa-link"></i>
                <span>Disponiveis</span>
            </a>
            <a href="CorridasAceitas" class="active">
                <i class="fas fa-link"></i>
                <span>Aceitas</span>
            </a>
            <a href="/">
                <i class="fas fa-envelope"></i>
                <span>Deslogar</span>
            </a>
            
        </div>

    <body class="antialiased">

        <div class="containerprincipal">
            <div class="container2">
                
                <table class="tabela">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Origem</th>
                            <th>Destino</th>
                            <th>Cliente</th>
                            <th>Empresa</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($responseArray as $corridas)
                        @if($corridas['status'] == 'Aceita' && $corridas['id_taxi'] == '1' ) 
                        <tr>
                            <td>{{ $corridas['id_corrida'] }}</td>
                            <td>{{ $corridas['origem'] }}</td>
                            <td>{{ $corridas['destino'] }}</td>
                            <td>{{ $corridas['nome_usuario'] }}</td>
                            <td>{{ $corridas['id_empresa'] }}</td>

                            <td class="tdform">
                                <form class="formulario" action="{{ route('finalizar_Corrida', ['id' => $corridas['id_corrida']]) }}" method="get"> 
                                    <button type="submit" class="buttonfinal">Finalizar</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                    
                    
                </table>
                <div class="paginacao">
                        <div class="pagina"><</div>
                        <div class="pagina">1</div>
                        <div class="pagina">2</div>
                        <div class="pagina active">3</div>
                        <div class="pagina">4</div>
                        <div class="pagina">5</div>
                        <div class="pagina">></div>
                </div>

            </div>
        </div>
        
    </body>
</html>
