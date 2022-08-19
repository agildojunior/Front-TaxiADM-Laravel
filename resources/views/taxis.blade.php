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

            <header>TaxiADM</header>
            <a href="/home">
                <i class="fas fa-qrcode"></i>
                <span>Inicio</span>
            </a>
            <a href="/empresas">
                <i class="fas fa-link"></i>
                <span>Empresas</span>
            </a>
            <a href="/addempresas">
                <i class="fas fa-link"></i>
                <span>Add_Empresas</span>
            </a>
            <a href="/taxis" class="active">
                <i class="fas fa-stream"></i>
                <span>Taxis</span>
            </a>
            <a href="/addtaxis">
                <i class="fas fa-stream"></i>
                <span>Add_Taxis</span>
            </a>
            <a href="/corridas">
                <i class="fas fa-calendar"></i>
                <span>Corridas</span>
            </a>
            <a href="/usuarios">
                <i class="fas fa-question-circle"></i>
                <span>Usuarios</span>
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
                            <th>ID_usuario</th>
                            <th>Telefone</th>
                            <th>Modelo</th>
                            <th>Placa</th>
                            <th>...</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($responseArray as $taxi)
                        @if($taxi['ativo'] == 'true') 
                        <tr>
                            <td>{{ $taxi['id_taxis'] }}</td>
                            <td>{{ $taxi['id_usuario'] }}</td>
                            <td>{{ $taxi['telefone_taxista'] }}</td>
                            <td>{{ $taxi['modelo_taxi'] }}</td>
                            <td>{{ $taxi['placa_taxi'] }}</td>
                            <!-- <td>Pau dos Ferros RN</td> -->
                            <td class="tdform">
                                <form class="formulario" action="{{ route('delete_taxis', ['id' => $taxi['id_taxis']]) }}" method="get"> 
                                    <button type="submit" class="buttondelete">Apagar</button>
                                </form>
                                <form class="formulario" action="{{ route('editar_taxis', ['id' => $taxi['id_taxis']]) }}" method="get"> 
                                    <button type="submit" class="buttonedit">Editar</button>
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
