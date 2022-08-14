<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
        

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
            <a href="/taxis">
                <i class="fas fa-stream"></i>
                <span>Taxis</span>
            </a>
            <a href="/addtaxis" class="active">
                <i class="fas fa-stream"></i>
                <span>Add_Taxis</span>
            </a>
            <a href="/corridas">
                <i class="fas fa-calendar"></i>
                <span>Corridas</span>
            </a>
            <!-- <a href="#">
                <i class="fas fa-question-circle"></i>
                <span>Usuarios</span>
            </a> -->
            <a href="/">
                <i class="fas fa-envelope"></i>
                <span>Deslogar</span>
            </a>
            
        </div>

    <body class="antialiased">

        <div class="containerprincipal">
            <div class="container2">
                <div class="formulario-div">
                @csrf
                    <form class="formulario" action="/adicionartaxis"  method="get"> 

                    <div class="form-group">
                        <label>Nome do Motorista</label>
                        <input type="text" placeholder="Nome do taxista" name="nome_taxista" required>
                    </div>
                    <div class="form-group">
                        <label>Telefone do Motorista</label>
                        <input type="text" placeholder="Telefone" name="telefone_taxista" required>
                    </div>
                    <div class="form-group">
                        <label>Modelo do carro</label>
                        <input type="text" placeholder="Modelo do Taxi" name="modelo_taxi" required>
                    </div>
                    <div class="form-group">
                        <label>Placa do carro</label>
                        <input type="text" placeholder="Placa do Taxi" name="placa_taxi" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="">Adicionar Taxi</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>
